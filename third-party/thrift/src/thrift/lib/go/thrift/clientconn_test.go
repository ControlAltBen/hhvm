/*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

package thrift

import (
	"context"
	"errors"
	"testing"
)

var errFakeResponseRead = errors.New("error reading from FakeResponse")
var errFakeRequestWrite = errors.New("error writing FakeRequest")
var errFakeIprotoReadMessageBegin = errors.New("error reading message begin from FakeIproto")
var errFakeOprotoWriteMessageBegin = errors.New("error writing message begin from FakeIproto")
var errFakeOprotoWriteMessageEnd = errors.New("error writing message end from FakeOproto")
var errFakeOprotoFlush = errors.New("error flushing FakeOproto")

type fakeResponse struct {
	IResponse
	shouldReturnError bool
}

type fakeRequest struct {
	IRequest
	shouldReturnError bool
}

type fakeIproto struct {
	Protocol
	method            string
	typeID            MessageType
	seqID             int32
	shouldReturnError bool
}

type fakeOproto struct {
	Protocol
	errOnMessageBegin bool
	errOnMessageEnd   bool
	errOnFlush        bool
}

func (f *fakeRequest) Write(oproto Protocol) error {
	if f.shouldReturnError {
		return errFakeRequestWrite
	}
	return nil
}

func (f *fakeOproto) WriteMessageBegin(method string, typeID MessageType, seqID int32) error {
	if f.errOnMessageBegin {
		return errFakeOprotoWriteMessageBegin
	}
	return nil
}

func (f *fakeOproto) WriteMessageEnd() error {
	if f.errOnMessageEnd {
		return errFakeOprotoWriteMessageEnd
	}
	return nil
}

func (f *fakeOproto) Transport() Transport {
	return NewMemoryBuffer()
}

func (f *fakeOproto) Flush() error {
	if f.errOnFlush {
		return errFakeOprotoFlush
	}
	return nil
}

func (f *fakeIproto) ReadMessageBegin() (method string, typeID MessageType, seqID int32, err error) {
	if f.shouldReturnError {
		err = errFakeIprotoReadMessageBegin
		return
	}

	return f.method, f.typeID, f.seqID, nil
}

func (f *fakeResponse) Read(proto Protocol) error {
	if f.shouldReturnError {
		return errFakeResponseRead
	}
	return nil
}

func TestSendMsgError(t *testing.T) {
	testCases := []struct {
		proto    Protocol
		request  IRequest
		expected error
	}{
		// Bad WriteMessageBegin
		{
			proto:    &fakeOproto{errOnMessageBegin: true},
			expected: errFakeOprotoWriteMessageBegin,
		},
		// Bad request.Write
		{
			proto:    &fakeOproto{errOnMessageBegin: true},
			request:  &fakeRequest{shouldReturnError: true},
			expected: errFakeOprotoWriteMessageBegin,
		},
		// Bad WriteMessageEnd
		{
			proto:    &fakeOproto{errOnMessageEnd: true},
			request:  &fakeRequest{shouldReturnError: false},
			expected: errFakeOprotoWriteMessageEnd,
		},
		// Bad Flush
		{
			proto:    &fakeOproto{errOnFlush: true},
			request:  &fakeRequest{shouldReturnError: false},
			expected: errFakeOprotoFlush,
		},
	}
	ctx, cancel := context.WithCancel(context.Background())
	defer cancel()

	for i, testCase := range testCases {
		cc := ClientConn{proto: testCase.proto}

		if err := cc.SendMsg(ctx, "foobar", testCase.request, CALL); err.Error() != testCase.expected.Error() {
			t.Errorf("#%d: expected call to SendMsg to return \"%+v\"; got \"%+v\"", i, testCase.expected, err)
		}
	}

}

func TestRecvMsgError(t *testing.T) {
	testCases := []struct {
		proto    Protocol
		response IResponse
		expected error
	}{
		// Error reading message begin
		{
			proto:    &fakeIproto{shouldReturnError: true},
			expected: errFakeIprotoReadMessageBegin,
		},

		// Bad method name in response
		{
			proto:    &fakeIproto{method: "foobar2"},
			expected: NewApplicationException(WRONG_METHOD_NAME, "foobar failed: wrong method name"),
		},

		// Bad seqID in response
		{
			proto:    &fakeIproto{method: "foobar", seqID: -1},
			expected: NewApplicationException(WRONG_METHOD_NAME, "foobar failed: out of sequence response"),
		},

		// Bad typeID in response
		{
			proto:    &fakeIproto{method: "foobar", seqID: 0, typeID: -1},
			expected: NewApplicationException(WRONG_METHOD_NAME, "foobar failed: invalid message type"),
		},

		// Bad REPLY response body read
		{
			proto:    &fakeIproto{method: "foobar", seqID: 0, typeID: REPLY},
			response: &fakeResponse{shouldReturnError: true},
			expected: errFakeResponseRead,
		},
	}

	ctx, cancel := context.WithCancel(context.Background())
	defer cancel()

	for i, testCase := range testCases {
		cc := ClientConn{proto: testCase.proto}

		if err := cc.RecvMsg(ctx, "foobar", testCase.response); err.Error() != testCase.expected.Error() {
			t.Errorf("#%d: expected call to RecvMsg to return \"%+v\"; got \"%+v\"", i, testCase.expected, err)
		}
	}
}

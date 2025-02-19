
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT
 *  @generated
 *
 */

#pragma once

#include <thrift/lib/python/capi/constructor.h>
#include <thrift/lib/python/capi/extractor.h>

#include <thrift/compiler/test/fixtures/python_capi/src/gen-cpp2/serialized_dep_types.h>

namespace apache {
namespace thrift {
namespace python {
namespace capi {
template <>
struct Extractor<::test::fixtures::python_capi::SerializedStruct>
    : public BaseExtractor<::test::fixtures::python_capi::SerializedStruct> {
  ExtractorResult<::test::fixtures::python_capi::SerializedStruct> operator()(PyObject* obj);
  int typeCheck(PyObject* obj);
};

template <>
struct Extractor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::SerializedStruct>>
    : public BaseExtractor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::SerializedStruct>> {
  ExtractorResult<::test::fixtures::python_capi::SerializedStruct> operator()(PyObject* obj);
};

template <>
struct Constructor<::test::fixtures::python_capi::SerializedStruct>
    : public BaseConstructor<::test::fixtures::python_capi::SerializedStruct> {
  PyObject* operator()(const ::test::fixtures::python_capi::SerializedStruct& val);
};

template <>
struct Constructor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::SerializedStruct>>
    : public BaseConstructor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::SerializedStruct>> {
  PyObject* operator()(const ::test::fixtures::python_capi::SerializedStruct& val);
};

template <>
struct Extractor<::test::fixtures::python_capi::SerializedUnion>
    : public BaseExtractor<::test::fixtures::python_capi::SerializedUnion> {
  ExtractorResult<::test::fixtures::python_capi::SerializedUnion> operator()(PyObject* obj);
  int typeCheck(PyObject* obj);
};

template <>
struct Extractor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::SerializedUnion>>
    : public BaseExtractor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::SerializedUnion>> {
  ExtractorResult<::test::fixtures::python_capi::SerializedUnion> operator()(PyObject* obj);
};

template <>
struct Constructor<::test::fixtures::python_capi::SerializedUnion>
    : public BaseConstructor<::test::fixtures::python_capi::SerializedUnion> {
  PyObject* operator()(const ::test::fixtures::python_capi::SerializedUnion& val);
};

template <>
struct Constructor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::SerializedUnion>>
    : public BaseConstructor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::SerializedUnion>> {
  PyObject* operator()(const ::test::fixtures::python_capi::SerializedUnion& val);
};

template <>
struct Extractor<::test::fixtures::python_capi::SerializedError>
    : public BaseExtractor<::test::fixtures::python_capi::SerializedError> {
  ExtractorResult<::test::fixtures::python_capi::SerializedError> operator()(PyObject* obj);
  int typeCheck(PyObject* obj);
};

template <>
struct Extractor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::SerializedError>>
    : public BaseExtractor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::SerializedError>> {
  ExtractorResult<::test::fixtures::python_capi::SerializedError> operator()(PyObject* obj);
};

template <>
struct Constructor<::test::fixtures::python_capi::SerializedError>
    : public BaseConstructor<::test::fixtures::python_capi::SerializedError> {
  PyObject* operator()(const ::test::fixtures::python_capi::SerializedError& val);
};

template <>
struct Constructor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::SerializedError>>
    : public BaseConstructor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::SerializedError>> {
  PyObject* operator()(const ::test::fixtures::python_capi::SerializedError& val);
};

template <>
struct Extractor<::test::fixtures::python_capi::MarshalStruct>
    : public BaseExtractor<::test::fixtures::python_capi::MarshalStruct> {
  ExtractorResult<::test::fixtures::python_capi::MarshalStruct> operator()(PyObject* obj);
  int typeCheck(PyObject* obj);
};

template <>
struct Extractor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::MarshalStruct>>
    : public BaseExtractor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::MarshalStruct>> {
  ExtractorResult<::test::fixtures::python_capi::MarshalStruct> operator()(PyObject* obj);
};

template <>
struct Constructor<::test::fixtures::python_capi::MarshalStruct>
    : public BaseConstructor<::test::fixtures::python_capi::MarshalStruct> {
  PyObject* operator()(const ::test::fixtures::python_capi::MarshalStruct& val);
};

template <>
struct Constructor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::MarshalStruct>>
    : public BaseConstructor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::MarshalStruct>> {
  PyObject* operator()(const ::test::fixtures::python_capi::MarshalStruct& val);
};

template <>
struct Extractor<::test::fixtures::python_capi::MarshalUnion>
    : public BaseExtractor<::test::fixtures::python_capi::MarshalUnion> {
  ExtractorResult<::test::fixtures::python_capi::MarshalUnion> operator()(PyObject* obj);
  int typeCheck(PyObject* obj);
};

template <>
struct Extractor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::MarshalUnion>>
    : public BaseExtractor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::MarshalUnion>> {
  ExtractorResult<::test::fixtures::python_capi::MarshalUnion> operator()(PyObject* obj);
};

template <>
struct Constructor<::test::fixtures::python_capi::MarshalUnion>
    : public BaseConstructor<::test::fixtures::python_capi::MarshalUnion> {
  PyObject* operator()(const ::test::fixtures::python_capi::MarshalUnion& val);
};

template <>
struct Constructor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::MarshalUnion>>
    : public BaseConstructor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::MarshalUnion>> {
  PyObject* operator()(const ::test::fixtures::python_capi::MarshalUnion& val);
};

template <>
struct Extractor<::test::fixtures::python_capi::MarshalError>
    : public BaseExtractor<::test::fixtures::python_capi::MarshalError> {
  ExtractorResult<::test::fixtures::python_capi::MarshalError> operator()(PyObject* obj);
  int typeCheck(PyObject* obj);
};

template <>
struct Extractor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::MarshalError>>
    : public BaseExtractor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::MarshalError>> {
  ExtractorResult<::test::fixtures::python_capi::MarshalError> operator()(PyObject* obj);
};

template <>
struct Constructor<::test::fixtures::python_capi::MarshalError>
    : public BaseConstructor<::test::fixtures::python_capi::MarshalError> {
  PyObject* operator()(const ::test::fixtures::python_capi::MarshalError& val);
};

template <>
struct Constructor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::MarshalError>>
    : public BaseConstructor<::apache::thrift::python::capi::ComposedStruct<
        ::test::fixtures::python_capi::MarshalError>> {
  PyObject* operator()(const ::test::fixtures::python_capi::MarshalError& val);
};

} // namespace capi
} // namespace python
} // namespace thrift
} // namespace apache

<?hh



<<__EntryPoint>>
function main_935() :mixed{
$i = 0;
 print ++$i;
 print "\t";
 print ('1.2'!==true) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !==true) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = true;
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== true	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!==false) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !==false) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = false;
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== false	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!==1) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !==1) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 1;
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== 1	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!==0) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !==0) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 0;
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== 0	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!==-1) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !==-1) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = -1;
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== -1	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!=='1') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !=='1') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '1';
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== '1'	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!=='0') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !=='0') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '0';
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== '0'	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!=='-1') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !=='-1') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '-1';
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== '-1'	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!==null) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !==null) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = null;
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== null	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!==dict[]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !==dict[]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = dict[];
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== array()	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!==vec[1]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !==vec[1]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = vec[1];
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== array(1)	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!==vec[2]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !==vec[2]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = vec[2];
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== array(2)	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!==vec['1']) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !==vec['1']) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = vec['1'];
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== array('1')	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!==dict['0' => '1']) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !==dict['0' => '1']) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = dict['0' => '1'];
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== array('0' => '1')	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!==vec['a']) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !==vec['a']) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = vec['a'];
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== array('a')	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!==dict['a' => 1]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !==dict['a' => 1]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = dict['a' => 1];
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== array('a' => 1)	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!==dict['b' => 1]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !==dict['b' => 1]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = dict['b' => 1];
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== array('b' => 1)	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!==dict['a' => 1, 'b' => 2]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !==dict['a' => 1, 'b' => 2]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = dict['a' => 1, 'b' => 2];
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== array('a' => 1, 'b' => 2)	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!==vec[dict['a' => 1]]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !==vec[dict['a' => 1]]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = vec[dict['a' => 1]];
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== array(array('a' => 1))	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!==vec[dict['b' => 1]]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !==vec[dict['b' => 1]]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = vec[dict['b' => 1]];
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== array(array('b' => 1))	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!=='php') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !=='php') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 'php';
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== 'php'	";
 print "\n";
 print ++$i;
 print "\t";
 print ('1.2'!=='') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '1.2';
 print ($a !=='') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '';
 print ('1.2'!==$b) ? 'Y' : 'N';
 print ($a !==$b) ? 'Y' : 'N';
 print "\t";
 print "'1.2' !== ''	";
 print "\n";
}

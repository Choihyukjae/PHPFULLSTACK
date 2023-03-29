<?php

$week = array("sun","mon","tue","wed");


$week2 = array($week[1],$week[3],$week[0],$week[2]);

echo $week2[3];

$arr_ass = array("key1" => "val1","key2"=>"val2");

echo $arr_ass["key2"];


$arr_food = array("치킨" => "닭",  "피자" => "밀가루",  "김치찌개" => "김치"
                    ,"된장찌개" => "된장","안녕","부대찌개"=>"햄","잘가");
echo $arr_food[];

$arr_temp = array(
                    array(1,2,3,4)
                    ,array(5,6,7,8)
                    ,array(
                        array(9,10,11)
                    ));
$arr_temp_3 = $arr_temp[2];
$arr_temp_3_c = array(
                        array(9,10,11)
                    );
var_dump($arr_temp_3_c);

배열의 원소 삭제 :unset()
$arr_week = array("sun","mon","delete","tue","wed");
unset($arr_week[2]);
print_r($arr_week);

$arr_ass_del = array("된장찌개" =>"파"
                    ,"볶음밥" =>"양파"
                    ,"김치" =>"마늘"
                    ,"비빔밥" =>"참기름");
unset($arr_ass_del["김치"]);
print_r($arr_ass_del);


중복되지 않는 원소를 반환 : array_diff()
$arr_diff_1 = array("a","b","c");
$arr_diff_2 = array("a","b","d");
$arr_diff = array_diff($arr_diff_1,$arr_diff_2);
print_r($arr_diff);
배열의 정렬 : asort(), arsort(), ksort(), krsort()

asort();

$arr_asort = array("b","a","d","c");
asort($arr_asort);
print_r($arr_asort);


arsort();
$arr_asort = array("b","a","d","c");
arsort($arr_asort);
print_r($arr_asort);


ksort();
$arr_ass = array("key1" => "val1"
                    ,"key3"=>"val3"
                    ,"key4"=>"val4"
                    ,"key2"=>"val2");
ksort($arr_ass);
print_r($arr_ass);
krsort();
$arr_ass = array("key1" => "val1"
                    ,"key3"=>"val3"
                    ,"key4"=>"val4"
                    ,"key2"=>"val2");
krsort($arr_ass);
print_r($arr_ass);
echo count($arr_ass);
array 의 사이즈를 반환하는 함수 : count();

foreach( $array as $key=> $val){}

$arr1 = array("a" => "1"
                    ,"b"=>"2"
                    ,"c"=>"3"
                    ,"d"=>"4");
foreach($arr1 as $key => $val)
{
    echo $key." : ".$val."\n";
}
foreach( $array as $val){}
$arr_ass = array("key1" => "val1"
                    ,"key3"=>"val3"
                    ,"key4"=>"val4"
                    ,"key2"=>"val2");
foreach($arr1 as $val)
{
    echo $val."\n";
// }                             
//foreach 문을 이용해서 키가 "삭제"인 요소를 제거해주세요
//if문 사용, unset() X  키가 "삭제" 이외는 "키 : 값" 으로 출력
$arr1= array("된장찌개" =>"파"
                    ,"볶음밥" =>"양파"
                    ,"삭제"=>"값값"
                    ,"김치" =>"마늘"
                    ,"비빔밥" =>"참기름"
                    );


foreach($arr1 as $key => $val)
{
    if($key == "삭제")
    {
        unset($arr1[$key]);
    }
    else 
    {
        echo $key." : ".$val."\n";
    }
}
?>

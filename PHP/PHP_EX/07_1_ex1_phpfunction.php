<?php

// min, max, floor, ceil, round, rand
// echo floor(4.9);
// echo round(4.10);
// echo ceil(4.1);
// 날짜 관련 함수 
// echo date('Y-m-d H:i:s ');
    // echo 1000000000000000000;


//난수함수
// echo mt_rand(0,3);
// echo PHP_OS;
// echo PHP_VERSION;
// var_dump($GLOBALS);

//상수 선언(명명규칙 : 상수명은 꼭 대문자로 작성한다.)
// define("INT_ONE",5);
// echo INT_ONE;


// for ($i=0; $i < 6; $i++) {
//     echo rand(1,45)."\n";
// }
// 문자열 합치기    
// $str_1 = "aaa";
// $str_2 = "bbb";
// $str_sum = $str_1.$str_2;
//     echo $str_sum

// 대소문자 변소
$str_en = "abcd efgh";
echo strtoupper($str_en)."\n";
//맨앞 글자만 대문자로 변환
echo ucfirst($str_en)."\n";
//각 단언의 맨앞글자만 대문자로 변환
echo ucwords($str_en)."\n";
//URL 관련 함수
$url = "www.google.com";
$arr_url = parse_url($url);
var_dump($arr_url); 

?>
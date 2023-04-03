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
// $str_en = "abcd efgh";
// echo strtoupper($str_en)."\n";
//맨앞 글자만 대문자로 변환
// echo ucfirst($str_en)."\n";
//각 단언의 맨앞글자만 대문자로 변환
// echo ucwords($str_en)."\n";
//URL 관련 함수
// $url = "www.google.com";
// $arr_url = parse_url($url);
// var_dump($arr_url); 


//역순의 문자열
// $str_abcd = "abcd";
// echo strrev($str_abcd);


//문자열 자르기
// $str_1 = "가나다라마";
// echo substr($str_1, 3);
// $str_tng = "안녕하세요. PHP입니다.";
// echo substr($str_tng, 17)."\n";
// echo substr($str_tng,9,-12)


//문자열 빈공간 지우기
// $str_1 = "        abcd                ";
// echo trim($str_1);

//문자열의 길이를 구하는 함수
// $str_len = "가나다라";

// echo strlen($str_len);

//문자열 포맷에 따라 출력하는 함수
// printf("안녕하세요. %s입니다. %d 하이","PHP",1234);
// define("welcome","안녕하세요. %s 님.");
// printf(welcome, "홍길동");

//기본 포맷 : ERROR(숫자) : XXX ERROR가 발생했습니다.
//에러 번호 : 에러종류
// 1       :    TLTMXPA
    // 2      :    로그인
    // 3      :    접속 
    // mb_substr("aaaa");

// 문자열을 분리하는 함수
    // $str_sscanf = "가나다라 50 abcd";
    // sscanf($str_sscanf, "%s %d %s",$str_ko,$int_d, $str_en);
    // echo $str_ko, "\n", $int_d,"\n",$str_en,"\n";

    //문자열 반복해서 찍어주는 함수
    // echo str_repeat("호날두",3);

    //문자열을 특정 문자열로 분리하는 함수
    // $str_exp1 = "홍길동, 27세, 남자, 의적, 조선";
    // $arr_exp1 = explode(",",$str_exp1);

    // print_r($arr_exp1);


    //배열을 특정 문자열로 합치는 함수 : implode
    // $str_exp1 = "홍길동, 27세, 남자, 의적, 조선";
    // $arr_exp1 = explode(",",$sr_exp1);
    // $str_imp1 = implode("123",$arr_exp1);
    // echo $str_imp1;


    
    // $str_2 =  mb_substr($str_1,0,12);
    // $str_3 = "Happy";
    // echo $str_2.$str_3."\n";    
    
    // $result = str_replace('Hello','Happy',$str_1);
    // echo $result."\n"; 

    //함수명 : my_str_replace
    //리턴값 : String $result_str

    // $str_1 = "I am always Hello";
    // $arr_str1 = explode(" ",$str_1);
    // $n = count($arr_str1);

    // for ($i=0; $i < $n ; $i++) 
    // { 
    //     if($arr_str1[] == "Hello")
    //     {
            
    //     }    
    // }
    // $str_all = "I am always Hello.";
    // function my_str_replace($str_all)
    // {
    //     $str_expl = explode("Hello", $str_all);
    //     $str_impl = implode("Happy", $str_expl);
    //     $result_str = $str_impl;
    //     return $result_str;
    // }
    // echo my_str_replace($str_all);
    

    //재사용성 개선


    $str_all = "I am always Hello.";
    function my_str_replace($pram_str,$param_separator,$param_ch)
    {
        $str_expl = explode($param_separator, $pram_str);
        $result_str = implode($param_ch, $str_expl);
        return $result_str;
    }
    echo my_str_replace($str_all,"Hello","Happy");
?>
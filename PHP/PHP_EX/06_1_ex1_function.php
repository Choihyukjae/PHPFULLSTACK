<?php
    // $a = 22;
    // $b = 3;
    // $sum = $a + $b;
    // echo $sum ;
//function
// function fnc_add($int_a, $int_b)
// {
//     $sum = $int_a + $int_b;

//     return $sum;
// }

// $result_add = fnc_add(10 , 9);
// echo $result_add ;
//가변 파라미터 함수
function fnc_args_add()
{
    $args = func_get_args(); //가변 파라미터 습득
    $sum = 0; //더하기 결과 저장 변수

    //루프: 더하기 실행
    foreach ($args as $val) {
        $sum += $val ;
    }
    return $sum;
}

echo fnc_args_add(1,2,3,4);
?>
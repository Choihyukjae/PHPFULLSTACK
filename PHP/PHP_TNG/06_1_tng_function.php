<?php

//두 매개변수의 차를 구하는 함수를 구현해 주세요
function fun_subt($int_a , $int_b)
{
    return  $int_a - $int_b;
}   
echo fun_subt(10 , 9)."\n";

/// 매개변수를 나눈 함수를 구현해 주세요
function fun_div($int_a , $int_b)
{
    $div = $int_a / $int_b;
    
    return  $div;
}   
echo fun_div(10 , 5)."\n";


// 두 매개변수를 곱하는 함수를 구현해 주세요
// function fun_mul($int_a , $int_b)
// {
//     $mult = $int_a * $int_b;
    
//     return  $mult;
// }   
// echo fun_mul(10 , 9);

//각각의 결과를 출력해주세요

//빼기
function fnc_args_minu()
{

    $args = func_get_args(); 
    $sum = 0; 

    foreach ($args as $key=>$val){
    if($key === 0)
    {
        $sum = $val;
    }
    else
    {
        $sum -= $val;
    }
}
    return $sum;
}
echo fnc_args_minu(10,10,5)."\n";
//나누기
function fnc_args_div()
{
    $args = func_get_args(); 
    $sum = 10; 
    foreach ($args as $val) 
    {
    if($val === $args[0])
    {
        $sum = $val ;
    }
    else{
        $sum /= $val;
        }
    }
    return $sum;
}
echo fnc_args_div(10,2,5)."\n";
//곱하기
function fnc_args_mult()
{
    $args = func_get_args(); 
    $sum = 1; 
    foreach ($args as $val) {
    if($val === $args[0])
    {
        $sum = $val;
    }
    else{
        $sum *= $val;
        }
    }
    return $sum;
}
echo fnc_args_mult(10,2,5)."\n";


// function fnc_args_minu()
// {

//     $args = func_get_args(); 
//     $sum = $args[0]+$args[0]; 

//     foreach ($args as $val){
//         $sum -= $val;
// }
//     return $sum;
// }
// echo fnc_args_minu(10,2,5)."\n";
?>
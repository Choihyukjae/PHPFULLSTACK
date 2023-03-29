<?php

//재귀함수
// function rcc( $param_a)
// {
//     if($param_a === 1)
//     {
//         return 1;
//     }    
//     return $param_a * rcc($param_a - 1);
// }
// echo rcc(4);

$arr_base = array(1,2,3,4,5);

function leng($a)
{   
    $count = 0;
    foreach ($a as $val) {
        $count ++;
    }
    return $count; 
}

echo leng($arr_base);

?>
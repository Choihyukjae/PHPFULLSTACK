<?php

//1. 배열의 길이를 반환하는 my_len() 함수를 작성하시오.

// $arr_base = array(1,2,3,4,5);
// for ($i=1; $i <= count($arr_base); $i++) { 
//     echo $i,"\n";
// }


// $arr_base = array(1,2,3,4,5);
// function arr_a($a)
// {
//     $count = 0;
//     foreach ($a as $val) 
//     {
//         $count ++;
//     }
//     return $count;
// }
// echo arr_a($arr_base);

//별찍기를 함수로 만들어주세요

// function fnc_star($a){
// for($i=1; $i<= $a; $i++)
// {
//     for($f=0; $f<$i; $f++) 
//     { 
//         echo "*";
//     }
//     echo "\n";
// }
// }
// echo fnc_star(6);

function fnc_st($a)
{
    for($f=0; $f<$a; $f++) 
    { 
        echo "*";
    }
    echo "\n";
}

function fnc_a($g)
{   
    for ($i=1; $i <= $g ; $i++) 
    { 
        fnc_st($i);
    }
}
    fnc_a(6);

echo "\n";

function fnc_k($g)
{   
        
    for ($i=0; $i < $g ; $i++) 
    { 
        fnc_st($g);

    }
}
    fnc_k(3);


?>
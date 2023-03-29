<?php
//전역변수


// function fnc_add()
// {
//     global $int_a;
//     $int_a = $int_a + 10;
//     return $int_a;
// }
    
//     $int_a = 10;

//     echo fnc_add();


// 정적 변수



// function fnc_add_1()
// {
//     $i = 1;
//     echo $i."\n";
//     $i++;
// }

// for($i = 0; $i < 3; $i++)
// {
//     fnc_add_1();
// }


// call by value

// function fnc_val($int_a, $int_b)
// {
//     $int_a = 3;
//     $int_b = 4;
// }

// $int_a = 1;
// $int_a = 2;
// fnc_val(5,6);

// echo $int_a," ", $int_b;

//call by reference

function fnc_val(&$a, &$b)
{
    $a = 3;
    $b = 4;
}

$int_a = 1;
$int_b = 2;
fnc_val($int_a, $int_b);

echo $int_a," ", $int_b;
?>

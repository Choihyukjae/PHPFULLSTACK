<?php

$f_food = file("../PHP_EX/sam/food.txt",);
$print_food = "";
foreach($f_food as $val)
{
    if(trim($val) ==="국밥")
    {
        $print_food .=$val."스테이크\n";
    }
    else
    {
        $print_food .= $val;
    }
}

print $print_food;

$f_food = fopen("../PHP_EX/sam/food.txt","w");
fputs($f_food,$print_food);
fclose($f_food);

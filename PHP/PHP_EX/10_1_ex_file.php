<?php

//파일을 여는 방법 : fopen(파일위치, 파일여는 방식)
// $f_food = fopen("./sam/food.txt","r");//r : 읽기전용
// $f_food = fopen("./sam/food.txt","w");//w : 쓰기전용(포인터가 파일 시작부분)
$f_food = fopen("./sam/food.txt","a");//a : 쓰기전용(포인터가 파일의 끝부분)


// var_dump($f_food);

//파일을 한줄씩 읽어오는 방법 : fgets(open 한 파일)

// $arr_1 = array(print fgets($f_food,));
// $n = count($arr_1);
// for ($i=0; $i < $n ; $i++) 
//     { 
//         print fgets($f_food,);
//     }

    // while(!feof($f_food))
    // {
    //     print fgets($f_food);
    // }

// readfile("./sam/food.txt","r");

//파일을 닫는 방법 :fclose(open한 파일)

$f_food = fopen("./sam/food.txt","a");

//파일에 내용 추가 : fputs(open한 파일, 추가할 내용 )
fputs($f_food,"\n돈까스");
fputs($f_food,"\n돈까스2");
fputs($f_food,"\n돈까스3");


fclose($f_food);

?>
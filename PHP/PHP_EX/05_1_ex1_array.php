<?php

// $week = array("sun","mon","tue","wed");


// $week2 = array($week[1],$week[3],$week[0],$week[2]);

// echo $week2[3];

// $arr_ass = array("key1" => "val1","key2"=>"val2");

// echo $arr_ass["key2"];


// $arr_food = array("치킨" => "닭",  "피자" => "밀가루",  "김치찌개" => "김치"
//                     ,"된장찌개" => "된장","안녕","부대찌개"=>"햄","잘가");
// echo $arr_food[];

// $arr_temp = array(
//                     array(1,2,3,4)
//                     ,array(5,6,7,8)
//                     ,array(
//                         array(9,10,11)
//                     ));
// $arr_temp_3 = $arr_temp[2];
// $arr_temp_3_c = array(
//                         array(9,10,11)
//                     );
// var_dump($arr_temp_3_c);
// 
//배열의 원소 삭제 :unset()
// $arr_week = array("sun","mon","delete","tue","wed");
// unset($arr_week[2]);
// print_r($arr_week);

$arr_ass_del = array("된장찌개" =>"파"
                    ,"볶음밥" =>"양파"
                    ,"김치" =>"마늘"
                    ,"비빔밥" =>"참기름");
unset($arr_ass_del["김치"]);
print_r($arr_ass_del);



?>

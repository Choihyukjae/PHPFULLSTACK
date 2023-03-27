<?php

    //음식종류 5개 이상 배열로 만들어 주세요

    $food = array("치킨","피자","떡볶이","햄버거","짜장면","짬뽕");
    $rand_no = rand(0,5);
    echo $food[$rand_no];

?>
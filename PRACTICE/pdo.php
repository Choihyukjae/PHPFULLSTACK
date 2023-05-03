<?php

//5월2일 보강 pdo class

//1. db 접속

$db_option =[
    PDO::ATTR_EMULATE_PREPARES => false  // DB의 Prepared Statement 기능을 사용하도록 설정
    ,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // PDO Exception 을 Throws 하도록 설정
    ,PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC // 연상배열로 fetch 하도록 설정
];  
$conn = new PDO ( "mysql:host=localhost;dbname=board;charset=utf8mb4"
, "root", "root506", $db_option );

$conn =null ;
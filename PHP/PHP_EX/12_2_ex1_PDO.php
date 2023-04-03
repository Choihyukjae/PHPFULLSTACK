<?php

$db_host            = "localhost";  //host
$db_user            = "root";       //user
$db_password        = "root506";    //password
$db_name            = "employees";  //DB name
$db_charset         = "utf8mb4";     //charset
$db_dns             = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
$db_option          = 
    array(
        PDO::ATTR_EMULATE_PREPARES         => false // DB의 Prepared Statement 기능을 사용하도록 설정  (기본은 트루로 설정되있음 false 로 바꿔주기)
        ,PDO::ATTR_ERRMODE                 => PDO::ERRMODE_EXCEPTION // PDO Exception을 Throws 하도록 설정
        ,PDO::ATTR_DEFAULT_FETCH_MODE      => PDO::FETCH_ASSOC // 연상배열로 Fetch를 하도록 설정
    );

//PDO Class로 DB 연동
$obj_conn = new PDO( $db_dns, $db_user, $db_password, $db_option );

// 사번 10001,10002의 현재 연봉과 사번, 생일을 가져오는 쿼리를 작성해주세요
$sql = 
    " SELECT "
    ."   emp.emp_no"
    ."  ,sal.salary"
    ."  ,emp.birth_date"
    ." FROM " 
    ."  employees emp   " 
    ."  INNER JOIN salaries sal"
    ."      ON emp.emp_no = sal.emp_no"
    ."  WHERE   "
    ." ( "
    ."      emp.emp_no = :emp_no1" 
    ."      OR emp.emp_no = :emp_no2"
    ."  ) "
    ." AND sal.to_date >= now() ";
$arr_prepare = array(
    ":emp_no1" => 10001
    ,":emp_no2" => 10002
);

$stmt = $obj_conn->prepare( $sql ); // prepare statement를 생성
$stmt -> execute( $arr_prepare ); // 쿼리 실행
$result = $stmt->fetchAll(); // 쿼리 결과를 fetch
var_dump( $result );

$obj_conn = null; // DB 파기
// $stmt->fetchAll();의 결과는 아래와 같습니다
// foreach ($result as $val)
//     echo $val["emp_no"]." " .$val["salary"]. "  ". $val["birth_date"]."\n";

// $result =
//     array(
//         array(
//     "emp_no"=> 10001
//     ,"salary"=>88958
//     ,"birth_date"=> "1953-09-02"),
//     array(
//         "emp_no"=> 10002
//         ,"salary"=>72527
//         ,"birth_date"=> "1964-06-02"                                              
//     ))
?>
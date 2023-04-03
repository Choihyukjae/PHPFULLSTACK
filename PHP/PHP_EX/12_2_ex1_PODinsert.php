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
    $obj_conn = new PDO( $db_dns, $db_user, $db_password, $db_option );
    $sql = 
        " INSERT INTO departments("
        ."dept_no"
        .",dept_name"
        ." ) "
        ." VALUES( "
        ." :dept_no "
        ." ,:dept_name "
        ." ) ";

$arr_prepare = 
    array(
        ":dept_no"=> "d011"
        ,":dept_name"=> "PHP풀스택"
    );

$stmt = $obj_conn->prepare( $sql );
$result = $stmt ->execute( $arr_prepare );
$obj_conn->commit();
var_dump( $result );
$obj_conn = null;
?>
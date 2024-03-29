<?php

//우리가 작성한 DB Connect 함수(my_db_conn)를 이용해서 아래 데이터를 출력해주세여

//1.전체 월급의 평균
//2. 새로운 사원 정보를 employees 테이블에 등록해주세요
//3. 2에서 등록한 사원의 이름을 "길동 ", 성은 "홍" 으로 변경해 주세요.
//2,에서 등록한 사원을 삭제해 주세요 




include_once("./12_2_ex2_fnc_db_conn.php");
/////////////////////////////////////////
//1.전체 월급의 평균
$obj1_conn = null;//PDO Class 
my_db_conn( $obj1_conn );
$sql1 =
    "SELECT AVG(salary)
    FROM salaries
    ";
$stmt = $obj1_conn->prepare( $sql1 );
$stmt -> execute();
$result = $stmt->fetchAll();
var_dump( $result );
$obj1_conn = null;

/////////////////////////////////////////
// 2. 새로운 사원 정보를 employees 테이블에 등록해주세요
$obj2_conn = null;
my_db_conn( $obj2_conn );
$sql2 =
    "INSERT INTO employees(
        emp_no
    ,birth_date
    ,first_name
    ,last_name
    ,gender
    ,hire_date
    )
    VALUES
    (
    500003
    ,NOW()
    ,'hyukjae'
    ,'Choi'
    ,'M'
    ,NOW()
    )";
$stmt2 = $obj2_conn->prepare( $sql2 );
$stmt2 -> execute();
$result2 = $stmt2->fetchAll();
$obj2_conn->commit();
var_dump( $result2 );
$obj2_conn = null;

/////////////////////////////////////////////////
//3. 2에서 등록한 사원의 이름을 "길동 ", 성은 "홍" 으로 변경해 주세요.


$obj3_conn = null;
my_db_conn( $obj3_conn );
$sql3 =
    " UPDATE employees
    SET first_name = 'gildong'
        ,last_name = 'hong'
    WHERE emp_no = 500003";
    $stmt3 = $obj3_conn->prepare( $sql3 );
$stmt3 -> execute();
$result3 = $stmt3->fetchAll();
$obj3_conn->commit();
var_dump( $result3 );
$obj3_conn = null;

//////////////////////////////////////////
//2,에서 등록한 사원을 삭제해 주세요 
$obj4_conn = null;
my_db_conn( $obj4_conn );
$sql4 =
    "DELETE 
    FROM employees
    WHERE emp_no > 500000 " ;
        $stmt4 = $obj4_conn->prepare( $sql4 );
        $stmt4 -> execute();
        $result4 = $stmt4->fetchAll();
        $obj4_conn->commit();
        var_dump( $result4 );
        $obj4_conn = null;
///////////////////////////////////////////
?>
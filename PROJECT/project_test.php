<?php

// DB 연결
$dbc = mysqli_connect("localhost","root","root506","employees",3306);
// 쿼리요청
$result_query = mysqli_query($dbc,"SELECT * FROM project_test LIMIT 10 ;");


// while ($result_row = mysqli_fetch_row( $result_query ))
// {
//     // var_dump($result_row);
// }
$i1 = 10;
$stmt = $dbc->stmt_init(); // statement 를 셋팅
$stmt-> prepare ("SELECT * FROM project_test LIMIT ?;");//db 질의 할 쿼리를 작성
$stmt->bind_param("i",$i1); // prepare 셋팅
$stmt->execute(); // DB에 쿼리 질의 실행

$stmt->bind_result( $col1 , $col2 );//질의 결과를 각 아규먼트에 저장하기 위한 셋팅
$stmt->fetch(); //bind_result 에서 셋팅한 아규먼트에 값을 저장 (한번 실행 될때마다 한 레코드씩 저장)
// var_dump( $col1,$col2);

while($stmt->fetch() ) 
{
    echo "$col1 $col2\n";
}
?>
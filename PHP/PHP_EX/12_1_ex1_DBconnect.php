<?php

// DB 연결
$dbc = mysqli_connect("localhost","root","root506","employees",3306);
// 쿼리요청
$result_query = mysqli_query($dbc,"SELECT emp_no,first_name FROM employees LIMIT 5 ;");

// 한줄뽑기
// while ($result_row = mysqli_fetch_row($result_query))
// 전체 가져오기
while ($result_row = mysqli_fetch_row($result_query))
{
    var_dump($result_row);
}
// prepared Statement :
// $i1 = "F";
// $i2 = 10010;
// $i3 = 5;
// $result = null ;
// $stmt = $dbc->stmt_init(); // statement 를 셋팅
// $stmt-> prepare ("SELECT emp_no,first_name FROM employees WHERE gender = ? AND emp_no <=? LIMIT ?;");//db 질의 할 쿼리를 작성
// $stmt->bind_param("sii",$i1,$i2,$i3); // prepare 셋팅
// $stmt->execute(); // DB에 쿼리 질의 실행


//--------------이하 질의 결과를 우리가 지정한 변수에담아 사용하는 방법-----------------------
// $stmt->bind_result( $col1 , $col2 );//질의 결과를 각 아규먼트에 저장하기 위한 셋팅
// $stmt->fetch(); //bind_result 에서 셋팅한 아규먼트에 값을 저장 (한번 실행 될때마다 한 레코드씩 저장)
// var_dump( $col1,$col2);
// while($stmt->fetch() ) 
// {
//     echo "$col1 $col2\n";
// }

$result = $stmt->get_result(); //질의 결과를 저장
//패치를 루프로 돌려서 모든 질의 결과를 가져오는 방법
while($row = $result->fetch_assoc() ) 
{
    echo ($row["emp_no"]).($row["first_name"]),"\n";
}


// while ($result_row = mysqli_fetch_assoc ($result_query))
// {
//     var_dump($result_row["first_name"]);
// }

// $result_row = mysqli_fetch_row($result_query);
// var_dump($result_row);
mysqli_close($dbc);
?>
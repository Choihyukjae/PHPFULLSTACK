<?php

$dbc = mysqli_connect("localhost","root","root506","employees",3306);
//사번이 10005 이하 사원의 사번,이름(성 이름), 성별, 생일
$result_query = mysqli_query($dbc,"SELECT emp_no,CONCAT(first_name,' ',last_name) as name ,gender,birth_date
FROM employees
WHERE emp_no < 10006 ");

// $result_row = mysqli_fetch_assoc($result_query);
    if ( mysqli_num_rows($result_query)===0) 
        {
            echo"잘못된 값입니다";
        }
    else{
            while($result_row = mysqli_fetch_assoc($result_query))
            echo implode(" ",$result_row)."\n";
        }

    


    // echo ($result_row["emp_no"]." ".$result_row["gender"]
    //         ." ".$result_row["birth_date"]." ".$result_row["name"]."\n");

// while ($result_row = mysqli_fetch_assoc($result_query)) echo implode(' ', $result_row) . "\n";
// while ($result_row = mysqli_fetch_assoc($result_query))
// {
//     ob_start(); // 출력 버퍼링 시작
//     var_dump($result_row); // var_dump() 함수로 출력
//     $dump = ob_get_clean(); // 출력 버퍼를 문자열로 가져옴
//     echo $dump; // 문자열을 출력
// }

// while ($result_row = mysqli_fetch_assoc($result_query))
// {
//     if(isste($result_row) == 1 )
//     {
//         echo "없어요";
//     }
//     else
//     {
//         echo ($result_row["emp_no"]." ".$result_row["gender"]
//             ." ".$result_row["birth_date"]." ".$result_row["name"]."\n");
//     }
// }
mysqli_close($dbc);
?>
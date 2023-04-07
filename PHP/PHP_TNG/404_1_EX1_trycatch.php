<?php

include("../PHP_EX/12_2_ex2_fnc_db_conn.php");

//아래 쿼리를 이용해서 DB접속 > data획득 후 출력해 주세요
//try -catch로 에러 처리를 해주세요,
// 에러가 날 경우의 해당 에러메세지를 출력해주세요
// 정상종료일경우 "정상종료" 라고 출력해 주세요


// $sql1 = " SELECT * FROM department ";

// $sql2 = " SELECT * FROM dept_manager ";



// try
// {
    // $obj_conn = null;
    // my_db_conn( $obj_conn );
    // $sql1 = " SELECT * FROM department ";
    // $stmt = $obj_conn ->query( $sql1 );
    // $result = $stmt->fetchAll();

//     var_dump($result);
// }
// catch( Exception $e )
// {   
//     echo"--------에러 발생---------\n";
//     echo $e-> getMessage();
//     echo"\n--------에러 발생---------\n";
// }
// finally
// {   
//     if(empty($e))
//     {
//         echo "정상종료";
//     }
//     $obj_conn=null;
// }
////////////////////////////////////////////////////////////////
try
{
    $obj_conn = null;
    my_db_conn( $obj_conn );
    $sql1 = " SELECT * FROM department ";
    $stmt = $obj_conn ->query( $sql1 );
    $result = $stmt->fetchAll();
        

    $sql1 = " SELECT * FROM dept_manager ";
    $stmt = $obj_conn ->query( $sql1 );
    $result = $stmt->fetchAll();

}
catch( Exception $e )
{   
    echo"--------에러 발생---------\n";
    echo $e-> getMessage();
    echo"\n--------에러 발생---------\n";
}
finally
{   
    if(empty($e))
    {
        echo "정상종료";
    }
    $obj_conn=null;
}


?>
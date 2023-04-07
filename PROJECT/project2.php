<?php

//--------------------------------------------------------//
//---------------강아지 키운 날짜 계산----------------------//
//---------------------------------------------------------//

$now = time();        // 현재 시간을 초단위로 구해줍니다. 
$hour = date('H');    // 현재 몇시인지 구해줍니다. h는 12시간으로 표기 H는 24시간으로 표기해줍니다./
$min = date('i');      // 현재 몇분인지 구해줍니다./  
$sec = date('s');      // 현재 몇초인지 구해줍니다./
$day = mktime($hour,$min,$sec,05,01,2012);//특정하게 지정된 날짜의 시간을 초단위로 구해줍니다
$result = $now - $day;  //현재시간에서 특정날시간을 빼줍니다./
$dog_day = $result/86400; //초단위결과값을 날짜로 환산해줍니다./
// echo "똥개와 함께한지  $dog_day 일째"; //구해진 날짜값을 출력합니다./


//-----------------------------------------------------
//진행률 계산하기
//-----------------------------------------------------


//데이터 베이스에서 진행 완료된 목록을 개수로 변환하여 그값 (개수)을 가져온다
//그값(개수) 에 +10을 더하여 결과 도출 array 로 가져오면 될듯 
function my_db_conn( &$param_conn )
{
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

    //PDO Class 로 DB 연동
    $param_conn = new PDO( $db_dns, $db_user, $db_password, $db_option );
}
$obj_conn = null;
my_db_conn( $obj_conn );
$sql = 
    " SELECT "
    ." * "
    ." FROM "
    ." project_test "
    ." LIMIT :limit_start ";

    $arr_prepare =
    array(
        ":limit_start"=> 10
    );

$stmt = $obj_conn->prepare( $sql );
$stmt-> execute( $arr_prepare );
$result = $stmt->fetchAll();     //데이터베이스의 완료된 목록을 array로 받아옵니다
$dog_progress = count( $result ) * 10 ; //받아온 array 의 사이즈에 10을 곱해줍니다 ex) 목록이 4개면 40 그값을 변수 $dog_progress에 넣어줍니다 ->52 라인으로 이동
$obj_conn = null;
//  $dog_progress = 진행률 수치

//------------------------------------------------
//---------강아지 행복 수치 를 환산하는 if문---------
//------------------------------------------


$pj_complet = $dog_progress;  //변수 $dog_progress(진행률) 의 값을 $pj_complet 에 넣어준뒤 그걸 행복수치로 반환

    function happy_lv($pj_complet)
    {
        $result = "";
        if( $pj_complet > 0 && 20 >= $pj_complet )
        {
            $result ="화남";
        }
        else if( $pj_complet > 20 && 40 >= $pj_complet )
        {
            $result ="서운함";
        }
        else if( $pj_complet > 40 && 60 >= $pj_complet )
        {
            $result ="보통";
        }
        else if( $pj_complet > 60 && 80 >= $pj_complet )
        {
            $result = "행복";
        }
        else if( $pj_complet > 80 && 100 >= $pj_complet )
        {
            $result = "매우행복";
        }
        return $result;
    }


    $dog_happy_lv = happy_lv($pj_complet); // 54번 라인에서 만들어준 함수를 이용해 강아지 행복수치 반환한걸 변수 $dog_happy_lv 에 저장
    // echo $dog_happy_lv // 에코로 찍어보니 잘나옴
    // $dog_happy_lv = 행복수치 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color : greenyellow;
            font-size: 60px;
            position: absolute;
            left: 600px;
        }
        .img_1{
            position: absolute;
            width: 231px;
            height: 266px;
            left: 41px;
            top: 211px;
        }
        .tex_1{
            position: absolute;
            width: 229px;
            height: 260px;
            left: 41px;
            top: 479px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 44px;
            color: #000000;
        }
        
        .tex_2{
            position: absolute;
            width: 239px;
            height: 98px;
            left: 41px;
            top: 777px;
            background: #34C866;
            font-size:25px;
            text-align: center;
        }
        .tex_3{
            position: absolute;
            width: 249px;
            height: 664px;
            left: 295px;
            top: 211px;
            background: #D9D9D9;
            font-size:25px;
            text-align: center;
        }
        .tex_4{
            position: absolute;
            width: 238px;
            height: 658px;
            left: 584px;
            top: 209px;
            background: #D9D9D9;
            font-size:25px;
            text-align: center;
        }
        .tex_5{
            position: absolute;
            width: 248px;
            height: 658px;
            left: 862px;
            top: 211px;
            background: #D9D9D9;
            font-size:25px;
            text-align: center;
        }
        .tex_6{
            position: absolute;
            width: 227px;
            height: 93px;
            left: 1181px;
            top: 214px;
            background: #FF2B77;
            font-size:25px;
            text-align: center;
        }
        .tex_7{
            position: absolute;
            width: 215px;
            height: 216.5px;
            left: 1184px;
            top: 379px;
            background: #D9D9D9;
            font-size:25px;
            text-align: center;
        }
        .tex_8{
            position: absolute;
            width: 233px;
            height: 129px;
            left: 1175px;
            top: 740px;
            background: #F1FF55;
            font-size:25px;
            text-align: center;
            line-height: 100px;
        }
        p{
            font-size: 11.5px;
        }
    </style>
</head>
<body>
    <h1>애견 TO DO LIST</h1>
    <img class = "img_1" src="./다운로드.jpg" alt="강아지 사진">
    <div class = "tex_1" name="" id="">강아지정보<br>
        이름:똥개<br>
        나이 : 3살<br>
        종 : 불독<br>
        몸무게: 5.2kg <br>
        생일 : 4월1일</div>
    <div class = "tex_2" name="" id="">똥개와 함께한지 <br> <?=$dog_day?>일째</div>
    <div class = "tex_3" name="" id="">진행예정</div>
    <div class = "tex_4" name="" id="">진행중</div>
    <div class = "tex_5" name="" id="">진행완료</div>
    <div class = "tex_6" name="" id="">진행률 <br> <?=$dog_progress?></div>
    <div class = "tex_7" name="" id="">강아지 행복수치 <br><br><?=$dog_happy_lv?><br><br> <p>진행률 0~20 화남
        진행률 21~40 서운함<br>
        진행률41~60 보통
        진행률61~80 행복<br>
        진행률81~100 매우행복</p></div>
    <div class = "tex_8" name="" id=""><a href="https://google.com">달력으로 보기</a></div>
</body>
</html>
<?php

// 콘솔에 출력
// print "프린트\n";

// echo "에코\n";

// print_r(array(1, 2, 3));

// var_dump(array(3, 4, 5));

// 변수 : 정보들을 저장하는 장소
// $int_i = 1; // 변수명은 영어, 숫자, '_'만 사용할 것
// echo $int_i;
// $sum = $int_i + 5;

// 스네이크 기법 : 영어 소문자, 단어사이의 연결은 '_'로 작성하는 방법(예 : $arr_food)
// 카멜 기법 : 영어만 사용, 단어 사이의 첫글자로 대문자로 작성(예 : $arrFood)

//  숫자 10을 $i_ten, 숫자 5를 $i_five, 숫자 8을 $i_eight, 숫자 3을 $i_three 에 저장하고,
// 아래 연상을 해주세요.
// 10 - 5 + 8 하고, 3을 나눈 나머지를 구해주세요.

$i_ten = 10;
$i_five = 5;
$i_eight = 8;
$i_three = 3;

// $result = ($i_ten - $i_five + $i_eight) % $i_three;

// echo $result;

// 증가 연산자, 감소 연산자
$i_increase = 0;
$i_decrease = 0;

++$i_increase; // 전위 증가 연산자
$i_increase++; // 후위 증가 연산자

--$i_decrease; // 전위 감소 연산자
$i_decrease--; // 후위 감소 연산자

// echo $i_increase;
$i_increase = 0;
// echo ++$i_increase;
// echo $i_increase++;

// echo $i_increase;

// 산술 대입 연산자(축약형)
$i = 0;

$i = $i + 2;
$i += 2;
$i -= 1;
$i *= 3;
$i /= 4;
$i = 6;
$i %= 6;
// 문자 합치기
$str = "aa";
$str = $str."aa";
$str .= "bb";
// echo $str;


// 비교 연산자
// $a < $b : a가 b보다 작다, b가 a보다 크다.
// $a > $b : a가 b보다 크다, b가 a보다 작다.
// $a <= $b : a가 b보다 작거나 같다, b가 a보다 크거나 같다.
// $a >= $b : a가 b보다 크거나 같다, b가 a보다 작거나 같다.
// $a != $b : a와 b의 값이 다르다.
// $a !== $b : a와 b의 값과 데이터 형식이 다르다.
// $a == $b : a와 b의 값이 같다.
// $a === $b : a와 b의 값과 데이터 형식이 같다.

$a = 1;
$b = "1";
// var_dump( $a != $b);
// var_dump( $a !== $b);

// 데이터를 비교할 때는 데이터 형식까지 비교해야 버그가 줄어듭니다.
// var_dump( false === 0 );
// var_dump( true === 1 );

// 논리 연산자
// && (and 연산자) : 모든 조건이 만족해야할 때 사용
$i = 1;
// var_dump( $i === 1 && $i <= 1 && $i > 0 );
// || (or 연산자) : 여러 조건 중 하나만 만족할 때 사용
$i = 1;
// var_dump( $i === 1 || $i < 1 && $i > 0 );
// | (not 연산자) : 결과를 반전 시킬 때 사용
$i = 1;
// var_dump( !($i ===2) );

// 삼항연산자 : 조건 ? 참일 경우 : 거짓일 경우
$i = 1;
$str = "";
$i < 0 ? $str = "000" : $str = "111";
// echo $str;

// 삼항 연산자를 이용해서 짝수일때는 짝수를 "짝수"
// 홀수 일때는 "홀수"를 출력하는 프로글매을 만들어주세요.

$a = 1;
$str = "";

$a = ($a % 2 == 0) ? $str = "짝수" : $str = "홀수";
// echo $str; 


//---------------------------------------
// 보강 2
//---------------------------------------

// if문 
function fun_1($i)
{
    if($i % 2 ===0)
    {
        echo "짝수";
    }
    else
    {
        echo "홀수";
    }
}

// echo fun_1(5);

// $i=1;
// if($i === "1")
// {
//     echo "문자열 1입니다";
// }
// else if ($i === 1)
// {
//     echo "숫자 1입니다";
// }
// else
// {
//     echo "1이 아닙니다";
// }

//과목의 종류는 국어 영어 수학 과학
//평균점수가 60점 이상이고, 각 과목별 점수가 40점 이상 일 때 "합격"을 출력
//그 외는 "불합격"을 출력하는 프로그램을 만들어주세요
function sccc($kr_scr,$eng_scr,$math_scr,$sc_scr)
{
    if($kr_scr >=40 && $eng_scr >=40 && 
        $math_scr >=40 && $sc_scr >=40 && 
        ($kr_scr + $eng_scr + $math_scr + $sc_scr)/4 >= 60) 
    {
        echo "합격";
    }
    else
    {
        echo "불합격";
    }
}
// echo sccc(90,90,90,39);

//switch문
// $str_loc 에 지역명을 저장하고
// 서울은 "서울사람" 대구는 "대구사람" 부산은 "부산사람" 
//그외는 "타지역사람"을 출력하는 프로그램을 switch 문으로 작성해

function local_1($str_loc)
{
switch ($str_loc) {
    case "서울":
        echo "서울사람";
        break;
    case "부산":
        echo "부산사람";
        break;
    case "대구":
        echo "대구사람";
        break;
    default:
        echo $str_loc."사람";
        break;
}
}
// echo local_1("대구");

//반복문 : while,for,do_while,foreach
// while : 조건을 체크하고 연산을 실행하는 루프

// $i = 1;
// while($i !== 1)
// {
//     echo $i;
// }
//do-while : 연산을 실행하고 조건을 체크하는 루프

// do
// {
//     echo $i;
// } while ($i !== 1);

// for문 : 시작과 끝을 우리가 지정해주는 루프(루프 횟수를 지정가능);
// for($i=0; $i < 2; $i++)
//     {
//         echo $i."\n";
//     }

// 1~50 까지 반복문을 이용해서 더하는 프로그램을 만들어주세요
function sum($n)
{
    $result = 0;
for ($i=1; $i <= $n; $i++) 
{ 
    $result += $i;
}
    echo $result;
}
echo sum(100);
?>
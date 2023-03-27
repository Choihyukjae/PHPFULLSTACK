<?php
    $num = 101;
    $you="당신의 점수는";
    $score="점 입니다.";

if($num > 100 || $num<0)
{
    echo "잘못된 값을 입력하셨습니다";
}
else{
    if($num == 100)
{
    $grade="a+";
}
else if( $num >=90)
{
    $grade="a";
}
else if($num >=80)
{
    $grade="b";
}
else if($num >=70)
{
    $grade="c";
}
else if($num >=60)
{
    $grade="d";
}
else {
    $grade="f";
    
}
echo $you.$num.$score.$grade;
}
//effefef
echo 11;

?>

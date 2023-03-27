<?php
    $val=101;
    $you="당신의 점수는";
    $score="점 입니다.";
    if($val>100 || $val < 0){
        echo "잘못된 점수입니다";
    }
    else{
    switch ($val) {
        case 100:
            $grade="a+";
            break;
        case 90:
            $grade="a";
            break;
        case 80:
            $grade="b";
            break;
        case 70:
            $grade="c";
            break;
        case 60:
            $grade="d";
            break;
        default:
            $grade="f";
            break;
    }
    echo $you.$val.$score.$grade;
}
?>
<?php
    $val = 50;
    $you="당신의 점수는";
    $score="점 입니다.";

    switch ($val) {
        case 100:
            $grade="a+";
            break;
        case 90<=$val:
            $grade="a";
            break;
        case 80<=$val:
            $grade="b";
            break;
        case 70<=$val:
            $grade="c";
            break;
        case 60<=$val:
            $grade="d";
            break;
        default:
            $grade="f";
            break;
    }
    echo $you.$val.$score.$grade;
?>
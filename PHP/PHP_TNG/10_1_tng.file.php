<?php

// 파일명 : gugudan.txt
// 파일위치 : sam
// 내용은 아래와 같습니다.
// 2단
// 2 * 1 = 2
// 쭉 9단까지

$f_gugudan = fopen("../PHP_EX/sam/gugudan.txt","a");


    for ($f=2; $f < 10; $f++) 
    { 
        $eee  = $f."단\n";
        for ($i=1; $i < 10 ; $i++)
        {
        $eee .= $f."*".$i."=". $f*$i."\n";
        }
    }
    // fputs($f_gugudan,$eee);
// $hj = guu(10);
// fputs($f_gugudan,staval($hj));

// $n = 10 ;
// for ($f=2; $f < $n ; $f++) { 
//     fputs($f_gugudan, $f."단\n");
//     for ($i=1; $i < $n ; $i++) { 
//         fputs($f_gugudan, $f."*".$i."=". $f*$i."\n");
//     }
// }

// fclose($f_gugudan); 

    function guu($int_1)
{
    $ggg="";
    for ($f=2; $f <$int_1  ; $f++) 
    { 
        $ggg .= $f."단\n";
        for ($i=1; $i < $int_1 ; $i++) 
        { 
            $ggg .= $f."*".$i."=". $f*$i."\n";
        }
    }
    return $ggg;
}
$hh=guu(10);
fputs($f_gugudan,$hh);
fclose($f_gugudan); 
?>
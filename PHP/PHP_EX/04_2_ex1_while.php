<?php
// 1.while 문 
//     $f=2;
//     while($f<10)
//     {
//     $i=1;
//     echo "[".$f."] 단"."\n";
//     while($i < 10)
//     {
//         echo $f." * ".$i." = ".$f*$i."\n" ;
//         $i++;
//     }
//     $f++;
// }
    // $y=2;
    // while($y<10)
    // {
    //     echo $y."단\n";
    // $g=1;
    // while($g<10)
    // {
    //     echo $y. "*".$g. " =".$y*$g ."\n";
    //         $g++;
    // }
    // $y++;
    // }
//2. do while문
    // do{
    //     반복 할 처리
    // }

    // while(조건);
    
    // for ($f=2; $f <=9  ; $f++) { 
    //     echo $f."단\n";
    //     for ($i=1; $i <10 ; $i++) { 
    //         echo $f."*".$i."=". $f*$i."\n";
    //     }
    // }
    $a = 10000 ;
    $b = 5 ;
    $c = 5000 ;
    $d = 4 ;
    
    function addnum($a,$b,$c,$d){
        $result =  ((($a*$b)/$b)+(($c*$d)/$d))/2;
        return $result ;
    }
    
    // function addnum2($a,$b,$c,$d){
    //     $a = 10000 ;
    //     $b = 5 ;
    //     $result = addnum($a,$b)+ ($c*$d)/$d; 
    //     return $result ;
    // }
    
    echo addnum($a,$b,$c,$d);

    // $arr = array(5,10,7,3,1);
    // $n = count($arr);
    
    // for ($i=1; $i < $n ; $i++) 
    // {
    //     $temp = $arr[$i-1];
    //     $arr[$i-1] = $arr[$i];
    //     $arr[$i] = $temp;
    // }
    
?>
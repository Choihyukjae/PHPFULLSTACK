<?php
// function st($g)
// {
//     for ($i=0; $i < $g ; $i++) 
//     { 
//         echo "*";
//     }
//         echo "\n";
// }

// function star($f)
// {
//     for ($i=1; $i <=$f ; $i++) 
//     { 
//         st($i);
//     }
// }
//     star(6);

//void 함수 (리턴값이x)
    // $n = count($arr);
    // for ($i=0; $i < $n; $i++) 
    //     { 
    //         echo $i." > ".$arr[$i]."\n";
    //     }


    $arr = array(5,10,7,3,1);
    $n = count($arr);
    
    for ($i=0; $i < $n ; $i++) 
    {
        for ($f=0; $f < $n ; $f++) 
        {   
            if($arr[$i]<$arr[$f])
            {
                $temp = $arr[$i];
                $arr[$i] = $arr[$f];
                $arr[$f] = $temp;
            }
        }
    }
    print_r($arr);


    //배열 안에 최대 값, 최소 값 을 출력해주는 함수를 구현해주세요.
    //함수명은 "my_max()", "my min()"
    // $arr = array(5,10,7,3,1);
    // $n = count($arr);
    //     for ($i=1; $i < $n ; $i++) 
    //     {
    //             if($arr[$i-1] < $arr[$i])
    //             {
    //                 unset($arr[$i-1]);
    //             }
    //             else
    //             {
    //                 unset($arr[$i]);
    //             }
    //     }
    // $arr = array(5,10,7,3,1);
    // $n = count($arr);

?>
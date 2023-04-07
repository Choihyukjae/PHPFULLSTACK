<?php

$arr_card = array( "A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K");
$arr_shape = array("♠", "♣", "◆", "♥");
$arr_all = array();
    foreach ($arr_card as $val1) {
        foreach( $arr_shape as $val2 )
        {
            array_push($arr_all,"$val1$val2");
        }
    }
    $cnt = count($arr_card)*count($arr_shape) - 1 ;
    shuffle($arr_all);
    // var_dump($arr_all);
    $player = array();
    $dealer = array();
        for ($i=0; $i <2 ; $i++) 
            { 
            $player[] = ($arr_all[$cnt]);
            $cnt--;
            }
        for ($i=0; $i <2 ; $i++) 
            { 
            $dealer[] = ($arr_all[$cnt]);
            $cnt--;
            }   
$user_sum = 0 ;
$dealer_sum = 0;

function sum_score($value){
    $user_sum =0;
    if (strpos( $value , "A") !== false ) 
    {   
        if($user_sum +11 >21)
        {
            $user_sum += 1;
        }
        else
        {
        $user_sum += 11;
        }
        }
    else if (strpos( $value , "J") !== false || strpos( $value , "K") !== false || strpos( $value , "Q") !== false  ) 
    {
        $user_sum += 10;
    }
    else 
    {
        $user_sum += intval( substr($value , 0 , 1) );
    }
        return $user_sum ;
}


        foreach ($player as $value) 
            {
                $user_sum += sum_score($value);
            }
        foreach ($dealer as $value) 
            {
                $dealer_sum += sum_score($value);
            }

            // $user_rand = rand(1,999);
            // $dealer_rand = rand(1,999);
        if($user_sum === 21 )
        {   
            echo "첫 두장 유저카드합 21 유저승리\n";
            if($dealer_sum === 21)
            {
                echo "그러나 딜러도 첫두장 카드합 21 무승부";
            }
        }
        // else if($dealer_sum === 21 )
        // {   
        //     echo "첫 두장 딜러카드합 21 딜러승리";
        //     if($user_sum === 21)
        //     {
        //         echo "그러나 유저도 첫두장 카드합 21 무승부";
        //     }
        // }
        else if ($user_sum>$dealer_sum) 
        {
            echo "유저승리";
        }
        else if ($user_sum<$dealer_sum) 
        {
            echo "딜러승리";
        }
        else if ($user_sum === $dealer_sum) 
        {
            echo "무승부\n 유저 카드한장더받고\n";
            for ($i=0; $i <1 ; $i++) 
            { 
            $player[] = ($arr_all[$cnt]);
            $cnt--;
            }
            foreach ($player as $value) 
            {
                $user_sum += sum_score($value);
            }
            if($dealer_sum >= 17)
            {
                echo "딜러카드가 17보다 크니까 안받음\n";
                if($user_sum> $dealer_sum && $user_sum <= 21)
                {   
                    echo "유저승리";
                }
                else if($user_sum >21 )
                {
                    echo "딜러승리";
                }

            }
            else if ($dealer_sum < 17) 
            {
                echo "딜러카드합 17보다 낮으므로 한장 더받음\n";
                for ($i=0; $i <1 ; $i++) 
                { 
                $dealer[] = ($arr_all[$cnt]);
                $cnt--;
                }
                foreach ($player as $value) 
                {
                    $dealer_sum += sum_score($value);
                }
                if ($user_sum > 21 ) 
                {
                    echo "유저 카드 21초과  유저패배";    
                }
                else if ($dealer_sum > 21 ) 
                {
                    echo "딜러 카드 21초과  딜러 패배";    
                }
                else if ($user_sum > $dealer_sum && $user_sum <= 21) 
                {
                    echo "유저승리";    
                }
                else if ($user_sum < $dealer_sum && $dealer_sum <= 21) 
                {
                    echo "딜러승리";    
                }
                else if ($user_sum === $dealer_sum ) 
                {
                    echo "무승부 ";    
                }
        }
        }
        













    // $arr_card = array( "A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K");
    // $arr_shape = array("♠", "♣", "◆", "♥");
    // $arr_all = array();
    // $cnt = count($arr_card)*count($arr_shape) - 1 ;
    // foreach ($arr_card as $val1) {
    //     foreach( $arr_shape as $val2 )
    //     {
    //         $arr_all[] = array( $val1, $val2);
    //     }
    // }
    // shuffle($arr_all);
    // $player = array();
    // $dealer = array();
    //     for ($i=0; $i <2 ; $i++) 
    //         { 
    //         $player[] = ($arr_all[$cnt]);
    //         $cnt--;
    //         }
    //     for ($i=0; $i <2 ; $i++) 
    //         { 
    //         $dealer[] = ($arr_all[$cnt]);
    //         $cnt--;
    //         }   
    //     $user_sum = 0;
    //     foreach ($player as $value) 
    //     {
    //         // print_r($value);
    //         if ($value[0] === 4 || $value[0] === 5 || $value[0] === 6) 
    //         {
    //             echo " 안녕 "; 
    //         }
    //     }

?>

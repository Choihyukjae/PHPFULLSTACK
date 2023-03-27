<?php
    $me = 2;
    $you = rand(0,2);
    if($me > 2 || $me<0)
    {
        echo"잘못된값을 입력하셨습니다.";
    }
    else{
    if($me == 0) {
        echo "나 = 가위";
    }
    else if ($me == 1){
        echo '나 = 바위';
    }
    else if ($me == 2){
        echo '나 = 보';
    }
    echo "\n";
    if($you == 0) {
        echo "상대방 = 가위";
    }
    else if ($you == 1){
        echo '상대방 = 바위';
    }
    else if ($you == 2){
        echo '상대방 = 보';
    }
    echo "\n";
    if($me-$you==1 || $me-$you==-2)
		{
			echo "내가 이김";
		}
		else if($me-$you==2 || $me-$you==-1)
		{
			echo "상대방이 이김";
		}
		else
		{
			echo "비겼습니다.";
		}
    }
    // 안녕하세요
    
?>


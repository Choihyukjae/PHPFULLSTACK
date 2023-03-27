<!DOCTYPE html>
<html lang="ko">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
    <h1>가위바위보 게임</h1>  
<form method="int">
    <label for="me"></label>
    <input type="number" id=me name="me">
    <input type="submit">
</form>

</body>
</html>
<?php
    $me = (int)$_int['me'];
    $me = 1;
    $you = rand(0,2);
    if($me > 2 || $me<0)
    {
        echo "잘못된값을 입력하셨습니다.";
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
?>
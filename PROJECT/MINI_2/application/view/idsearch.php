<?php

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/user/idsearch" method = "post">
            <label for="em">이메일 : </label>
            <input type="text" name="email" id="em" maxlength="100" placeholder="이메일을 입력하세요." required>
            <button type="submit">찾기</button>
    </form>
    <a href="/shop/main">메인페이지</a>
    <br>
    <br>
    <div>
        <?php if(isset($this->searchId)){ ?>
            <span style="color: red;"><?php echo "당신의 아이디는  : ".$this->searchId ?></span>
        <?php } 
        else if(isset($this->errMsg)) {
            echo $this->errMsg ;
            };?>  
    </div>
</body>
</html>
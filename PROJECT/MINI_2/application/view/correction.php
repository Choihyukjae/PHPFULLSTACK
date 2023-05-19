<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $_SESSION["u_id"] ."  님의 회원수정합니다"; ?>
    <div>
    <?php if(isset($this->errMsg)) {?>
            <span>
                <?php echo $this->errMsg?>
            </span>
        <?php } ?>
        </div>
<form action="/user/correction" method = "post">
        <br>

        <label for="pw">새비밀번호</label>
        <input required type="text" name="pw"  id="pw" >
        <span>
        <?php 
                if(isset($this->arrError["pw"])) {
                echo $this->arrError["pw"];} 
        ?>
        </span>
        <br>

        <label for="pw">새비밀번호 확인</label>
        <input required type="text" name="pwChk"  id="pw" >
        <span>
        <?php 
                if(isset($this->arrError["pwChk"])) {
                echo $this->arrError["pwChk"];} 
        ?>
        </span>
        <br>
        <label for="em">새 이메일 : </label>
        <input type="email" name="email" id="em" required value ="<?php echo $_SESSION["u_email"]?>">
        <input type="hidden" name="u_no" value = "<?php echo $_SESSION["u_no"] ?>">
        <button type="submit">수정하기</button>
        
    </form>
    <?php if(isset($this->msg)){ ?>
            <span style="color: red;"><?php echo $this->msg ?></span> <?php }?>
            <a href="/shop/main">메인페이지로가기</a>
    <script src="/application/view/common.js"></script>
</body>
</html>
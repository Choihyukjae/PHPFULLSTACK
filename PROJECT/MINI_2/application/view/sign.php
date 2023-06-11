<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        회원가입
    </h1>
    <div>
    <?php if(isset($this->errMsg)) {?>
            <span>
                <?php echo $this->errMsg?>
            </span>
        <?php } ?>
        </div>
<form action="/user/sign" method = "post">
        <label for="id">ID</label>
        <input required type="text" name="id"  id="id" >
        <button type ="button" onclick="chkDuplicationId();" >중복체크</button>
        <span id = "errMsgId">
        <?php 
                if(isset($this->arrError["id"])) {
                echo $this->arrError["id"];} 
        ?>
        </span>
        <br>

        <label for="pw">PASSWORD</label>
        <input required type="password" name="pw"  id="pw" >
        <span>
        <?php 
                if(isset($this->arrError["pw"])) {
                echo $this->arrError["pw"];} 
        ?>
        </span>
        <br>

        <label for="pw">PASSWORD check</label>
        <input required type="password" name="pwChk"  id="pw" >
        <span>
        <?php 
                if(isset($this->arrError["pwChk"])) {
                echo $this->arrError["pwChk"];} 
        ?>
        </span>
        <br>
        <label for="em">이메일 : </label>
        <input type="email" name="email" id="em" required>
        <button type="submit">회원가입</button>
    </form>
    <a href="/shop/main">메인페이지</a>
    <script src="/application/view/common.js"></script>
</body>
</html>
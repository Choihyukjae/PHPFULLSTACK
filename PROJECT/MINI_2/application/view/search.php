<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/application/view/bootstrap.css">
</head>
<body>
    <nav class="navbar  navbar-expand-lg navbar navbar-dark bg-dark my_nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="/shop/main">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu  " aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="d-flex search_bx search_bx" style = " position:absolute; right:900px; " method="POST" action="/user/search" >
            <input class="form-control me-2" type="text" placeholder="Search" name ="search_word" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
        <?php
    if(isset($_SESSION[_STR_LOGIN_ID])){
        echo "안녕하세요".$_SESSION[_STR_LOGIN_ID]."님!" ;
        ?><button id = "logout" onclick="redirectLogout();" >Logout</button>
    <button><a href="/user/correction">회원정보 수정</a></button>
    <?php

}
else{
    ?> <form action="/user/login" method = "post">
        <label  style= "color : white;" for="id">ID</label>
        <input type="text" name="id"  id="id" >
        <label style= "color : white;" for="pw">PASSWORD</label>
        <input  type="text" name="pw"  id="pw" >
        <button type="submit">Login</button>
    </form>
    <br>
    <a style ="color:white ;" href="/user/sign">회원가입</a>
    <a style ="color:white ;" href="/user/idsearch">아이디 찾기</a>
    <a style ="color:white ;" href="/user/pwsearch">비밀번호 찾기</a>  <?php
    }
    ?>

</div>

<script>
    function redirectLogout(){
        location.href = "/user/logout" ;
    }
</script>


</div>
</div>
</nav>
<br><br><br><br><br>
<h3 style="color: red;" ><?php echo isset($this->errMsg) ? $this->errMsg : "";  ?></h3>
    <h1 style="text-align: center; line-height:1.5;">Monday cupping class open!<br>eget arcu felis.</h1>
<br><br>
    <div class="d-flex justify-content-center my-container">
    <a class=" my_btn"  href="/user/basket" role="button" aria-controls="offcanvasExample">
            <i class="bi bi-bag icon_1"></i>
        </a>
        
          
          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <div>
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
              </div>
              <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                  Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </div>
          </div>

            <div class="row row-cols-xxl-3 row-cols-lg-3 " style="max-width: 60%;">
        <?php 
                if(!empty($this->result)){
                foreach ($this->result as $recode) { 
            ?>
                <div class="col d-flex justify-content-center pt-3 pb-3">
                    <div class="card" style="width: 30rem; border: none; ">
                    <img src="<?php echo $recode["g_pictur"]?>" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h6 class="card-title"><a href="/product/goods?g_no=<?php echo $recode["g_no"] ?>"><?php echo $recode["g_name"]?></a></h6>
                        <p class="card-text"><?php echo $recode["g_price"]; ?></p>
                        </div>
                    </div>
                </div>
            <?php }}?>
        </div>
</body>
</html>
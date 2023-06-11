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
        <input  type="password" name="pw"  id="pw" >
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
            <div class="col d-flex justify-content-center pt-3 pb-3">
                <div class="card" style="width: 30rem; border: none; ">
                    <img src="<?php echo $this->result[0]["g_pictur"]?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title"><a href="/product/goods?g_no=<?php echo $this->result[0]["g_no"] ?>"><?php echo $this->result[0]["g_name"]?></a></h6>
                        <p class="card-text"><?php echo $this->result[0]["g_price"]?></p>
                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button> -->
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center pt-3 pb-3  ">
                <div class="card" style="width: 30rem;  border: none;  ">
                    <img src="<?php echo $this->result[1]["g_pictur"]?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title"><a href="/product/goods?g_no=<?php echo $this->result[1]["g_no"] ?>"><?php echo $this->result[1]["g_name"]?></a></h6>
                        <p class="card-text"><?php echo $this->result[1]["g_price"]?></p>
                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button> -->
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center pt-3 pb-3 ">
                <div class="card" style="width: 30rem;border: none;   ">
                    <img src="<?php echo $this->result[2]["g_pictur"]?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title"><a href="/product/goods?g_no=<?php echo $this->result[2]["g_no"] ?>"><?php echo $this->result[2]["g_name"]?></a></h6>
                        <p class="card-text"><?php echo $this->result[2]["g_price"]?></p>
                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button> -->
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center pt-3 pb-3 ">
                <div class="card" style="width: 30rem; border: none; ">
                    <img src="<?php echo $this->result[3]["g_pictur"]?>">
                    <div class="card-body">
                        <h6 class="card-title"><a href="/product/goods?g_no=<?php echo $this->result[3]["g_no"] ?>"><?php echo $this->result[3]["g_name"]?></a></h6>
                        <p class="card-text"><?php echo $this->result[3]["g_price"]?></p>
                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button> -->
                    </div>
                </div>
            </div>
            
            <div class="col d-flex justify-content-center pt-3 pb-3 ">
                <div class="card" style="width: 30rem;border: none;  ">
                    <img src="<?php echo $this->result[4]["g_pictur"]?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title"><a href="/product/goods?g_no=<?php echo $this->result[4]["g_no"] ?>"><?php echo $this->result[4]["g_name"]?></a></h6>
                        <p class="card-text"><?php echo $this->result[4]["g_price"]?></p>
                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button> -->
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center pt-3 pb-3 ">
                <div class="card" style="width: 30rem; border: none; ">
                    <img src="<?php echo $this->result[5]["g_pictur"]?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title"><a href="/product/goods?g_no=<?php echo $this->result[5]["g_no"] ?>"><?php echo $this->result[5]["g_name"]?></a></h6>
                        <p class="card-text"><?php echo $this->result[5]["g_price"]?></p>
                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3 style="text-align: center; line-height:1.5;">Coffee Et magnis dis<br>partur montes.</h3>
    <br>
    <p class = "p1" style="opacity: 0.8; text-align: justify;">Sit amet nulla facilisi morbi tempus. Nulla facilisi cras fermentum odio eu. Etiam erat velit scelerisque in dictum non consectetur a erat. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Ut sem nulla pharetra diam. Fames ac turpis egestas maecenas. Bibendum neque egestas congue quisque egestas diam. Laoreet id donec ultrices tincidunt arcu non sodales neque. Eget felis eget nunc lobortis mattis aliquam faucibus purus. Faucibus interdum posuere lorem ipsum dolor sit.</p>
        <!-- <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active my-slide " data-bs-interval="10000">
                <img src="https://cdn.imweb.me/thumbnail/20230511/e234ce4ec044c.png"  alt="...">
            </div>
            <div class="carousel-item active my-slide" data-bs-interval="1000">
                <img src="https://cdn.imweb.me/thumbnail/20230511/4c033d0991f17.png"  alt="...">
            </div>
            <div class="carousel-item active my-slide" data-bs-interval="1000">
                <img src="https://cdn.imweb.me/thumbnail/20230511/0dbc1e94245e8.png"  alt="...">
            </div>
            </div>
        </div> -->
        <br><br>
        <!-- <div class="section_bg_color _section_bg_color" style="background-color:#212121;  position: absolute;left: 0;top: 0;right: 0; bottom: 0;"></div> -->
        <div class = "bottom_box">
        <div doz_type="inside" class="inside bottom_bx"><div doz_type="row" doz_grid="12" class="doz_row"><div doz_type="grid" doz_grid="12" class="col-dz col-dz-12"><div doz_type="widget" id="w20230511540e766803ca6"><div class="_widget_data _ds_animated_except" data-widget-name="여백" data-widget-type="padding" data-widget-parent-is-mobile="N"><div class="widget padding" data-height="30" style="margin-top:px; margin-bottom:px;">
            <div id="padding_w20230511540e766803ca6" style="width:100%; min-height:1px; height:30px; "></div>
        </div>
        </div></div></div></div><div doz_type="row" doz_grid="12" class="doz_row"><div doz_type="grid" doz_grid="6" class="col-dz col-dz-6"><div doz_type="row" doz_grid="6" class="doz_row"><div doz_type="grid" doz_grid="6" class="col-dz col-dz-6"><div doz_type="widget" id="w202305115e77c8c43cfb1"><div class="_widget_data " data-widget-name="텍스트" data-widget-type="text" data-widget-anim="none" data-widget-anim-duration="0.7" data-widget-anim-delay="0" data-widget-parent-is-mobile="N">
            <div doz_type="text" class="widget _text_wrap widget_text_wrap fr-view  default_padding " id="text_w202305115e77c8c43cfb1">
                
                        <div class="text-table "><div><h6><span style="color: rgb(238, 238, 238); opacity:0.8;">MONDAY COFFEE</span></h6></div></div>		
            </div>
            
        </div></div></div></div><div doz_type="row" doz_grid="6" class="doz_row"><div doz_type="grid" doz_grid="6" class="col-dz col-dz-6"><div doz_type="widget" id="w2023051171b0b2bc7690b"><div class="_widget_data " data-widget-name="텍스트" data-widget-type="text" data-widget-anim="none" data-widget-anim-duration="0.7" data-widget-anim-delay="0" data-widget-parent-is-mobile="N">
            <div doz_type="text" class="widget _text_wrap widget_text_wrap fr-view  default_padding " id="text_w2023051171b0b2bc7690b">
                
                        <div class="text-table "><div><p style="font-size:12px; opacity:0.6;"><span style="color: rgb(238, 238, 238);">&nbsp;CEO: Choi Hyuk Jae ㅣ Business License: 000-00-00000 ㅣ Communication Sales Business Report: 0000-Seoul-0000</span><br><span style="color: rgb(238, 238, 238);">Address: Seoul, Korea CS: +82 (0)0-000-0000(AM10 - PM5, Lunch PM1 - PM2, Weekend and Holiday Off)&nbsp;</span><br><br><a href="?mode=policy"><span style="color: rgb(238, 238, 238);">Terms of Use</span></a><span style="color: rgb(238, 238, 238);">&nbsp;<span style="color: rgb(238, 238, 238);">&nbsp;ㅣ&nbsp;</span></span><a href="?mode=privacy"><span style="color: rgb(238, 238, 238);"><span style="color: rgb(238, 238, 238);">Privacy</span></span></a></p><p style="font-size:12px; opacity:0.6;"><br><a href="" style="color: rgb(238, 238, 238);" target="_blank">최혁재</a></p></div></div>		
            </div>
            
        </div></div></div></div><div doz_type="row" doz_grid="6" class="doz_row"><div doz_type="grid" doz_grid="6" class="col-dz col-dz-6"><div doz_type="widget" id="w2023051109edcb2b4eef7"><div class="_widget_data _ds_animated_except" data-widget-name="여백" data-widget-type="padding" data-widget-parent-is-mobile="N"><div class="widget padding" data-height="47" style="margin-top:px; margin-bottom:px;">
            <div id="padding_w2023051109edcb2b4eef7" style="width:100%; min-height:1px; height:47px; "></div>
        </div>
        </div></div></div></div></div><div doz_type="grid" doz_grid="6" class="col-dz col-dz-6"><div doz_type="row" doz_grid="6" class="doz_row"><div doz_type="grid" doz_grid="6" class="col-dz col-dz-6"><div doz_type="widget" id="w20230511d38b785806d50"><div class="_widget_data " data-widget-name="버튼" data-widget-type="button" data-widget-anim="none" data-widget-anim-duration="0.7" data-widget-anim-delay="0" data-widget-parent-is-mobile="N"><div class="widget button txt_r">
            <div class="button_wrap ">
                <div class="inline-blocked "><a class=" btn btn_5bcb97f57bcf3   btn-default _fade_link  " href="http://instagram.com" style="margin: 0 -1px -1px 0; border-radius:px">Instagram</a></div><div class="inline-blocked "><a class=" btn btn_5O63167t8T   btn-default _fade_link  " href="http://facebook.com" style="margin: 0 -1px -1px 0; border-radius:px">Facebook</a></div><div class="inline-blocked "><a class=" btn btn_45T5tpKz6C   btn-default _fade_link  " href="http://twitter.com" style="margin: 0 -1px -1px 0; border-radius:px">Twitter</a></div>	</div>
        </div>
        
        </div></div></div></div><div doz_type="row" doz_grid="6" class="doz_row"><div doz_type="grid" doz_grid="6" class="col-dz col-dz-6"><div doz_type="widget" id="w20230511a43af47984732"><div class="_widget_data _ds_animated_except" data-widget-name="여백" data-widget-type="padding" data-widget-parent-is-mobile="N"><div class="widget padding" data-height="43" style="margin-top:px; margin-bottom:px;">
            <div id="padding_w20230511a43af47984732" style="width:100%; min-height:1px; height:43px; "></div>
        </div>
        </div></div></div></div></div></div><div doz_type="row" doz_grid="12" class="doz_row"><div doz_type="grid" doz_grid="12" class="col-dz col-dz-12"><div doz_type="widget" id="w2023051182c733230f838"><div class="_widget_data _ds_animated_except" data-widget-name="여백" data-widget-type="padding" data-widget-parent-is-mobile="N"><div class="widget padding" data-height="-4" style="margin-top:px; margin-bottom:px;">
            <div id="padding_w2023051182c733230f838" style="width:100%; min-height:1px; height:-4px; "></div>
        </div>
        </div></div></div></div></div>
    </div>
</body>
</html>

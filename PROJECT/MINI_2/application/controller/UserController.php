<?php

namespace application\controller;

class UserController extends Controller {
    public function mainGet(){
        return "main"._EXTENSION_PHP;
    }

    public function loginPost(){
        $result = $this->model->getUser($_POST);
        $this->model->close(); //db 파기

        //유저 유무체크
        if(count($result) === 0 ){
            $this->model = $this->getModel('Shop');
            $result = $this->model->goodsList();
            $this->model->close(); //db 파기
            $this-> addDynamicProperty('result', $result);
            $errMsg = "입력하신 회원 정보가 없습니다.";
            $this->addDynamicProperty("errMsg", $errMsg);
            //로그인 페이지 리턴
            return "main"._EXTENSION_PHP;
        }
        // session에 user ID 저장
        $_SESSION[_STR_LOGIN_ID] = $_POST["id"];
        $_SESSION["u_no"] = $result[0]["u_no"];
        $_SESSION["u_email"] = $result[0]["u_email"];
        
        //리스트 페이지 리턴
        return _BASE_REDIRECT."/shop/main";
    }

    //로그아웃 메소드
    public function logoutGet(){
        session_unset();
        session_destroy();
        return _BASE_REDIRECT."/shop/main";
    }

    public function signGet(){
        return "sign"._EXTENSION_PHP;
    }

    // public function signPost(){

    //     $result = $this->model->signUser($_POST);
    //     //리스트 페이지 리턴
    //     return _BASE_REDIRECT."/shop/main";
    // }
    
    public function signPost(){
        $arrPost = $_POST;
        $arrChkErr = [];
        //유효성체크
        //id 글자수 체크
        if(mb_strlen($arrPost["id"]) === 0 ||mb_strlen($arrPost["id"]) > 12){
            $arrChkErr["id"] = "ID는 12글자 이하로 입력해 주세요.";
        }
        //id 영문숫자 체크
        //pw 글자수체크
        if(mb_strlen($arrPost["pw"]) < 8 || mb_strlen($arrPost["pw"]) > 20){
            $arrChkErr["pw"] = "pw는 8~20글자로 입력해 주세요.";
        }
        // pw 영문숫자 특수문자 체크
        // 비밀번호 비밀번호 체크확인
        if($arrPost["pw"] !== $arrPost["pwChk"]){
            $arrChkErr["pwChk"] = "비밀번호와 비밀번호확인이 일치하지 않습니다";
        }
        $patten= "/[^a-zA-z0-9]/";
        if(preg_match($patten,$arrPost["pw"]) ===0 ){
            $arrChkErr["pw"] = "특수문자 써주세요";
        }
        //유효성체크 에러일 경우
        if(!empty($arrChkErr)){
            // 에러메세지 셋팅
            $this-> addDynamicProperty('arrError', $arrChkErr);
            return "sign"._EXTENSION_PHP;
        }


        $result = $this->model->getUser($arrPost, false );

        if(count($result) !== 0 ){
            $errMsg = "입력하신 ID가 사용중입니다.";
            $this->addDynamicProperty("errMsg", $errMsg);
            //회원가입 페이지 리턴
            return "sign"._EXTENSION_PHP;
        }

        // transacton start
        $this->model->begintransaction();

        // 인서트 실행
        if(!$this->model->signUser($arrPost)) {
            $this->model->rollback();
            echo "User Regist Error";
            exit();

        }
        $this->model->commit();
        // transaction end 
        //메인 페이지 리턴
        return _BASE_REDIRECT."/shop/main";
        
        
    }

    public function idsearchGet(){
        return "idsearch"._EXTENSION_PHP;
    }

    public function idsearchPost(){
        $result = $this->model->idSearch($_POST);
        if(!empty($result)){
            $this->addDynamicProperty('searchId', $result["u_id"]);
            return "idsearch"._EXTENSION_PHP;
        }
        else{
            $errMsg = "이메일을 다시입력해주세요";
            $this->addDynamicProperty('errMsg', $errMsg);
            return "idsearch"._EXTENSION_PHP;
        }
    }

    public function pwsearchGet(){
        return "pwsearch"._EXTENSION_PHP;
    }

    public function pwsearchPost(){
        
        $result = $this->model->pwSearch($_POST);
        if(!empty($result)){
            $this->addDynamicProperty('searchPw', $result["u_pw"]);
            return "pwsearch"._EXTENSION_PHP;
        }
        else{
            $errMsg = "아이디 또는 이메일을 다시입력해주세요";
            $this->addDynamicProperty('errMsg', $errMsg);
            return "pwsearch"._EXTENSION_PHP;
        }
        
    }
    public function correctionGet(){
        if(isset($_SESSION["u_id"])){
            return "correction"._EXTENSION_PHP;
        }
        else{
            return "main"._EXTENSION_PHP;
        }
        
    }

    public function correctionPost(){
        $arrPost = $_POST;
        $arrChkErr = [];
        //유효성체크
        //id 글자수 체크

        //id 영문숫자 체크
        //pw 글자수체크
        if(mb_strlen($arrPost["pw"]) < 8 || mb_strlen($arrPost["pw"]) > 20){
            $arrChkErr["pw"] = "pw는 8~20글자로 입력해 주세요.";
        }
        // pw 영문숫자 특수문자 체크
        $patten= "/[^a-zA-z0-9]/";
        if(preg_match($patten,$arrPost["pw"]) ===0 ){
            $arrChkErr["pw"] = "특수문자 써주세요";
        }
        // 비밀번호 비밀번호 체크확인
        if($arrPost["pw"] !== $arrPost["pwChk"]){
            $arrChkErr["pwChk"] = "비밀번호와 비밀번호확인이 일치하지 않습니다";
        }
        
        //유효성체크 에러일 경우
        if(!empty($arrChkErr)){
            // 에러메세지 셋팅
            $this-> addDynamicProperty('arrError', $arrChkErr);
            return "correction"._EXTENSION_PHP;
        }


        // $result = $this->model->getUser($arrPost, false );

        // if(count($result) !== 0 ){
        //     $errMsg = "입력하신 ID가 사용중입니다.";
        //     $this->addDynamicProperty("errMsg", $errMsg);
        //     //회원가입 페이지 리턴
        //     return "correction"._EXTENSION_PHP;
        // }

        // transacton start
        $this->model->begintransaction();

        // 인서트 실행
        if(!$this->model->updateUser($arrPost)) {
            $this->model->rollback();
            echo "User Regist Error";
            exit();

        }
        $this->model->commit();
        // $_SESSION[_STR_LOGIN_ID] = $arrPost["id"];
        // transaction end 
        //메인 페이지 리턴
        $msg = "회원정보 수정이 완료되었습니다!";
        $this->addDynamicProperty("msg", $msg);
        return "correction"._EXTENSION_PHP;
    }

    public function searchPost(){
        
        $result = $this->model->search($_POST);
        if(!empty($result)){
            $this->addDynamicProperty('result', $result);
            return "search"._EXTENSION_PHP;
        }
        else{
            $errMsg = "해당 상품이 없습니다.";
            $this->addDynamicProperty('errMsg', $errMsg);
            return "search"._EXTENSION_PHP;
        }
    }
    public function basketGet(){
        if(isset($_SESSION["u_id"])){
            
            $result = $this->model->basKet($_SESSION);
            $this->addDynamicProperty('result', $result);
            return "basket"._EXTENSION_PHP;
        }
        else if (!isset($_SESSION["u_id"])){
            ?>
        
        <script>
            alert("로그인해 주셔야합니다");
        </script>
        <?php  
        $this->model = $this->getModel('Shop');
        $result = $this->model->goodsList();
        $this->model->close(); //db 파기
        $this-> addDynamicProperty('result', $result);
            return "main"._EXTENSION_PHP;
        }
        
    }

    public function basketPost()
    {
        if(isset($_SESSION["u_id"]))
        {
            $result1 = $this->model->checkbasket($_POST);
            // var_dump($result1);
                if($result1[0]['cnt'] == 0 )
                {
                    $result = $this->model->basketUser($_POST);
                    ?>
        
                    <script>
                        alert(" 찜 완료!!");
                    </script>
                    <?php  
                    $this->addDynamicProperty('errMsg1', $result);
                    $this->model = $this->getModel('Shop');
                    $result = $this->model->goodsList();
                    $this->model->close(); //db 파기
                    $this-> addDynamicProperty('result', $result);
                        return "main"._EXTENSION_PHP;
                }
                else if ($result1[0]['cnt'] == 1)
                {
                    ?>
        
                    <script>
                        alert("이미 등록된 상품입니다");
                    </script>
                    <?php  
                    $this->model = $this->getModel('Shop');
                    $result = $this->model->goodsList();
                    $this->model->close(); //db 파기
                    $this->addDynamicProperty('result', $result);
                        return "main"._EXTENSION_PHP;
                }
        }
        else{
            ?>
        
        <script>
            alert("로그인해 주셔야합니다");
        </script>
        <?php  
        $this->model = $this->getModel('Shop');
        $result = $this->model->goodsList();
        $this->model->close(); //db 파기
        $this-> addDynamicProperty('result', $result);
            return "main"._EXTENSION_PHP;
        }

    }

    public function deletePost(){
                $result = $this->model->delete($_POST);
                $errMsg1 = "장바구니에서 삭제되었습니다!";
                $this->addDynamicProperty('errMsg1', $result);
                return _BASE_REDIRECT."/shop/main";
    }
    
    
}


?>
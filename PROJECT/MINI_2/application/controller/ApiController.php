<?php

namespace application\controller;

class ApiController extends Controller {
    public function userGet(){
        $arrGet = $_GET;
        $arrData = ["flg" => "0"];
        //model 호출
        $this->model = $this->getModel("User");
        
        $result = $this->model->getUser($arrGet, false );
        
        //유저 유무 체크
        if(count($result) !== 0 ){
            $arrData["flg"] = "1";
            $arrData["msg"] = " 이미사용중인 아이디입니다.";
        }
        
        // 배열을 JSON 으로 변환
        $json = json_encode($arrData);
        header('Content-type: application/json');
        echo $json;
        exit();
    }

}

?>
<?php

namespace application\controller;

class ProductController extends Controller {
    public function goodsGet(){
        
        $result = $this->model->gdList($_GET);
        $this->addDynamicProperty("result", $result);
        return "goods"._EXTENSION_PHP;
    }

}

?>
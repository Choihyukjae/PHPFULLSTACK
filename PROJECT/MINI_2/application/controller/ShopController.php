<?php

namespace application\controller;

class ShopController extends Controller {
    public function mainGet() {
        $result = $this->model->goodsList();
        $this-> addDynamicProperty('result', $result);
        return "main"._EXTENSION_PHP;
    }









    }


?>
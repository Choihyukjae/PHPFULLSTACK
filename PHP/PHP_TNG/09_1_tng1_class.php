<?php

class Car
{   
    
    //$car_name : 차이름을 저장하는 멤버변수
    public $car_name;
    //$car_color : 차 색깔을 저장하는 멤버 변수
    public $car_color;
    //method 명 : car_make
    //parameter : string $param_name
    //            string $param_color
    // 기능 : 멤버 변수에 값을 셋팅
    public function car_make($param_name,$param_color)
    {
        $this->car_name = $param_name;
        $this->car_color = $param_color;
    }
    //method 명 : car_out
    //parameter : 없음
    //기능 : 자동차 이름과 색깔을 출력 
        //형식 : $car_name."색".$car_color
    public function car_out()
    {
        return $this->car_name ."  ". $this->car_color ."색";
    }
}
$obj_Car = new Car;
$obj_Car->car_make("아반떼","검정");

// echo $obj_Car->car_out();


//생성자(constructor)
class Food
{
    private $food_name;

    //생성자
    public function __construct($param_food_name)
    {
        $this->food_name = $param_food_name;
    }
    public function print_food_name()
    {
        echo $this->food_name;
    }
}
$obj_Food = new Food("탕수육");
$obj_Food->print_food_name();
?>
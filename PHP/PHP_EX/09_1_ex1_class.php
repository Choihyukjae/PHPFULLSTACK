<?php

// CLASS : 동종의 객체들이 모여있는 집합

class Student
{   
    // 클래스 멤버 변수
    public $std_name; // 어디서든 사용될 수 있음
    private $std_id; // Student Class 내에서만 접근가능
    protected $std_age; //상속 Class 내에서만 접근가능
     // 접근제어 지시자 : public, private, protected

    //Class 안에 있는 function 을 method 라고 부릅니다.
    public function print_student( $param_std_name, $param_std_age)
    {
        $result_name = "이름 : ".$param_std_name;
        $result_age = "나이 : ".$param_std_age."세";
        echo $result_name;
        echo "\n";
        echo $result_age;
    }
    //privaate 객체를 사용할 수 있는 방법
    public function set_std_id($param_id)
    {   
        // this 포인터 : class 자기 자신을 가르키고 있음
        $this->std_id = $param_id;
    }
    public function get_std_id()
    {
        return $this->std_id;
    }


}
//class 를 선언
$obj_Student = new Student;

// class 의 method 를 호출 \
// $obj_Student->print_student("홍길동",27);

// class의 멤버 변수 사용방법
// echo $obj_Student->std_name;
// $obj_Student->std_name = "갑돌이";
// echo $obj_Student->std_name;

// 지시자가 private이기 떄문에 접근 권한이 없다.
// ex :::: $obj_Student->$std_id = "갑돌이id";

//getter. setter로 private 에 접근
$obj_Student->set_std_id("갑순이id");
echo $obj_Student->get_std_id();



?>
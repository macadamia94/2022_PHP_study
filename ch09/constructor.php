<?php
    class Fruit {
        private $name;
        private $color;
        private $price;

        // __construct() 생성자함수 : 한 개만 만들 수 있음, 생성 후에는 변경불가
        // private 멤버필드 값 넣는 방법 : 생성자함수, setter메소드
        // private 멤버필드 값 빼내는 방법 : getter메소드

        // 오버로딩 : (java에만 있음)파라미터만 다르면 같은 이름의 함수 혹은 메소드를 만들 수 있는 기법
        // 다른 언어에서는 보통 같은 이름의 함수를 만들면 덮어쓰기가 된다

        function __construct($name=null, $price=null, $color=null) { 
            $this->name = $name;
            $this->price = $price;
            $this->color = $color;
        }

        public function print_fruit() {
            print "Name : {$this->name}<br>";
            print "Price : {$this->price}<br>";
            print "Color : {$this->color}<br>";
        }
    }

    $apple = new Fruit("Apple", 1000, "red");   // 값이 없을 경우 빈칸("")이라도 넣어야함
    $banana = new Fruit(null, 500);
    $banana2 = new Fruit();

    $apple->print_fruit();
    $banana->print_fruit();
    $banana2->print_fruit();
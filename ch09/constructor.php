<?php
    class Fruit {
        private $name;
        private $color;
        private $price;

        // __construct() 생성자함수 : 생성 후에는 변경불가
        // private 멤버필드 값 넣는 방법 : 생성자함수, setter메소드
        // private 멤버필드 값 빼내는 방법 : getter메소드

        function __construct($name, $price, $color) { 
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
    $banana = new Fruit("Banana", 500, "yellow");

    $apple->print_fruit();
    $banana->print_fruit();
<?php
class Fruit {
    private $name;
    private $color;
    private $price;

    public function print_fruit() {
        print "Name : {$this->name}<br>";
        print "Color : {$this->color}<br>";
        print "Price : {$this->price}<br>";
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }
}

$apple1 = (new Fruit)->setName("사과"); // 빨간줄 떠도 문제 없음
$apple1->print_fruit();

// 빌드패턴
$apple2 = (new Fruit)
            ->setColor("파란")
            ->setPrice(1000);

$apple2->print_fruit();

// 메소드호출
$banana1 = new Fruit;
$banana1->setColor("노란");
$banana1->setPrice(2500);
$banana1->print_fruit();
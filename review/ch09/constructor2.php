<?php
    class Fruit {
        private $name;
        private $price;
        private $color;

        function printFruit() {
            print "Name : {$this->name}<br>";
            print "Price : {$this->price}<br>";
            print "Color : {$this->color}<br>";
        }

        function setname($name) {
            $this->name = $name;
            return $this;
        }

        function setPrice($price) {
            $this->price = $price;
            return $this;
        }

        function setColor($color) {
            $this->color = $color;
            return $this;
        }
    }

    $apple = (new Fruit)->setColor("red");
    $apple->printFruit();

    $banana = (new Fruit)->setName("바나나")
                        ->setColor("노랑");
    $banana->printFruit();
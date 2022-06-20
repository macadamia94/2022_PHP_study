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

        function __construct($name, $price, $color) {
            $this->name = $name;
            $this->price = $price;
            $this->color = $color;
        }
    }

    $apple = new Fruit("Apple", 1000, "red");
    $apple->printFruit();

    $banana = new Fruit("Banana", 500, "yellow");
    $banana->printFruit();
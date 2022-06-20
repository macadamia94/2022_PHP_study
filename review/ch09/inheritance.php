<?php 
    class People {
        protected $name;
        protected $age;

        function printPeople() {
            print "Name : {$this->name}<br>";
            print "Age : {$this->age}<br>";
        }
    }

    class Student extends People {
        private $studentId;
        private $studentName;

        function __construct($name, $age, $studentId) {
            $this->name = $name;
            $this->age = $age;
            $this->studentId = $studentId;
        }

        function printStudent() {
            print "-Student-<br>";
            // $this->printPeople();
            parent ::printPeople();
            print "Id : {$this->studentId}<br>";
        }

        function printPeople() {
            print "Student에 있는 print People<br>";
        }
    }

    $stu1 = new Student("Alice", 20, 1234);
    $stu1->printPeople();
    $stu1->printstudent();
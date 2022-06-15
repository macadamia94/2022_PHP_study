<?php
// 원래는 php파일 하나에 class하나가 원칙 (관리하기도 좋음)
    class People {
        protected $name;
        protected $age;

        function printPeople() {
            print "Name : {$this->name}<br>";
            print "Age : {$this->age}<br>";
        }
    }

    // extends 상속 키워드
    class Student extends People {
        private $studentId;

        function __construct($name, $age, $studentId) {
            print "나는 Student요. <br>";
            $this->name = $name;
            $this->age = $age;
            $this->studentId = $studentId;
        }

        function printStudent() {
            print "- Student - <br>";
            $this->printPeople();
            // parent::printPeople(); 
            // 오버라이딩이 되어있면 parent랑 this의 결과값이 달라짐
            // this : 가장 가까이 있는 곳부터 값을 찾음
            // parent : 부모에서 찾음
            print "Id : {$this->studentId}<br>";
        }

        function printPeople() {
            print "Student에 있는 print People<br>";
        }
    }

    $stu1 = new Student("홍길동", 21, 1010);
    $stu1->printPeople();
    print "----------<br>";
    $stu1->printStudent();
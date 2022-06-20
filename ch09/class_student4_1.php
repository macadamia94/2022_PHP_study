<?php
    class Student {
        private $studentId;

        // function __construct(){} 가 자동으로 들어가기 때문에 line.21,24에 ()있어도 없어도 OK

        public function printStudent(){
            print "ID : {$this->studentId}<br>";
        }

        public function getStudentId() {
            return $this->studentId;    // this : 호출한 나자신의 주소값
        }

        public function setStudentId($studentId) {
            $this->studentId = $studentId;
            return $this;   // return을 하게되면 line.20처럼 적을 수 있음
        }
    }

    $obj = new Student(); // ()있어도 없어도 OK
    print "1번째 : " . $obj->setStudentId(1122)->getStudentId()."<br>";

    $obj2 = new Student;
    print $obj2->setStudentId(8888)->getStudentId() . "<br>";
    print "2번째 : " . $obj->getStudentId()."<br>";
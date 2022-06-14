<?php
    // Access Modifier
    // 접근제어 지시자
    // 접근지시어
    // 접근제어자
    // java : private default protected public
    // php : private protected public
    /*
        public : 완전오픈
        private : class 안에서만 사용가능
    */

    class Student {  // 설계도
        // 직접 만드는 class(설계도) 내용(기능?)은 내맘대로 작성가능
        public $studentId;
        public $studentName;

        // ↓ return 키워드가 없으니 void함수
        public function printStudent($id, $name){
            print "ID : {$id}<br>";
            print "Name : {$name}<br>";
        }

        /*
        public function printStudent(){
            print "ID : {$this->studentId}<br>";
            print "Name : {$this->studentName}<br>";
        }
        */

    }

    $obj = new Student; // 설계도대로 만든 것 ($속성명 = new class명)
    $obj->studentId = 20171234;
    $obj->studentName = "Alice";

    $obj->printStudent($obj->studentId, $obj->studentName);
    // $obj->printStudent();
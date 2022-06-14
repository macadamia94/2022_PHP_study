<?php
    class Student {
        private $studentId;
        private $studentName;

        // getters (get으로 시작, parameter없음, return있음)
        public function getStudentId() {
            return $this->studentId;    // this : 호출한 나자신의 주소값
        }

        public function getStudentName() {
            return $this->studentName;
        }

        // setters (set으로 시작, parameter있음, return없음)
        public function setStudentId($studentId) {
            $this->studentId = $studentId;
        }

        public function setStudentName($studentName) {
            $this->studentName = $studentName;
        }

        public function printStudent(){
            print "ID : {$this->studentId}<br>";
            print "Name : {$this->studentName}<br>";
        }
    }

    $obj = new Student;
    $obj->setStudentId(1122);
    $obj->setStudentName('Alice');
    $obj->printStudent();
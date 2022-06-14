<?php
    class Student {
        private $studentId;
        private $studentName;

        public function printStudent() {
            print "ID : {$this->studentId}<br>";
            print "Name : {$this->studentName}<br>";
        }

        public function getstudentId() {
            return $this->studentId;
        }
        public function getstudentName() {
            return $this->studentName;
        }

        public function setstudentId($studentId) {
            $this->studentId = $studentId;
            return $this;
        }
        public function setstudentName($studentName) {
            $this->studentName = $studentName;
            return $this;
        }
    }

    $obj = new Student;
    $obj->setstudentId(20171234)->setstudentName("Alice");
    $obj->printStudent();

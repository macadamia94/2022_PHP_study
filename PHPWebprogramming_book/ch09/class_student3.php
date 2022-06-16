<?PHP
  class  Student 
  {
    private $studentId;
    private $studentName;

    public function printStudent()
    {
      print "ID : ". $this->studentId . "<br>";  
      print "Name : ". $this->studentName . "<br>";
    }
  }

  $object = new Student;
  $object->studentId = 20171234;
  $object->studentName = "Alice";

  $object->printStudent();
?>

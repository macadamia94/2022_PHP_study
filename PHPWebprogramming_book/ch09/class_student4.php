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
    public function setStudentId($id)
    {
      $this->studentId = $id; 
    }
    public function setStudentName($name)
    {
      $this->studentName = $name;
    }
  }
  $object = new Student;
  $object->setStudentId(20171234);
  $object->setStudentName("Alice");

  $object->printStudent();
?>

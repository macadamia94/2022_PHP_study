<?PHP
  class  Student 
  {
    public $studentId;
    public $studentName;

    public function printStudent($id, $name)
    {
      print "ID : ". $id . "<br>";  
      print "Name : ". $name . "<br>";
    }
  }

  $object = new Student;
  $object->studentId = 20171234;
  $object->studentName = Alice";

  $object->printStudent($object->studentId, $object->studentName);
?>

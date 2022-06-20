<?PHP
  class People
  {
    protected $name;
    protected $age;
    
    function printPeople ()
    {
      print "Name : ". $this ->name . "<br> ";
      print "Age : ". $this ->age . "<br> ";
    }
  }

  class Student extends People
  {
    private $studentId;

    function __construct($name, $age, $id)
    {
      $this->name = $name;
      $this->age  = $age;
      $this->studentId   = $id;
    }
    function printStudent()
    {
      print "- Student - <br>";
      $this -> printPeople ();
      print "Id : ". $this -> studentId . "<br> ";
    }
  }

  class Professor extends People
  {
    private $office_No;

    function __construct($name, $age, $no)
    {
      $this->name = $name;
      $this->age  = $age;
      $this->office_No   = $no;
    }
    function printProfessor()
    {
      print "- Professor - <br>";
      $this -> printPeople ();
      print "Office_No : ". $this -> office_No . "<br> ";
    }
  }

  class Staff extends People
  {
    private $title;

    function __construct($name, $age, $title)
    {
      $this->name = $name;
      $this->age  = $age;
      $this->title   = $title;
    }
    function printStaff()
    {
      print "- Staff - <br>";
      $this -> printPeople ();
      print "Title : ". $this -> title . "<br> ";
    }
  }

  $object1 = new Student("Lee", "21", "20170123");
  $object2 = new Professor("Kim", "42", "107");
  $object3 = new Staff("Park", "37", "Chief");

  $object1->printStudent();
  print "<br>";
  $object2->printProfessor();
  print "<br>";
  $object3->printStaff(); 
  print "<br>";
?>

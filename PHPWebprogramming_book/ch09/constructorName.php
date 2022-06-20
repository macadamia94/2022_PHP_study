<?PHP
  class Fruit
  {
    private $fruit_name;
    private $price;
    private $color;

    function Fruit($name, $price, $color)
    {
      $this->fruit_name = $name;  
      $this->price = $price;
      $this->color = $color;
    }
    function print_fruit()
    {
      print "Fruit name  : $this->fruit_name <br>";
      print "Fruit price : $this->price <br>";
      print "Fruit color : $this->color <br>";
    }
  }
   
  $Apple = new Fruit('Apple', 1000, 'red');
  $Orange = new Fruit('Orange', 2000, 'orange');
  $Banana = new Fruit('Banana', 500, 'yellow');
  $Pear = new Fruit('Pear', 3000, 'gray');

  $Apple->print_fruit();
  $Orange->print_fruit();
  $Banana->print_fruit();
  $Pear->print_fruit();
?>

<?PHP
  $fruit = array(
              "Apple"   =>  "Red",
              "Pear"    =>  array("Brown", "Yellow"),
              "Peach"  =>  "Pink",
              "Tomato" =>  array("Red", "Green"),
              "Banana" =>  "Yellow"
              );
  
  print "**** BEFORE ****<br>";
  print_r($fruit);
  print "<br><br>";
  print "**** AFTER ****<br>";
  unset( $fruit[Pear], $fruit[Banana] );
  print_r( $fruit );
?>

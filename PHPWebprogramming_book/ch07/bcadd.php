<?PHP
  $num1 = 
  "77777777777777777777777777777777777.5555555555555555555555555";
   $num2 = 
  "22222222222222222222222222222222222.3333333333333333333333333";
  
  $num3 = "12345678901234567890123456789";
  $num4 = "90000000000000000000000000000";

  $value = bcadd ($num1, $num2, 20);
  print "bcadd: " . $value . "<br>";

  $value = bcsub ($num1, $num2, 20);
  print "bcsub: " . $value . "<br>";

  $value = bcmul ($num2, "2", 20);
  print "bcsub: " . $value . "<br>";

  $value = bcdiv ($num2, "2", 10);
  print "bcdiv: " . $value . "<br>";

  $value = bcmod ($num3, 2);
  print "bcmod: " . $value . "<br>";

  $value = bcsqrt ($num4, 20);
  print "bcsqrt: " . $value . "<br>";
?>

<?PHP
  function A()
  {
    global $n;
    $n = "A";
    $m = "A";
  
     print "$n, $m<br>";
  }
  
  $n = "M";
  $m = "M";
  
  print "$n, $m<br>";
  A();
  print "$n, $m<br>";
?>

<?PHP
  function swap1($a, $b)
  {
    $temp = $a;
    $a = $b;
    $b = $temp;
  }  
 
  $i = 3;
  $j = 4;

  print "$i, $j <br>";
  swap1($i, $j);
  print "$i, $j";
?>

<?PHP
  function swap3($a, $b)
  {
    $temp = $a;
    $a = $b;
    $b = $temp;
  }  
 
  $i = 3;
  $j = 4;

  print "$i, $j <br>";
  swap3(&$i, &$j);
  print "$i, $j";
?>

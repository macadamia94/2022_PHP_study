<?PHP
  function fibo($num) 
  {
    if ($num ==0 || $num == 1)  return ($num);
    return (fibo ($num - 1) + fibo ($num -2));
  }

  for ($i = 0; $i <= 4 ; $i++) 
  print "fibo($i) = ".fibo($i)."<br>";
?>

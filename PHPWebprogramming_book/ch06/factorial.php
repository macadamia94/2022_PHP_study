<?PHP
  function factorial($n)
  {
    if($n == 1)  return(1);
    return( $n * factorial($n-1) );
  }
      
  for($i = 1; $i <=10; $i++)  
  print "factorial($i) = ".factorial($i)."<br>";
?>

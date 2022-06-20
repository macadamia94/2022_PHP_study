<?PHP
  function inc()
  {
    static $i = 1;
    print $i."<br>";
    $i = $i + 1;
  }  
 
  for ($j=1; $j<=10; $j++)
    inc();
?>

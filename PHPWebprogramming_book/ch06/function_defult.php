<?PHP
  function my_log($arg, $base=2)
  {
    $result = log($arg)/log($base);
    return $result;
  }
  
  print "log2(10) = ".my_log(10,2)."<br>";
  print "log10(100) = ".my_log(100,10)."<br>";
  print "log2(8) = ".my_log(8,2)."<br>";
  print "<br>";
  print "log2(8) = ".my_log(8)."<br>";

?>

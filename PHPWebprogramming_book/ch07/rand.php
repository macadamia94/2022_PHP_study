<?PHP
  mt_srand((double)microtime() * 1000000);
  $random = mt_rand(0, 100000);
  
  print "random : " . $random . "<br>";
?>

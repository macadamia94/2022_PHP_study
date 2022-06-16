<?PHP
  $seoul = getdate();
  
  print "현재시간 : " . 
    $seoul[year]. "년 ".$seoul[mon]."월 ".$seoul[mday]."일 " .
    $seoul[hours]."시 ".$seoul[minutes]."분 ".$seoul[seconds]."초<br>";
 
?>

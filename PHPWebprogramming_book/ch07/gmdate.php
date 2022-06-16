<?PHP
  $year = gmdate("Y");
  $mon = gmdate("m");
  $day = gmdate("d");
  $hour = gmdate("G");
  $min = gmdate("i");
  $sec = gmdate("s");

  $seoul = getdate(mktime($hour+9,$min, $sec, $mon, $day, $year));
  print "Seoul : " .
   $seoul[year]."-".$seoul[mon]."-".$seoul[mday]."@".$seoul[hours].":".
   $seoul[minutes].":".$seoul[seconds]."(24h:min:sec)<br>";

  $ny = getdate(mktime($hour-5,$min, $sec, $mon, $day, $year));
  print "New York : " . 
   $ny[year]."-".$ny[mon]."-".$ny[mday]."@".$ny[hours].":".
   $ny[minutes].":".$ny[seconds]."(24h:min:sec)<br>";

  $paris = getdate(mktime($hour+1,$min, $sec, $mon, $day, $year));
  print "Paris : " . 
   $paris[year]."-".$paris[mon]."-".$paris[mday]."@".$paris[hours].":".
   $paris[minutes].":".$paris[seconds]."(24h:min:sec)<br>";
?>

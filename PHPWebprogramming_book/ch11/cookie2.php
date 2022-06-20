<?PHP 
  print "Country: ".$_COOKIE['country'];
  print "<br>";
  
  $_COOKIE['country'] = "UK";
  print "Country: ".$_COOKIE['country'];
  print "<br>";

  unset($_COOKIE['country']);
  print "Country: ".$_COOKIE['country'];
?>

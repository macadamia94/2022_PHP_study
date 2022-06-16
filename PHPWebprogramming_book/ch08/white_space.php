<?PHP
  $str0 = " Apple Banana Pear ";
  
  $str1 = chop($str0);
  print "start--" . $str1 . "--end<br>\n";
  
  $str2 = rtrim($str0);
  print "start--" . $str2 . "--end<br>\n";

  $str3 = ltrim($str0);
  print "start--" . $str3 . "--end<br>\n";

  $str4 = trim($str0);
  print "start--" . $str4 . "--end<br>\n";
?>

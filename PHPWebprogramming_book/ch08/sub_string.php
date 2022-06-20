<?PHP
  $str = "1234567890 abcdefghijklmnopqrstuvwxyz";
  
  $str1 = substr($str,2,5);
  print $str1 . "<br>";
  
  $str2 = substr($str,8,5);
  print $str2 . "<br>";

  $str3 = substr($str,12,8);
  print $str3 . "<br>";

  $str4 = substr($str,-9,8);
  print $str4 . "<br>";
?>

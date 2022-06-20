<?PHP
  $str1 = "http://www.php.edu/testurl.html?name=kim&age=28";
  
  $str2 = parse_url($str1);
  var_dump($str2);
  print "<br>";

  parse_str($str2[query]);
  print "이름 : " . $name . ", 나이 : " . $age . "<br>";
?>

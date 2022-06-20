<?PHP
  $str = 'one/two/three/four';
  
  $value = explode('/', $str); 
  foreach( $value as $val)
    print $val."<br>";
  
  print "<br>";
  
  $value = explode('/', $str, 2); 
  foreach( explode('/', $str, 2) as $val)
    print $val."<br>";
?>

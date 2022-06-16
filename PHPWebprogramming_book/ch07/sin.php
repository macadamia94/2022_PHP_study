<?PHP
  $result_sin = sin( M_PI / 6 );
  print "sin(30) = $result_sin <br>";
  $result_cos = cos( M_PI / 6 );
  print "cos(30) = $result_cos <br>";
  $result_tan = tan( M_PI / 6 );
  print "tan(30) = $result_tan <br>";

  $result = asin( $result_sin );
  print "asin($result_sin) = $result <br>";
  $result = acos( $result_cos );
  print "acos($result_cos ) = $result <br>";
  $result = atan( $result_tan );
  print "atan($result_tan) = $result <br>";
?>

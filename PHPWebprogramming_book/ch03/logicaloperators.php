<?PHP
  $t = TRUE;
  $f = FALSE;

  print "NOT <br>";
  print "T   :  ";
  (!$t)? print "T <br>" : print "F <br>";
  print "F   :  ";
  (!$f)? print "T <br>" : print "F <br>";
  print "<br>";
  
  print "AND <br>";
  print "T      T    :  ";
  ($t && $t)? print "T <br>" : print "F <br>";
  print "T      F    :  ";
  ($t && $f)? print "T <br>" : print "F <br>";
  print "F      T    :  ";
  ($f && $t)? print "T <br>" : print "F <br>";
  print "F      F    :  ";
  ($f && $f)? print "T <br>" : print "F <br>";
  print "<br>";
  
  print "OR <br>";
  print "T      T    :  ";
  ($t || $t)? print "T <br>" : print "F <br>";
  print "T      F    :  ";
  ($t ||  $f)? print "T <br>" : print "F <br>";
  print "F      T    :  ";
  ($f ||  $t)? print "T <br>" : print "F <br>";
  print "F      F    :  ";
  ($f ||  $f)? print "T <br>" : print "F <br>";
  print "<br>";
  
  print "XOR <br>";
  print "T      T    :  ";
  ($t xor $t)? print "T <br>" : print "F <br>";
  print "T      F    :  ";
  ($t xor  $f)? print "T <br>" : print "F <br>";
  print "F      T    :  ";
  ($f xor  $t)? print "T <br>" : print "F <br>";
  print "F      F    :  ";
  ($f xor  $f)? print "T <br>" : print "F <br>";
  print "<br>";
?>

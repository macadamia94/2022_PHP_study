<?PHP
  $oprd1 = 5;
  $oprd2 = 12;

  $result = $oprd1 & $oprd2;
  print "$oprd1 & $oprd2 = $result <br>";
  $result = $oprd1 | $oprd2;
  print "$oprd1 | $oprd2 = $result <br>";
  $result = $oprd1 ^ $oprd2;
  print "$oprd1 ^ $oprd2 = $result <br>";
  $result = ~$oprd1;
  print "~$oprd1 = $result <br>";

  $oprd1 = 16;
  $oprd2 = 2;
  $result = $oprd1 << $oprd2;
  print "$oprd1 << $oprd2 = $result <br>";
  $result = $oprd1 >> $oprd2;
  print "$oprd1 >> $oprd2 = $result <br>";
?>

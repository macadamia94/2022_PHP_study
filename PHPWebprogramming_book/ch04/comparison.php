<?PHP
  $a = 123;
  $b = 456;
  $c = 123.0;

  if ($a == $b)
    print "$a 값이 $b 값과 같습니다. <br>";
  if ($a != $b)
    print "$a 값이 $b 값과 같지않습니다. <br>";
  if ($a < $b)
    print "$a 값이 $b 값보다 작습니다. <br>";
  if ($a > $b)
    print "$a 값이 $b 값보다 큽니다. <br>";
  if ($a <= $b)
    print "$a 값이 $b 값보다 작거나 같습니다. <br>";
  if ($a >= $b)
    print "$a 값이 $b 값보다 크거나 같습니다. <br>";
  if ($a === $b)
    print "$a 값이 $b 값과 동일합니다. <br>";

  if ($a == $c)
    print "$a 값이 $c 값과 같습니다. <br>";
  if ($a === $c)
    print "$a 값이 $c 값과 동일합니다. <br>";
?>

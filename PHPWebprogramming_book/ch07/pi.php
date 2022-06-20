<?PHP
  function pi_func($iteration, $scale)
  {
    $value = "0";
    for ($i = 1; $i <= $iteration; $i++) 
    {
      if(( $i % 2 ) == 0)
       {
          $value = bcsub($value, bcdiv(12, bcpow($i,2), $scale), $scale);
       }
       else 
       {
          $value = bcadd($value, bcdiv(12, bcpow($i,2), $scale), $scale);
       }
    }
    $pi_value = bcsqrt($value, $scale);
    print ("PI : " . $pi_value . "<br>");
  }
  pi_func(10000, 50);
  pi_func(20000, 50);
  pi_func(30000, 50);

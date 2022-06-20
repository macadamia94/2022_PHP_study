<?PHP
  $money = 1000000;
  $interest_rate = 0.1;

  for($year=1; $year<=10; $year++)
  {
      $simple = $money*(1+$interest_rate * $year);    

      $compound = $money;
      for($i=0; $i<$year; $i++)
        $compound *=(1+$interest_rate);

      print "$year 년 단리는 $simple, 복리는 $compound 입니다."; 
  }
?>

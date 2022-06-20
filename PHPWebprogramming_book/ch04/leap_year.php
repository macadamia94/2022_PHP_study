<?PHP
  $year = 2020

  if(($year % 400) == 0 || (($year % 4) == 0 && ($year % 100) != 0) ) 
    print $year . "년은 윤년입니다.<br>";
  else
    print $year . "년은 윤년이 아닙니다.<br>";
?>

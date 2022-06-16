<?PHP
  function hanoi($number, $from, $via, $to)
  {
    if($number == 1)
      print(" move disc $number from $from to $to <br>");
    else
    {    
      hanoi($number -1, $from, $to, $via);
      print(" move disc $number from $from to $to <br>");
      hanoi($number -1, $via, $from, $to);
    }
  }

  hanoi(5,'A','B','C');
?>

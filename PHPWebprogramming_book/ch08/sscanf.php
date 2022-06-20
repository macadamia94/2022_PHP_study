<?PHP
  $date = "September 30 2017";
  sscanf($date, "%s %d %d",$month, $day, $year);

  printf("%d/%s/%d", $year, $month,$day);
?>

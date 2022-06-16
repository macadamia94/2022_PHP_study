<?PHP
  $arr1 = array("A", "B", "C", "D", "E", "F", "G");
  $arr2 = array("A", "B", "D");
  $arr3 = array("E", "F", "G", "H");

  $results1 = array_diff ($arr1, $arr2);
  $results2 = array_diff ($arr1, $arr2, $arr3);

  print "results1 = ";
  foreach ($results1 as $value) 
  {
      print "$value ";
  }
  print "<br>";

  print "results2 = ";
  foreach ($results2 as $value) 
  {
      print "$value ";
  }
?>

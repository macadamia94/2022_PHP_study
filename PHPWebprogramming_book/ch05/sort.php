<?PHP
  $arrays = array("sample1.php", "sample11.php", "sample21.php",
                "sample2.php", "sample12.php", "sample22.php",
                "sample3.php", "sample13.php", "sample23.php");

  sort($arrays);

  print "SORT <br>";
  foreach ($arrays as $ar)
  {
      print "$ar <br>";
  }
?>

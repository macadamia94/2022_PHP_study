<?PHP
  $fruit1 = array(
              "Apple"   =>  "Red",
              "Peach"  =>  "Pink",
              "Banana" =>  "Yellow"
              );
  $fruit2 = array(
              "Apple"   =>  "Red",
              "Peach"  =>  "Pink",
              "Banana" =>  "Yellow"
              );
  
  print "<table border=1>";
  print "<tr><td><b>**** ORIGINAL ****</b><br>";
  print_r($fruit1);
  print "<br></td>";

  print "<tr><td><b>**** SORT() ****</b><br>";
  sort($fruit1);
  print_r($fruit1);
  print "<br></td></tr>";

  print "<tr><td><b>**** RSORT() ****</b><br>";
  rsort($fruit1);
  print_r($fruit1);
  print "<br></td></tr>";

  print "<tr><td><b>**** ASORT() ****</b><br>";
  asort($fruit2);
  print_r($fruit2);
  print "<br></td></tr>";

  print "<tr><td><b>**** ARSORT() ****</b><br>";
  arsort($fruit2);
  print_r($fruit2);
  print "<br></td></tr>";

  print "<tr><td><b>**** KSORT() ****</b><br>";
  ksort($fruit2);
  print_r($fruit2);
  print "<br></td></tr>";

  print "<tr><td><b>**** KRSORT() ****</b><br>";
  krsort($fruit2);
  print_r($fruit2);
  print "<br></td></tr>";

  print "</table>";
?>

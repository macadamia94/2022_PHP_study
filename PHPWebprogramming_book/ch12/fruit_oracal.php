<html>
<body>
<?PHP 
  array($results);
  $conn = ora_logon("sonnim", "sun123");
  $cur_ind = ora_open($conn);
 
  ora_parse($cur_ind, "select * from fruit where price >= 50");
  ora_exec($cur_ind);

  print "<table border=1><tr>" . 
       "<th>Name</th>" .
       "<th>Price</th>" . 
       "<th>Color</th>" .
       "<th>Country</th></tr>";
  
  while( $rows = ora_fetch_into($cur_ind, &$results) ) {
    print "<tr><td>" . $row[0] . "</td>" . 
         "<td>" . $row[1] . "</td>" . 
         "<td>" . $row[2] . "</td>" . 
         "<td>" . $row[3] . "</td></tr>";
  }
  print "</table>";
  ora_close($cur_ind);
  ora_logoff($conn);
?>
</body>
</html>

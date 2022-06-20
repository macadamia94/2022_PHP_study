<?PHP
  echo("<table border=1>");
  while (list($key,$var) = each($_GLOBALS))
  {
    echo("<tr><td>$key</td>");
    echo("<td>");
    print_r($var);
    echo("</td></tr>");
  }
  echo("</table>");
?>

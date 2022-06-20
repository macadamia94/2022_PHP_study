<html>
<body>
<?PHP 
  $conn = mysqli_connect('localhost', 'root', 'apmsetup', 'goods');

  if(mysqli_connect_errno()) {
    printf("%s \n", mysqli_connect_error());
    exit;
  }
  
  $query = "INSERT INTO fruit VALUES ('$name', $price, '$color', '$country')"; .
  $result = mysqli_query( $query );

  if ($result)
    print "입력되었습니다.<br>";
  else
    print "입력되지 않았습니다.<br>";  
       "<th>Country</th></tr>";
?>
</body>
</html>

<?PHP
  $addr = gethostbyname('127.0.0.1');
  $port = 5090;
  $data = "Apple Orange Banana Pear";
  $buf = "";
  $sock = socket_create(AF_INET, SOCK_DGRAM, 0);
  if($sock < 0)
    die(strerror($sock));

  $ret = socket_sendto( $sock, $data, strlen($data), 0, $addr, $port );
  echo "Send data : $data <br>";

  do
  {  
    $read = socket_recvfrom( $sock, $buf, 2048, 0, $addr, $port );
    } while($read < 0);

  echo "Receive data : $buf1 <br>";
  socket_close($sock);
?>

<?PHP
  $addr = gethostbyname('127.0.0.1');
  $port = 5092;
  $buf = "";

  $sock = socket_create(AF_INET, SOCK_DGRAM, 0);
  if($sock < 0)
    die(strerror($sock));

  if(($ret = socket_bind($sock, $addr, $port)) < 0)  
    die(socket_strerror($ret));

  do
  {  
    $read = socket_recvfrom( $sock, $buf, 2048, 0, $addr, $port );
    
    $resp .= $buf."<br>";
    $send = socket_sendto($sock, $resp, strlen($resp), 0, $addr, $port);
  } while($read);

  socket_close($sock);
?>

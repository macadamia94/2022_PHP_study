<html>
<body>
<form method = 'post' action = "chat_client.php">
  <?echo $username ?>
  <input type = 'hidden' name = 'username' value =<?echo $username ?>>
  <input type = 'text' name = 'msg' >
  <input type = 'submit' value = 'Go'>
</form>
</body>
</html>
 
<?php
  $addr = gethostbyname('127.0.0.1');
  $port = 5092;
  $buf = "";

  $sock = socket_create(AF_INET, SOCK_DGRAM, 0);
  if($sock < 0) 
    die(socket_strerror($sock));
   
  $data = $username. " : " . $msg
  $ret = socket_sendto($sock, $data, strlen($data), 0, $addr, $port);

  do{
    $read = socket_recvfrom($sock, $buf, 2048, 0, $addr, $port);
  }while($read < 0);

  echo "$buf";
  socket_close($sock);
?>

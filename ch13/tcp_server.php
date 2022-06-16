<?php
    $addr = gethostbyname("127.0.0.1");
    /*
    $addr = gethostbyname("localhost");
    $addr = gethostbyname("www.naver.com");
    */

    $port = 5091;
    print  "addr : {$addr}<br>";

    if(($sock = socket_create(AF_INET, SOCK_STREAM, 0)) < 0) {
        echo "socket_create() faild: reason : {socket_strerror($sock)} <br>";
    }
    if(($ret = socket_bind($sock, $addr, $port) < 0)){
        echo "socket_bind() failed: reason : " . socket_strerror($ret) . "<br>";
    }
    if(($ret = socket_listen($sock, 0)) == false) {
        echo "socket_listen() failed: reason : " . socket_strerror($ret) . "<br>";
    }
    if(($msgsock = socket_accept($sock)) < 0) {
        echo "socket_accept() failed: reason : " . socket_strerror($msgsock) . "<br>";
    }

    $buf = "";
    $buf = socket_read($msgsock, 2048);
    if($buf == NULL) {
        echo "socket_read() failed: reason : " . socket_strerror($buf) . "<br>";
    }

    echo " Receive data : $buf <br>";

    $temp = preg_split("/\s+/", $buf);
    sort($temp);
    $talkback = "";
    for($i = count($temp) -1; $i > 0; $i--) {
        $talkback .= $temp[$i] . " ";
    }
    socket_write($msgsock, $talkback, strlen($talkback));
    echo "Send data : $talkback <br>";

    socket_close($msgsock);
    socket_close($sock);
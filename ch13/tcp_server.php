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

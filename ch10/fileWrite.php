<?php
    $filep = fopen("../romeo.txt", "a");

    if(!$filep) {
        die("파일을 열 수 없습니다.");
    }
    print "파일을 열었습니다. <br>";

    fputs($filep, "\nROMEO : rrrrrrrr");
    //  \n : 개행
    fclose($filep);
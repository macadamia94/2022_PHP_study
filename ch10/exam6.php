<?php
    // exam6.txt 파일을 읽어서 전부 대문자로 변경한 후
    // exam6_capital.txt 에 저장해 주세요.

    // 1번 방법
    $filep = fopen("./exam6.txt", "r");
    $newfilep = fopen("./exam6_capital.txt", "w");
    
    while($line = fgets ($filep)) {
        fputs($newfilep, strtoupper($line));
    }

    fclose($filep);
    fclose($newfilep);


    // 2번 방법
    $file = file("./exam6.txt");
    $newfile = fopen("./exam6_capital.txt", "a");

    foreach($file as $line) {
        fputs($newfile, strtoupper($line));
    }

    fclose($newfile);
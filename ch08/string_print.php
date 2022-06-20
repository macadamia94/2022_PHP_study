<?php error_reporting(E_ALL); ini_set("display_errors", 1); ?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   
    $str = "PHP 웨프로그래밍";
    print "str[0] : " . $str[0] . "<br>";
    print "str[4] : " . $str[4] . $str[5] . $str[6] . "<br>";
    print $str . "<br>";

    $str1 = "http://www.php.edu/testurl.html?name=kim&age=28";
    $str2 = parse_url($str1);
    print "SCHEME : " . $str2["scheme"] . "<br>";
    print "HOST : " . $str2["host"] . "<br>";
    print "PATH : " . $str2["path"] . "<br>";
    //var_dump($str2);

    error_log("test", 3, "./err.log");

    print "query :" .$str2["query"]. "<br>";

    parse_str($str2["query"], $output);
    print "이름 : ";
    print $output["name"];
    print "<br>";
    print "나이 : ";
    print $output["age"];
    print "<br>";
    $sitename = "php웹이즈프리";
    echo "substr : " . substr($sitename, 0, 6) . "<br>";  // substr : 한글은 3자리씩 차지
    echo "mb_substr : " . mb_substr($sitename, 0, 4) . "<br>";   // mb_substr : 한글도 1자리씩 차지
    echo "strlen : " . strlen($sitename) . "<br>";  // strlen : 한글은 3자리씩 차지
    echo "mb_strlen : " . mb_strlen($sitename) . "<br>";   // mb_strlen : 한글도 1자리씩 차지
    printf("나이 %02d, 키 %.2f, hello: %-10s <br>", 8, 173.1212, "안녕");

    $date = "2017 1 13 10";
    sscanf($date, "%d %d %d %d", $year, $mon, $day, $sec);
    print $year . "<br>";
    print $mon . "<br>";
    print $day . "<br>";
    print $sec . "<br>";

    $str4 = "나이는 12살입니다.";
    sscanf($str4, "%s %d %s", $strAge, $decAge, $strAge2);
    print $strAge . "<br>";
    print $decAge . "<br>";
    print $strAge2 . "<br>";

    $str5 = "나이는 121212.12살입니다.";
    sscanf($str5, "%s %d", $sss, $decAge);

    print $sss . "<br>";
    print $decAge . "<br>";
?>    
</body>
</html>
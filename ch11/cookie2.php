<?php
    $cookie_key = 'aaa';

    echo "Country : ", $_COOKIE[$cookie_key], "<br>";

    $_COOKIE[$cookie_key] = "UK"; // 메모리상에 쿠기는 변경하지 않는 것이 좋다
    echo "Country : ", $_COOKIE[$cookie_key], "<br>";

    /*
    // 쿠키를 바꿀경우 변수로 바꾸는 것이 좋음
    $country = $_COOKIE[$cookie_key];
    $country ='UK';
    */

    /* 
    unset($_COOKIE['country']);
    setcookie("country"); 
    */

    echo "Country : ", $_COOKIE[$cookie_key], "<br>";
?>
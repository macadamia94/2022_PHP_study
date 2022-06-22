<?php
    /*
        상수로 만들어서 사용하는 이유
        유지보수가 편리해서 
        실수하지 않기 위해서
    */

    define('_ROOT', $_SERVER['DOCUMENT_ROOT']);

    define('_DBTYPE', 'mysql'); //mysql, mariadb 등
    define('_DBHOST', 'localhost'); //DB접속주소
    define('_DBNAME', 'board_login'); //DB명
    define('_DBUSER', 'root'); //아이디
    define('_DBPASSWORD', '506greendg@'); //비번
    define('_CHARSET', 'utf8');
    define("_VIEW", "application/views/");

    define("_TITLE", "title");
    define("_HEADER", "header");
    define("_MAIN", "main");
    define("_FOOTER", "footer");

    define("_LOGINUSER", "loginUser");

    define("_CSS", "css");
    define("_JS", "js");
<?php
    session_start();    // session 쓸때 필수
    session_destroy();  // 실행창에서는 살아있고 다음부터 없앰
    // session_unset(); // 바로 없앰
    // session_regenerate_id(true); // 세션ID값을 변경

    if(isset($_SESSION['var1'])) {
        echo $_SESSION['var1'], "<br>";
    }
?>
<a href="confirm.php">확인</a>
<?php
    session_start();
    // session_regenerate_id(true);    // 세션ID값을 변경
    echo "Session ID : " , session_id();
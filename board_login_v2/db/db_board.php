<?php
    include_once "db.php";

    function ins_board(&$param) {
        $i_user = $param["i_user"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];

        $sql = 
        "   INSERT INTO t_board
            (title, ctnt, i_user)
            VALUES
            ('$title', '$ctnt', $i_user)
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_paging_count(&$param) {
        $sql= 
        "   SELECT CEIL(COUNT(i_board) / {$param["row_count"]}) AS cnt
              FROM t_board
        ";
        // max, min, avg, count, sum -> 그룹함수 : group by 가 없을 경우 모든 테이블에서의 값을 의미
        // 그룹함수는 group by 가 없을 경우 반드시 한 개의 레코드만 생성
        // group by 가 있다면 그룹별로 레코드가 생성되기 때문에 복수의 레코드가 생성됨

        if($param["search_txt"] !== "") {
            $sql .= " WHERE title LIKE '%{$param["search_txt"]}%'";
            // 같은 의미 $sql = $sql . "WHERE title LIKE '%{$param["search_txt"]}%'";
        }

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        $row= mysqli_fetch_assoc($result); 
        // 어떤 레코드를 불러옴
        // 레코드를 하나만 가져오기 때문에 한번만 실행하면됨
        return $row["cnt"]; // 올림처리까지한 정수값이 넘어감
        // return $row 라고 적으면 배열이 넘어감
    }

    function sel_board_list(&$param) {
        $sql = "SELECT A.i_board, A.title, A.created_at
                     , B.nm
                  FROM t_board A
                 INNER JOIN t_user B
                    ON A.i_user = B.i_user
                ";
        if($param["search_txt"] !== "") {
            $sql .= " WHERE A.title LIKE '%{$param["search_txt"]}%'";
        }
        $sql .= "ORDER BY A.i_board DESC
                 LIMIT {$param["s_idx"]}, {$param["row_count"]}";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_board(&$param) {
        $i_board = $param["i_board"];
        $sql = "SELECT A.title, A.ctnt, A.created_at
                     , B.i_user, B.nm
                  FROM t_board A
                 INNER JOIN t_user B
                    ON A.i_user = B.i_user
                 WHERE A.i_board = $i_board";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);        
        return mysqli_fetch_assoc($result);
    }

    function del_board(&$param) {
        $i_board = $param["i_board"];
        $i_user = $param["i_user"];

        $sql = "DELETE FROM t_board 
                 WHERE i_board = $i_board 
                   AND i_user = $i_user";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
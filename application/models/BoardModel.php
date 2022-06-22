<?php
namespace application\models;
use PDO;

class BoardModel extends Model {
    public function selBoardList() {
        $sql = "SELECT i_board, title, created_at 
                  FROM t_board
                 ORDER BY i_board DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); 
        // (PDO::FETCH_OBJ)를 넣으면 익명클래스로 넘어와서 객체로 사용 (안 쓰면 배열로 넘어옴)
        // fetchAll 배열로 넘어오지만 배열 방 안에 넘어오는 것은 객체
        
    }

    public function selBoard(&$param) {
        $sql = "SELECT B.*
                     , U.i_user, U.nm
                  FROM t_board B
                 INNER JOIN t_user U
                    ON B.i_user = U.i_user
                 WHERE i_board = :i_board";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':i_board', $param["i_board"]);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function delBoard(&$param) {
        $sql = "DELETE FROM t_board
                 WHERE i_board = :i_board";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':i_board', $param["i_board"]);
        return $stmt->execute(); // 가져올 값이 없기때문에 execute()까지만 하면 됨
    }

    public function updProc(&$param) {
        $sql = "UPDATE t_board
                   SET title = :title
                     , ctnt = :ctnt
                 WHERE i_board = :i_board";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':i_board', $param["i_board"]);
        $stmt->bindValue(':title', $param["title"]);
        $stmt->bindValue(':ctnt', $param["ctnt"]);
        $stmt->execute();
    }

    public function insBoard(&$param) {
        $sql = "INSERT INTO t_board
                (i_user, title, ctnt)
                VALUES
                (:i_user, :title, :ctnt)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':i_user', $param["i_user"]);
        $stmt->bindValue(':title', $param["title"]);
        $stmt->bindValue(':ctnt', $param["ctnt"]);
        $stmt->execute();
    }
}
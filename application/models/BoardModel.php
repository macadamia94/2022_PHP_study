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
}
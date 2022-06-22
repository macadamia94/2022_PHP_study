<?php
namespace application\controllers;

use application\models\BoardModel;

class BoardController extends Controller {
    public function list() {
        $model = new BoardModel();
        $this->addAttribute(_TITLE, "리스트");
        $this->addAttribute("list", $model->selBoardList()); // $this->list = $model->selBoardList();
        $this->addAttribute("js", ["board/list"]);
        $this->addAttribute(_HEADER, $this->getView("template/header.php"));
        $this->addAttribute(_MAIN, $this->getView("board/list.php"));
        $this->addAttribute(_FOOTER, $this->getView("template/footer.php"));
        return "template/t1.php";
        //return "board/list.php"; // views 안에서 부터의 주소를 적음
    }

    public function detail() {
        $model = new BoardModel();
        $i_board = $_GET["i_board"];
        // print "i_board : {$i_board}<br>";
        $param = ["i_board" => $i_board];
        $this->addAttribute("data", $model->selBoard($param));
        $this->addAttribute("js", ["board/detail"]);
        return "board/detail.php";

        // 글번호, 제목, 내용, 글쓴이 이름, 작성일
    }

    public function del() {
        $model = new BoardModel();
        $i_board = $_GET["i_board"];
        $param = ["i_board" => $i_board];
        $model->delBoard($param);
        return "redirect:/board/list";  
        // redirect : 화면없이(view가 없는 경우) 처리만하고 해당 파일로 이동 
    }

    public function mod() {
        $model = new BoardModel();
        $i_board = $_GET["i_board"];
        $param = ["i_board" => $i_board];
        $this->addAttribute("data", $model->selBoard($param));
        $this->addAttribute(_TITLE, "수정");
        $this->addAttribute(_HEADER, $this->getView("template/header.php"));
        $this->addAttribute(_MAIN, $this->getView("board/mod.php"));
        $this->addAttribute(_FOOTER, $this->getView("template/footer.php"));
        return "template/t1.php";
    }

    public function modProc() {
        $i_board = $_POST["i_board"];
        $title = $_POST["title"];
        $ctnt = $_POST["ctnt"];
        $param = [
            "i_board" => $i_board,
            "title" => $title,
            "ctnt" => $ctnt
        ];
        $model = new BoardModel();
        $model->updProc($param);
        return "redirect:/board/detail?i_board={$i_board}";  
    }
}
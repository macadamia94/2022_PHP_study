<?php
namespace application\controllers;

use application\models\BoardModel;

class BoardController extends Controller {
    public function list() {
        $model = new BoardModel();
        $this->addAttribute("title", "리스트");
        $this->addAttribute("list", $model->selBoardList()); // $this->list = $model->selBoardList();
        $this->addAttribute("js", ["board/list"]);
        return "board/list.php"; //view 파일명!
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
        return "redirect:/board/list";  // redirect : 화면없이 처리만하고 해당 파일로 이동
    }

    public function mod() {
        $model = new BoardModel();
        $i_board = $_GET["i_board"];
        $param = ["i_board" => $i_board];
        $this->addAttribute("data", $model->selBoard($param));

        $this->addAttribute(_HEADER, $this->getView("template/header.php"));
        $this->addAttribute(_MAIN, $this->getView("board/mod.php"));
        $this->addAttribute(_FOOTER, $this->getView("template/footer.php"));
        return "template/t1.php";
    }

}
<?php
namespace application\controllers;
use application\controllers\Controller;

class BoardController extends Controller {
    public function list() {
        
        return "board/list.php"; //view 파일명!
    }
}
<?php
namespace application\controllers;

include_once "application/utils/SessionUtils.php";

abstract class Controller {
    public function __construct($action) {        
        $view = $this->$action();
        require_once $this->getView($view); 
    }   // require_once 를 함으로써 BoardController.php 밑에 list.php가 들어가지는 기능을 함
    
    protected function addAttribute($key, $val) {
        $this->$key = $val;
    }

    protected function getView($view) {
        if(strpos($view, "redirect:") === 0) {
            header("Location: " . substr($view, 9));
            return;
        }
        return _VIEW . $view;
    }       // _VIEW : 쌍따옴표(""), 달러($)도 없고 전부 대문자인 경우는 상수를 의미
}


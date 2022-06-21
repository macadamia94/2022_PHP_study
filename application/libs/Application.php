<?php
namespace application\libs;

class Application{
    
    public $controller;
    public $action;

    public function __construct() {
        $getUrl = '';
        if (isset($_GET['url'])) {
            $getUrl = rtrim($_GET['url'], '/');
            $getUrl = filter_var($getUrl, FILTER_SANITIZE_URL);
        }        
        $getParams = explode('/', $getUrl); // 슬래쉬(/)로 구분
        // http://localhost/0번방/1번방/
        // 주소를 0번방, 1번방만 사용하도록 되어 있음
        $controller = isset($getParams[0]) && $getParams[0] != '' ? $getParams[0] : 'board';
        // 0번방이 셋팅되어있고 빈칸이라면 contorller를 담고 아니면 board를 담음
        $action = isset($getParams[1]) && $getParams[1] != '' ? $getParams[1] : 'index';
        // 1번방이 셋팅되어있고 빈칸이라면 contorller를 담고 아니index를 담음
        if (!file_exists('application/controllers/'. $controller .'Controller.php')) {
            echo "해당 컨트롤러가 존재하지 않습니다.";
            exit();
        }
        $controllerName = 'application\controllers\\' . $controller . 'controller';
                          // ↑ 이건 주소가 아닌 네임스페이스 그래서 역스래쉬(\)를 사용
        new $controllerName($action); // Controller.php(4~8행) 생성자 함수(__construct) 호출 
    }
}
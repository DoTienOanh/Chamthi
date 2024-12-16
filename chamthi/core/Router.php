<?php
class Router {
    protected $controller = 'TrangchuController';
    protected $action = 'index';
    protected $params = [];

    public function route() {
        // Lấy URL từ request
        $url = $this->parseUrl();

        // Kiểm tra và thiết lập controller
        if (isset($url[0]) && file_exists('app/Controllers/' . ucfirst($url[0]) . 'Controller.php')) {
            $this->controller = ucfirst($url[0]) . 'Controller';
            unset($url[0]);
        }

        require_once 'app/Controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Kiểm tra và thiết lập action
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->action = $url[1];
            unset($url[1]);
        }

        // Thiết lập params
        $this->params = $url ? array_values($url) : [];

        // Gọi action với params
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    private function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}
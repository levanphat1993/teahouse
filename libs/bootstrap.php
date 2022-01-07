<?php

class Bootstrap {
    function __construct() {
        $urls = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : null;
        $urls = ltrim($urls, '/');
        $urls = rtrim($urls, '/');
        $urls = explode('/', $urls);

        if(empty($urls[0])) {
            require 'controllers/index.php';
            $controller = new Index();
            $controller->index();
            return false;
        }

        $file = 'controllers/'.$urls[0].'.php';
        if (file_exists($file)){
            require $file;
        } else {
            return $this->error();
        }

        $controller = new $urls[0];
        $controller->loadModel($urls[0]);
        //calling methods
        if(isset($urls[2])){
            if(method_exists($controller, $urls[1])){
                $controller->{$urls[1]}();
            }else{
                return $this->error();
            }
        }else{
            if(isset($urls[1])){
                if(method_exists($controller, $urls[1])){
                    $controller->{$urls[1]}();
                }else{
                    return $this->error();
                }
            }else{
                return $controller->index();
            }
        }
    }

    public function error()
    {
        require 'controllers/appError.php';
        $controller = new AppError();
        $controller->index();
        return false;
    }
}
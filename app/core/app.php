<?php
namespace app\core;




class app
{
    private $controller ;
    private $method= "index";
    private $params =[];
    public function __construct()
    {
        $this->url();
        $this->render();


    }
    private function url()
    {
        if (!empty($_SERVER['QUERY_STRING'])) {
            $url = explode("/", $_SERVER['QUERY_STRING']);
            $this->controller = isset($url[0]) ? $url[0] . "Controller" : "homecontroller";
            $this->method = isset($url[1]) ? $url[1] : "index";
            unset($url[0], $url[1]);
            $this->params = array_values($url);
        }else{
            $this->controller = "homecontroller";
            $this->method = "index";
        }
      
            



    }
    private function render()
    {
        $controller = "app\controllers\\" . $this->controller;
        if (class_exists($controller)) {

            if (method_exists($controller, $this->method)) {
                $controller = new $controller();


                call_user_func_array([$controller, $this->method], $this->params);

            } else {
                echo "method not found";
            }
        } else {
            echo "class not found";
        }

    }
}
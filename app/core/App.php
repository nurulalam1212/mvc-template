<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of App
 *
 * @author nurul
 */
class App {
    protected $controller = "home";
    protected $method = "index";
    protected $params = [];
    
    function __construct()
    {
        $url = $this->parseUrl();
        if(isset($url[0]))
        {
            if(file_exists("../app/controllers/".$url[0].".php"))
            {
                $this->controller = $url[0];
                unset($url[0]);
            }
        }
        require_once "../app/controllers/".$this->controller.".php";
        $this->controller = new $this->controller; //initiate whatever controller was found on url 0 or default controller
        if(isset($url[1]))
        {
            if(method_exists($this->controller, $url[1]))
            {
                $this->method = $url[1];
                unset($url[1]);
            }
           
        }
        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method],$this->params);
    }
    protected function parseUrl()
    {
        if(isset($_GET["url"]))
        {
            return $url = explode("/",filter_var(ltrim(htmlspecialchars($_GET["url"]),"/"),FILTER_SANITIZE_URL));
        }
    }
}

<?php

class App
{
    //Controller, method dan parameter default ketika buka file public
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();

        //Controller
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        //method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];    
                unset($url[1]);
            }
        }

        //controller
        if (!empty($url)){
            // $this->params = $url; //
            $this->params = array_values($url); //array values = mengurutkan kembali array yang telah di unset berdasar indeks mulai dari 0
        }

        //jalankan params jika ada

        call_user_func_array([$this->controller, $this->method], $this->params);
        
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/'); //menghapus slash di paling belakang
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}

<?php

namespace php\base;

class Controller
{
    public $route;
    public $controller;
    public $model;
    public $view;
    public $prefix;
    public $layout;
    public $data = [];
    public $meta = ['title' => '', 'description' => '', 'keywords' => ''];
    public function __construct($route)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->view = $route['action'];
        $this->prefix = $route['prefix'];
        $this->model = $route['controller'];
    }
    public function getView(){
        $viewObject = new View($this->route, $this->layout, $this->view, $this->meta);
        $viewObject->render($this->data);
    }
    public function set($data){
        $this->data = $data;
    }
    public function setMeta($title = '', $desc = '', $keywords = ''){
        $this->meta['title'] = $title;
        $this->meta['description'] = $desc;
        $this->meta['keywords'] = $keywords;

    }

}
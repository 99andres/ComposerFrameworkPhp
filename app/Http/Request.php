<?php 
namespace App\Http;
class Request{
    protected $segments=[];
    protected $controller;
    protected $method;
    public function __construct(){
        //domininio/nombreControler/nombreMethod
        $this->segments=explode('/',$_SERVER['REQUEST_URI']);
        $this->setController();
        $this->setMehod();
    }
    public function setController(){
        $this->controller=empty($this->segments[1])
        ?'home':$this->segments[1];
    }
    public function setMehod(){
        $this->method=empty($this->segments[2])?'index':$this->segments[2];
    }
    public function getController(){
        //ejemplo/nombreControler
        $controller=ucfirst($this->controller);      
        return  "App\Http\Controller\\{$controller}Controller";
    }
    public function getMethod(){
        return $this->method;
        
    }
    public function send(){
        $controller=$this->getController();
        $method=$this->getMethod();
        
        //disparar el controlardor y metodos
        $response=call_user_func([
            new $controller,//aqui se ejecuta a la clase 
            $method //aqui se ejecuta a la funcion que dentro de la clase
        ]);
        $response->send(); //esta send viene de HomeController y esta asu vez viene de Response
    }
}
?>
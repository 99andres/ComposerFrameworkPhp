<?php 
namespace App\Http;
class Response{
    protected $view;
    public function __construct($view)
    {
        $this->view=$view;
    }
    public function getView(){
        return $this->view; 
    }
    public function send(){
        $views=$this->getView();
        $content=file_get_contents(__DIR__ . "/../../views/$views.php");
        require __DIR__ . "/../../views/layout.php";
    }
}
?>
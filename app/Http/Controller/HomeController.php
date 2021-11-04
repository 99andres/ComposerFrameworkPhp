<?php
/* este bloque de codigo es sin helpers
namespace App\Http\Controller;
class HomeController{
    public function index(){
        return new \App\Http\Response('home'); //se puede de esta forma o como esta abajo

        use App\Http\Response//este va debajo de nameespace
        return new Response('home')

    }
}
*/

//el bloque de abajo es con helpers
namespace App\Http\Controller;
class HomeController{
    public function index(){
        return views('home');
    }
}

?>
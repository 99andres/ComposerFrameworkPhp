<?php 
//los helpers son lo ultimos en implementar
if(!function_exists('views')){
    function views($view){
        //return ... va el codigo a retornar
        return new App\Http\Response($view);
    }

}
?>
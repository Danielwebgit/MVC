<?php
require_once '../app/Controller/HomeController.php';

class Aplication {

     protected $Controller='HomeController';
     protected $action='index';
     protected $prams=[];

     public function __constructor()
     {
         $this->prepareURL();



          if(file_exists(CONTROLLER."HomeController".'.php')){

              $ObgController= new HomeController();


               if(method_exists($ObgController, $this->action)){
                    call_user_func_array([$ObgController,$this->action],$this-> prams);
               }
          }

         //var_dump($_SERVER['REQUEST_URI']);


     }
     protected function prepareURL() {
          $request=trim($_SERVER['REQUEST_URI'], '/');


          if(!empty($request)){

               $url= explode( '/',$request);

               $this->controller=isset($url[2])? $url[2].'Controller':'HomeController';
               $this->action=isset($url[3])?$url[3]:'index';

               unset($url[2],$url[3]);
               $this->prams=!empty($url) ? array_values($url) : [];

          }
     }
}
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Envios_Captura
 *
 * @author Lucero
 */
class Envios_Captura {
    //put your code here
   private $capturar = array();
   private $sin_encontrar;
   private $mensaje;
   private $tipo;
   
   public function __construct($obligatorios = array(),$tipo = 'post' ) {
       try {
           if(!empty($obligatorios)){
               $this->capturar = $obligatorios; 
           }else{
             throw new Exception("Se nesecita que se digas que datos  capturar");  
           }
           
       } catch (Exception $exc) {
           echo $exc->getMessage();
       }
       try {
           if(!empty($tipo)){
            $this->tipo =($tipo === 'post')?$_POST:$_GET;
           }else{
             throw new Exception("Que tipo de captura es get o post");  
           }
           
       } catch (Exception $cual) {
           echo $cual->getMessage();
       }
       }
    
    public function post_captura($datos = array(),$no_obligatorios = array()) {
    
        //primeros los datos obligatorios
        if (!empty($datos)) {
            $captura_post = array();
            $perdidos=' Esto(s) elementos se perdieron(';
            foreach ($datos as $buscar) {
                //echo $buscar;
                if (array_key_exists($buscar, $_POST)) {
                    if(!empty($_POST[$buscar])){
                    $captura_post[$buscar] = $_POST[$buscar];
                    --$cantidad;    
                    }else{
                     $perdidos.='#'.$buscar.' ';    
                    }                 
                }
            }
        }
        //datos que pueden  estar vacios
        if(count($no_obligatorios)>0){
            foreach ($no_obligatorios as $buscar2) {
                //echo $buscar;
                $buscar2;
                if (array_key_exists($buscar2, $_POST)) {
                     $captura_post[$buscar2] = $_POST[$buscar2];            
                }
            }
            
        }
   
        if ($mensaje) {$mensaje  = $perdidos . ')';}
        $devolver = ($cantidad == 0) ? $captura_post :$mensaje;
        print_r($devolver); exit();
        return $devolver;
    }

}

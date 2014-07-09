<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST['login'])){
    echo json_encode($_POST['login']);
}



function   insert_usuario ($datos){
$mysqli = new mysqli('localhost', 'batman', 'omegaz01', 'blue_print');

$mysqli->close();
}

function existe_usuario(){
 $mysqli = new mysqli('localhost', 'batman', 'omegaz01', 'blue_print');

$mysqli->close();  
}



function generaPass($longitudPass = 10) {
    $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    $longitudCadena = strlen($cadena);
    $pass = "";
    for ($i = 1; $i <= $longitudPass; $i++) {
        $posicion_aleatoria = rand(0, $longitudCadena - 1);
        $pass .= substr($cadena, $posicion_aleatoria, 1);
    }
    return $pass;
}

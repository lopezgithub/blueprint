<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$mysqli = new mysqli('localhost', 'batman', 'omegaz01', 'blue_print');
if (mysqli_connect_error()) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

echo 'Éxito... ' . $mysqli->host_info . "\n";

$mysqli->close();

?>


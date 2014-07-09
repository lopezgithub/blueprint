<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if(file_exists($_POST['url_archivo'])){
     echo file_get_contents($_POST['url_archivo']);
 }else{
     echo 'NO exite el archivo'; 
 }   
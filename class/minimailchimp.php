<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of minimailchimp
 *
 * @author Lucero
 */
require_once 'Mailchimp.php';

class minimailchimp {

    //put your code here
    protected $list;
    protected $mail;
    protected $id;
    protected $mini;
    protected $mensaje;

    function __construct($id = null) {
        if (!$id) {
            try {
                throw new Exception('El minimailchimp minimo nesecita  el id  que es el api key de mailchimp');
            } catch (Exception $e) {
                // este bloque no se ejecuta, no coincide el tipo de excepción
                echo $e->getMessage();
            }
        } else {
            $this->id = $id;
            $this->mini = new Mailchimp($this->id);
        }
    }

    public function mensaje($mensaje) {
        echo '<b>' . $mensaje . '<b>';
    }

    

    public function suscribir_usuario($list, $emails = array(), $merge = null, $mensaje = false) {
        $existe = $this->existe_usuario($list, $emails, $mensaje);
        if (!$existe) {
            $this->mini->lists->subscribe($list, $emails, $merge, 'html', false);
        } 
    }

    public function eliminar_usuario($list, $emails = array(), $mensaje = false) {
        $existe = $this->existe($list, $emails, true);
        $cuenta = $existe['success_count'];
        if ($cuenta > 0) {
            $borrado = $this->mini->lists->unsubscribe($list, $emails, true);

            /* sin terminar */
            print_r($borrado);
        }
    }

    public function existe_usuario($list, $emails = array(), $mensaje = false) {
        $existe = $this->mini->lists->memberInfo($list, array($emails));
        $total = $existe['error_count'];
        if ($total > 0) {
            if ($mensaje === TRUE) {
                $this->mensaje('No existe ese correo en la lista de mailchimp');
            }
      
            return FALSE;
        }
        return $existe;
    }

    /* Grupos */

    public function grupos($list) {
   $this->mini->lists->interestGroupings($list);
  
    }

    public function agregar_grupo($list, $nombre) {
     $this->mini->lists->interestGroupAdd($list, $nombre);
    }

    public function actualizar_grupo($list, $nombre, $nuevo_nombre) {
      $this->mini->lists->interestGroupUpdate($list, $nombre, $nuevo_nombre);

    }

    public function listas() {
     $this->mini->lists->getList();

    }

}

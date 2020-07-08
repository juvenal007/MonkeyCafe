<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author JuvenaL
 */
class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Crud');
    }

    public function login() {
        $usuario = $this->input->post('usuario');
        $password = $this->input->post('password');
        $ruta = "";
        $user = "";
        $res = "";
        if (isset($usuario) && isset($password)) {
            $user = $this->Crud->iniciarSesion($usuario, sha1(md5($password)));
            
            if (count($user) > 0) {
                if ($user[0]->tipo == "ADMIN") {
                    $ruta = base_url()."menu-admin";
                    $res = "Admin Valido";
                    $this->session->set_userdata("admin", $user);
                }else{
                    $res = "Usuario";
                    $ruta = base_url();
                }
            }else{
                $res = "Usuario no valido";
            }
        } else {
            $res = "Datos incorrectos";
        }
        echo json_encode(array('value' => $res, 'ruta' => $ruta, 'user' => $user));
    }

}

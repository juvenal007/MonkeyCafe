<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Control
 *
 * @author JuvenaL
 */
class Control extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Crud');
    }

    public function index() {
        $home = $this->Crud->home();
        $data['nombrePagina'] = $home[0]->nombrePagina;
        $data['telefono'] = $home[0]->telefono;
        $data['nombre'] = $home[0]->nombre;
        $data['correo'] = $home[0]->correo;
        $this->load->view('index', $data);
    }

    public function captcha() {
        $this->load->view('captcha');
    }

    public function nosotros() {
        $home = $this->Crud->home();
        $data['nombrePagina'] = $home[0]->nombrePagina;
        $data['telefono'] = $home[0]->telefono;
        $data['nombre'] = $home[0]->nombre;
        $data['correo'] = $home[0]->correo;        
        $this->load->view('nosotros', $data);
    }

    public function contacto() {
        $home = $this->Crud->home();
        $data['nombrePagina'] = $home[0]->nombrePagina;
        $data['telefono'] = $home[0]->telefono;
        $data['nombre'] = $home[0]->nombre;
        $data['correo'] = $home[0]->correo;        
        $this->load->view('contacto', $data);
    }

    public function servicios() {
        $home = $this->Crud->home();
        $data['nombrePagina'] = $home[0]->nombrePagina;
        $data['telefono'] = $home[0]->telefono;
        $data['nombre'] = $home[0]->nombre;
        $data['correo'] = $home[0]->correo;       
        $this->load->view('servicios', $data);
    }

    public function login() {
        $home = $this->Crud->home();
        $data['nombrePagina'] = $home[0]->nombrePagina;
        $data['telefono'] = $home[0]->telefono;
        $data['nombre'] = $home[0]->nombre;
        $data['correo'] = $home[0]->correo; 
        $this->load->view('login', $data);
    }

    public function menu() {
        $home = $this->Crud->home();
        $data['nombrePagina'] = $home[0]->nombrePagina;
        $data['telefono'] = $home[0]->telefono;
        $data['nombre'] = $home[0]->nombre;
        $data['correo'] = $home[0]->correo; 
        $this->load->view('menu-admin', $data);
    }

    public function getSession() {
        $idadmin = $this->session->userdata('admin');
        if (isset($idadmin)) {
            echo json_encode(array($idadmin[0]));
        } else {
            echo json_encode('Sin data');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }

    public function home() {
        echo json_encode($this->Crud->home());
    }

    public function datos() {
        $datos = $this->Crud->home();
        echo $datos;
    }

    public function updateHome() {
        $titulo1 = $this->input->post('titulo1');
        $subtitulo1 = $this->input->post('subtitulo1');
        $subtitulo2 = $this->input->post('subtitulo2');
        $titulo2 = $this->input->post('titulo2');
        $cuerpo2 = $this->input->post('cuerpo2');
        $nombrePagina = $this->input->post('nombrePagina');
        $telefono = $this->input->post('telefono');
        $nombre = $this->input->post('nombre');
        $correo = $this->input->post('correo');

        $this->Crud->insertarHome($titulo1, $subtitulo1, $subtitulo2, $titulo2, $cuerpo2, $nombrePagina, $telefono, $nombre, $correo);

        $res = "Datos modificados";

        echo json_encode(array('value' => $res));
    }

    public function enviarContacto() {
        $nombreContacto = $this->input->post('nombreContacto');
        $telefonoContacto = $this->input->post('telefonoContacto');
        $emailContacto = $this->input->post('emailContacto');
        $mensajeContacto = $this->input->post('mensajeContacto');
        $res = '';
        if (isset($nombreContacto) && isset($mensajeContacto) && isset($telefonoContacto) && isset($emailContacto)) {
            $this->Crud->enviarContacto($nombreContacto, $telefonoContacto, $emailContacto, $mensajeContacto);
            $res = 'Formulario enviado exitosamente';
        } else {
            $res = 'Faltan Datos';
        }

        echo json_encode(array('value' => $res));
    }

    public function getMensajesTotal() {
        $res = $this->Crud->getMensajesTotal();
        echo json_encode(array('value' => $res));
    }

    public function getMensajesTop() {
        echo json_encode($this->Crud->getMensajesTop());
    }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Crud
 *
 * @author JuvenaL
 */
class Crud extends CI_Model {
    
    public function iniciarSesion($usuario, $password) 
    {
        $this->db->where("usuario", $usuario);
        $this->db->where("password", $password);
        return $this->db->get("usuario")->result();
    }
    public function home() 
    {
        $this->db->where('idhome', 1);
        return $this->db->get('home')->result();
    }
    
    public function insertarHome($titulo1, $subtitulo1, $subtitulo2, $titulo2, $cuerpo2,
            $nombrePagina, $telefono, $nombre, $correo)
    {
        $datos = array (
            'titulo1' => $titulo1,
            'subtitulo1' => $subtitulo1,
            'subtitulo2' => $subtitulo2,
            'titulo2' => $titulo2,
            'cuerpo2' => $cuerpo2,
            'nombrePagina' => $nombrePagina,
            'telefono' => $telefono,
            'nombre' => $nombre,
            'correo' => $correo
        );
        
        $this->db->where('idhome', 1);
        return $this->db->update('home', $datos);
    }
    
    public function enviarContacto($nombreContacto, $telefonoContacto, $emailContacto, $mensajeContacto){
        $fecha = strftime("%Y-%m-%d %H:%M:%S", time());
        
        $datos = array(
            'fecha' => $fecha,
            'nombreContacto' => $nombreContacto,
            'telefonoContacto' => $telefonoContacto,
            'emailContacto' => $emailContacto,
            'mensajeContacto' => $mensajeContacto
        );
                
       return $this->db->insert('contacto', $datos);         
    }
    
    public function getMensajesTotal()
    {
    return $this->db->get('contacto')->result();    
    }
    
    public function getMensajesTop()
    {
        $query = ('SELECT * FROM contacto ORDER BY idcontacto DESC LIMIT 15');
        $res = $this->db->query($query);
        return $res->result();
    }
    
    
}

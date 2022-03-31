<?php

namespace App\Controllers\Portal\grados;
use App\Controllers\BaseController;

class tercero extends BaseController
{
    public function __construct()
    {
    
    } //Cierra __construct
    public function index()
    {
        return $this->Crear_vista('Portal/grados/tercero', $this->cargar_datos());
    }//cierra el index

    private function cargar_datos()//Declaración arreglo de 
    {
        $datos = array();
        //
        $datos['Nombre_pagina'] = 'tercero';

        return $datos;
    }//Final de cargar datos

    public function crear_vista($Nombre_vista ='', $Contenido = array())
    {
        $Contenido['menu'] = null;
        return view($Nombre_vista, $Contenido);
    }//Final de crear vista

} // final de la clase inicio
<?php

namespace App\Controllers\Portal\Juegos;
use App\Controllers\BaseController;

class Q1 extends BaseController
{
    public function __construct()
    {
    
    } //Cierra __construct
    public function index()
    {
        return $this->Crear_vista('Portal/Juegos/Q1', $this->cargar_datos());
    }//cierra el index

    private function cargar_datos()//Declaración arreglo de 
    {
        $datos = array();
        //
        $datos['Nombre_pagina'] = 'Q1';

        return $datos;
    }//Final de cargar datos

    public function crear_vista($Nombre_vista ='', $Contenido = array())
    {
        $Contenido['menu'] = null;
        return view($Nombre_vista, $Contenido);
    }//Final de crear vista

} // final de la clase inicio

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    //valida las funciones de ingreso al sitio

    //cuando ingresan al index
    public function index(){
        return view('Sitio.index');
    }


    //cuando ingresan a la pagína de contacto
    public function contacto(){
      return view('Sitio.contacto');

    }

    //cuando ingresan a la pagína de nosotros
    public function nosotros(){
        return view('Sitio.nosotros');
    }

    //cuando ingresan a la pagína de productos
    public function productos(){
        return view('Sitio.productos');
    }

    //cuando ingresan a la pagína de comprar enviara a whatssapp
    public function comprar($data){

    }

}

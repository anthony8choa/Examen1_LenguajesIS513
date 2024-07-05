<?php

namespace App\Http\Controllers;
use App\Models\contacto;

use Illuminate\Http\Request;

class contactosController extends Controller
{
    public function crearcontacto(){
        return view('agregarcontacto');
    }

    public function guardarcontacto(Request $request){
        $nvoContacto = new contacto();
        $nvoContacto->codigoEntrada = $request->codigo;
        $nvoContacto->nombre = $request->nombre;
        $nvoContacto->apellido = $request->apellido;
        $nvoContacto->telefono = $request->telefono;
        $nvoContacto->save();
        
    }
}

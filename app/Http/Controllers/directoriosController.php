<?php

namespace App\Http\Controllers;
use App\Models\directorio;

use Illuminate\Http\Request;

class directoriosController extends Controller
{
    public function creardirectorio(){
        return view('CrearEntrada');
    }

    public function guardar(Request $request){
        $nvoDirectorio = new directorio();
        $nvoDirectorio->codigoEntrada = $request->codigo;
        $nvoDirectorio->nombre = $request->nombre;
        $nvoDirectorio->apellido = $request->apellido;
        $nvoDirectorio->telefono = $request->telefono;
        $nvoDirectorio->correo = $request->correo;
        $nvoDirectorio->save();
        return redirect('/directorio/mostrar');
    }
     
    public function mostrardirectorio(){
        $directorios = directorio::all();
      
        return view('directorio', compact('directorios'));

    }

    public function eliminar($id){
        $directorioEliminar = directorio::find($id);
        return view('eliminar', compact('directorioEliminar'));
    }

    public function destroy($id){
        $directorioEliminar = directorio::find($id);
        $directorioEliminar->delete();
        return redirect('/directorio/mostrar');

    }

    public function buscar(Request $request, $id){
        $directorio = directorio::find();
        $directorio->correo = $request->correo;
    }
}

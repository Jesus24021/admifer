<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrarUserController extends Controller
{
    public function store(Request $request){
        $nombre=$request->nombre;
        $usuario=$request->usuario;
        $correo=$request->correo;
        $contrasennia=$request->contrasennia;

        DB::insert('INSERT INTO usuarios(id_rol,nombre_completo,nombre_usuario, correo_electronico, contrasennia, activo) VALUES(?,?,?,?,?,?)', [6,$nombre,$usuario,$correo,$contrasennia,0]);
        return redirect('login');
    }
}

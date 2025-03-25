<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showloginForm()
    {
        return view('login');
    }
    public function login(Request $request){
        echo "Funcionalidad para guardar los datos que provienen del formulario a atraves de POST";
        // obtener los valores del request
//        Realzar una consulta a la base de datos
//        Si existe me voy qal Cpanel y si no me manda un error
    }
    public function logout(){
        echo "Funcionalidad para destruir la sesion y regresar a la pagina principal";
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LoginController extends Controller
{
    public function index(Request $request){
        if(Usuario::select('perfil')->where('usuario','=',$request["usuario"])->where('password','=',$request["senha"])->count() > 0){
            $dados_usuario = Usuario::select('perfil','usuario')->where('usuario','=',$request["usuario"])->where('password','=',$request["senha"])->get();
            foreach($dados_usuario as $dados);
            $usuario = $dados->usuario;
            $perfil = $dados->perfil;

            $usuario = $request->session()->put('usuario',$dados->usuario );
            $perfil = $request->session()->put('perfil', $dados->perfil);

            return View::make('login',compact('perfil','usuario'));
        }
    }
}

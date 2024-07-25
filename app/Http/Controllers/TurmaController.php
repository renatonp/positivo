<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Turmas;
use Illuminate\Support\Facades\View;

class TurmaController extends Controller
{
    public function cadastro(){
        return View::make('cadastro_turma');
    }

    public function cadastrar(Request $request){
        Turmas::cadastrar($request);
    }

    public function listar(){
        $turmas = Turmas::listar();
		return View::make('listagem_turmas',compact('turmas'));
    }

    public function edicao($id_turma){
        $turma = Turmas::edicao($id_turma);
		return View::make('edicao_turma',compact('turma'));
    }

    public function editar(Request $request){
        Turmas::editar($request);
    }

    public function remover(Request $request){
        Turmas::remover($request);
    }
}

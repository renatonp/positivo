<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AlunoTurma;
use Illuminate\Support\Facades\View;

class AlunoTurmaController extends Controller
{
    public function cadastroAlunosTurma(){
        return View::make('assoc_aluno_turma');
    }

    public function associarAlunosTurma(Request $request){
        AlunoTurma::associarAlunosTurma($request);
    }

    public function listarAlunosTurma(){
        $alunoTurma = AlunoTurma::listarAlunosTurma();
		return View::make('listagem_aluno_turma',compact('alunoTurma'));
    }
}

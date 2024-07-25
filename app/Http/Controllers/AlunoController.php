<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alunos;
use App\Models\Usuario;
use Illuminate\Support\Facades\View;

class AlunoController extends Controller
{
    public function cadastro(){
        return View::make('cadastro_aluno');
    }

    public function cadastrar(Request $request){
        Alunos::cadastrar($request);
        $perfil = $request->session()->get('perfil');
        $usuario = $request->session()->get('usuario');
        return View::make('login',compact('perfil','usuario'));
    }

    public function listar(){
        $alunos = Alunos::listar();
		return View::make('listagem_alunos',compact('alunos'));
    }

    public function listarIdNomeAlunos(){
        $alunos = Alunos::listarIdNomeAlunos();
    }

	public function listarAlunosSerie(){
        $alunosSerie = Alunos::listarAlunosSerie();
		return View::make('listagem_aluno_serie',compact('alunosSerie'));
    }

	public function listarAlunosSegmento(){
        $alunosSegmento = Alunos::listarAlunosSegmento();
		return View::make('listagem_aluno_segmento',compact('alunosSegmento'));
    }

    public function listarAlunosIrmaos(){
        $alunosIrmaos = Alunos::listarAlunosIrmaos();
		return View::make('listagem_aluno_irmaos',compact('alunosIrmaos'));
    }

    public function edicao($id_aluno){
        $aluno = Alunos::edicao($id_aluno);
		return View::make('edicao_aluno',compact('aluno'));
    }

    public function editar(Request $request){
        Alunos::editar($request);
    }

    public function remover(Request $request){
        Alunos::remover($request);
    }
}

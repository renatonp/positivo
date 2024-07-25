<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\View;

class AlunoTurma extends Model
{
	public function Aluno(){
		return $this->belongsTo('App\Models\Aluno','id_aluno','id');
	}

	public function Turma(){
		return $this->belongsTo('App\Models\Turma','id_turma','id');
	}

	public function associarAlunosTurma($dados){
		$perfilUsuarioLogado = Usuario::select('perfil')->where('id','=',Auth::user()->id)->get();
		foreach($perfilUsuarioLogado as $perfil){
			if($perfil == 2 || $perfil == 3){
				$msg="Acesso negado! O seu perfil de usuário não pode acessar esta tela.";
				return View::make('welcome',compact('msg'));
			}
		}

		$alunosTurma = new AlunoTurma();
		$alunosTurma->id_aluno = $dados->id_aluno;
		$alunosTurma->id_turma = $dados->id_turma;
		$alunosTurma->save();
	}

	public function listarAlunosTurma(){
		$perfilUsuarioLogado = Usuario::select('perfil')->where('id','=',Auth::user()->id)->get();
		foreach($perfilUsuarioLogado as $perfil){
			if($perfil == 3){
				$msg="Acesso negado! O seu perfil de usuário não pode acessar esta tela.";
				return View::make('welcome',compact('msg'));
			}
		}
		
		$arrayAlunoTurma=array();
		$alunosTurma = new AlunoTurma();
		$distinctTurmas = $alunosTurma::select('id_turma')->distinct()->get();
		$i=0;
		foreach($distinctTurmas as $turma){
			$qtdAlunosTurma = $alunosTurma::select('id_aluno')->where('id_turma','=',$turma)->count();

			$arrayAlunoTurma[$i]["turma"] = $turma;
			$arrayAlunoTurma[$i]["qtdAlunos"] = $qtdAlunosTurma;
			$i++;
		}
		return $arrayAlunoTurma;
	}
}

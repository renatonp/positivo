<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\View;

class Turmas extends Model
{
	public static function cadastrar($dados){
		$perfilUsuarioLogado = Usuario::select('perfil')->where('id','=',Auth::user()->id)->get();
		foreach($perfilUsuarioLogado as $perfil){
			if($perfil == 3){
				$msg="Acesso negado! O seu perfil de usuário não pode acessar esta tela.";
				return View::make('welcome',compact('msg'));
			}
		}
		$turmas = new Turmas();
		$turmas->turno = $dados->turno;
		$turmas->nome_turma = $dados->nome_turma;
		$turmas->qtd_vagas = $dados->qtd_vagas;
		$turmas->ano_letivo = $dados->ano_letivo;
		$turmas->serie = $dados->serie;
		$turmas->save();
	}

    public function listar(){
		$perfilUsuarioLogado = Usuario::select('perfil')->where('id','=',Auth::user()->id)->get();
		foreach($perfilUsuarioLogado as $perfil){
			if($perfil == 3){
				$msg="Acesso negado! O seu perfil de usuário não pode acessar esta tela.";
				return View::make('welcome',compact('msg'));
			}
		}
		$turmas = Turmas::get();
        return $turmas;
    }

    public function edicao($id_turma){
		$perfilUsuarioLogado = Usuario::select('perfil')->where('id','=',Auth::user()->id)->get();
		foreach($perfilUsuarioLogado as $perfil){
			if($perfil == 3){
				$msg="Acesso negado! O seu perfil de usuário não pode acessar esta tela.";
				return View::make('welcome',compact('msg'));
			}
		}
		$dados = array();
		$turmas = Turmas::find($id_turma);
		$dados['turno'] = $turmas->turno;
		$dados['nome_turma'] = $turmas->nome_turma;
		$dados['qtd_vagas'] = $turmas->qtd_vagas;
		$dados['ano_letivo'] = $turmas->ano_letivo;
		$dados['serie'] = $turmas->serie;

        return $dados;
    }

    public function editar($dados){
		$perfilUsuarioLogado = Usuario::select('perfil')->where('id','=',Auth::user()->id)->get();
		foreach($perfilUsuarioLogado as $perfil){
			if($perfil == 3){
				$msg="Acesso negado! O seu perfil de usuário não pode acessar esta tela.";
				return View::make('welcome',compact('msg'));
			}
		}
		$turmas = Turmas::find($dados->id);
		$turmas->turno = $dados->turno;
		$turmas->nome_turma = $dados->nome_turma;
		$turmas->qtd_vagas = $dados->qtd_vagas;
		$turmas->ano_letivo = $dados->ano_letivo;
		$turmas->serie = $dados->serie;
        $turmas->save();
    }

    public function remover($dados){
		$perfilUsuarioLogado = Usuario::select('perfil')->where('id','=',Auth::user()->id)->get();
		foreach($perfilUsuarioLogado as $perfil){
			if($perfil == 3){
				$msg="Acesso negado! O seu perfil de usuário não pode acessar esta tela.";
				return View::make('welcome',compact('msg'));
			}
		}
		$turmas = Turmas::find($dados['id']);
		$turmas->delete();
    }
}

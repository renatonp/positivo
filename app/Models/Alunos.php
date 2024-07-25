<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\View;

class Alunos extends Model
{
	public static function cadastrar($dados){
		$alunos = new Alunos();
		print($dados->tipo_endereco);exit;
		$alunos->tipo_endereco = $dados->tipo_endereco;
		$alunos->rua = $dados->rua;
		$alunos->cep = $dados->cep;
		$alunos->numero = $dados->numero;
		$alunos->complemento = $dados->complemento;
		$alunos->serie = $dados->serie;
		$alunos->segmento = $dados->segmento;
		$alunos->matricula = $dados->matricula;
		$alunos->nome_completo = $dados->nome_completo;
        $alunos->data_nascimento = $dados->data_nascimento;
        $alunos->nome_pai = $dados->nome_pai;
        $alunos->nome_mae = $dados->nome_mae;
		$alunos->save();
	}

    public function listar(){
		$alunos = Alunos::get();
        return $alunos;
    }

    public function listarIdNomeAlunos(){
        $alunos_aluno_turma = AlunoTurma::select('id_aluno')->get();
        
		$alunos = Alunos::select('id')->select('nome')->orderBy('nome')->whereNotIn('id',$alunos_aluno_turma)->get();
        return $alunos;
    }

    public function edicao($id_aluno){
		$dados = array();
		$alunos = Alunos::find($id_aluno);
		$dados['tipo_endereco'] = $alunos->tipo_endereco;
		$dados['endereco'] = $alunos->endereco;
		$dados['serie'] = $alunos->serie;
		$dados['segmento'] = $alunos->segmento;
		$dados['matricula'] = $alunos->matricula;
		$dados['nome_completo'] = $alunos->nome_completo;
        $dados['data_nascimento'] = $alunos->data_nascimento;
        $dados['nome_pai'] = $alunos->nome_pai;
        $dados['nome_mae'] = $alunos->nome_mae;

        return $dados;
    }

    public function editar($dados){
		$alunos = Alunos::find($dados->id);
		$alunos->tipo_endereco = $dados->tipo_endereco;
		$alunos->endereco = $dados->tipo_endereco;
		$alunos->serie = $dados->serie;
		$alunos->segmento = $dados->segmento;
		$alunos->matricula = $dados->matricula;
		$alunos->nome_completo = $dados->nome_completo;
        $alunos->data_nascimento = $dados->data_nascimento;
        $alunos->nome_pai = $dados->nome_pai;
        $alunos->nome_mae = $dados->nome_mae;

        $alunos->save();
    }

    public function remover($dados){
		$alunos = Alunos::find($dados['id']);
		$alunos->delete();
    }

	public function listarAlunosSerie(){
		$perfilUsuarioLogado = Usuario::select('perfil')->where('id','=',Auth::user()->id)->get();
		foreach($perfilUsuarioLogado as $perfil){
			if($perfil == 3){
				$msg="Acesso negado! O seu perfil de usuário não pode acessar esta tela.";
				return View::make('welcome',compact('msg'));
			}
		}
		$arrayAlunoSerie=array();
		$alunos = new Alunos();
		$distinctSerie = $alunos::select('serie')->distinct()->get();
		$i=0;
		foreach($distinctSerie as $serie){
			$qtdAlunosSerie = $alunos::select('id_aluno')->where('serie','=',$serie)->count();

			$arrayAlunoSerie[$i]["serie"] = $serie;
			$arrayAlunoSerie[$i]["qtdAlunos"] = $qtdAlunosSerie;
			$i++;
		}
		return $arrayAlunoSerie;
	}

	public function listarAlunosSegmento(){
		$perfilUsuarioLogado = Usuario::select('perfil')->where('id','=',Auth::user()->id)->get();
		foreach($perfilUsuarioLogado as $perfil){
			if($perfil == 3){
				$msg="Acesso negado! O seu perfil de usuário não pode acessar esta tela.";
				return View::make('welcome',compact('msg'));
			}
		}
		$arrayAlunoSegmento=array();
		$alunos = new Alunos();
		$distinctSegmento = $alunos::select('segmento')->distinct()->get();
		$i=0;
		foreach($distinctSegmento as $segmento){
			$qtdAlunosSegmento = $alunos::select('id_aluno')->where('segmento','=',$segmento)->count();

			$arrayAlunoSegmento[$i]["segmento"] = $segmento;
			$arrayAlunoSegmento[$i]["qtdAlunos"] = $qtdAlunosSegmento;
			$i++;
		}
		return $arrayAlunoSegmento;
	}

	public function listarAlunosIrmaos(){
		$perfilUsuarioLogado = Usuario::select('perfil')->where('id','=',Auth::user()->id)->get();
		foreach($perfilUsuarioLogado as $perfil){
			if($perfil == 3){
				$msg="Acesso negado! O seu perfil de usuário não pode acessar esta tela.";
				return View::make('welcome',compact('msg'));
			}
		}
		$arrayAlunoIrmaos=array();
		$array_pais = array();
		$alunos = new Alunos();

		$distinctMae = $alunos::select('nome_mae')->distinct()->get();
		$i=0;
		foreach($distinctMae as $mae){
			$qtdAlunosMae = $alunos::select('id_aluno')->where('nome_mae','=',$mae)->count();
			if($qtdAlunosMae > 1){
				$alunos_mae = $alunos::select('nome_completo')->where('nome_mae','=',$mae)->get();
				foreach($alunos_mae as $am){
					$arrayAlunoIrmaos[$i]["pai_mae"] = $mae;
					$arrayAlunoIrmaos[$i]["aluno"] = $am;
					$i++;		
				}
			}
		}

		$distinctPai = $alunos::select('nome_pai')->distinct()->get();
		foreach($distinctPai as $pai){
			$qtdAlunosPai = $alunos::select('id_aluno')->where('nome_pai','=',$pai)->count();
			if($qtdAlunosPai > 1){
				$alunos_pai = $alunos::select('nome_completo')->where('nome_pai','=',$pai)->get();
				foreach($alunos_pai as $ap){
					$arrayAlunoIrmaos[$i]["pai_mae"] = $pai;
					$arrayAlunoIrmaos[$i]["aluno"] = $ap;
					$i++;
				}
			}
		}
		array_push($array_pais,$arrayAlunoIrmaos);
		return $array_pais;
	}
}

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\AlunoTurmaController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('main');
});

Route::post('/welcome', [LoginController::class, 'index'])->name('welcome');


/* ROTAS ALUNO CONTROLLER*/
Route::get('/cadastroAluno', [AlunoController::class, 'cadastro'])->name('cadastroAluno');
Route::post('/cadastrarAluno', [AlunoController::class, 'cadastrar'])->name('cadastrarAluno');
Route::get('/edicaoAluno', [AlunoController::class, 'edicao'])->name('edicaoAluno');
Route::post('/editarAluno', [AlunoController::class, 'editar'])->name('editarAluno');
Route::post('/removerAluno', [AlunoController::class, 'remover'])->name('removerAluno');
Route::get('/listarIdNomeAlunos', [AlunoController::class, 'listarIdNomeAlunos'])->name('listarIdNomeAlunos');
Route::get('/listarAlunosSerie', [AlunoController::class, 'listarAlunosSerie'])->name('listarAlunosSerie');
Route::get('/listarAlunosSegmento', [AlunoController::class, 'listarAlunosSegmento'])->name('listarAlunosSegmento');
Route::get('/listarAlunosIrmaos', [AlunoController::class, 'listarAlunosIrmaos'])->name('listarAlunosIrmaos');

/* ROTAS ALUNOS TURMA CONTROLLER*/
Route::get('/cadastroAlunosTurma', [AlunoTurmaController::class, 'cadastroAlunosTurma'])->name('cadastroAlunosTurma');
Route::post('/associarAlunosTurma', [AlunoTurmaController::class, 'associarAlunosTurma'])->name('associarAlunosTurma');
Route::get('/listarAlunosTurma', [AlunoTurmaController::class, 'listarAlunosTurma'])->name('listarAlunosTurma');


/* ROTAS TURMA CONTROLLER*/
Route::get('/cadastroTurma', [TurmaController::class, 'cadastro'])->name('cadastroTurma');
Route::post('/cadastrarTurma', [TurmaController::class, 'cadastrar'])->name('cadastrarTurma');
Route::get('/edicaoTurma', [TurmaController::class, 'edicao'])->name('edicaoTurma');
Route::post('/editarTurma', [TurmaController::class, 'editar'])->name('editarTurma');
Route::post('/removerTurma', [TurmaController::class, 'remover'])->name('removerTurma');
Route::get('/listarTurma', [TurmaController::class, 'listar'])->name('listarTurma');
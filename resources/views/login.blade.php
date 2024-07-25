<html>
<head>
<title>POSITIVO</title>
<script type="text/javascript" src="<?php echo asset('js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('js/bootstrap.min.js')?>"></script>
<link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">

<script language="javascript">
$(document).ready(function(){
    $('#btn_cadastro_aluno').click(function(){
        window.location.replace("{{ Route('cadastroAluno') }}");
    });

    $('#btn_cadastro_turma').click(function(){
        window.location.replace("{{ Route('cadastroTurma') }}");
    });

    $('#btn_associar_aluno_turma').click(function(){
        window.location.replace("{{ Route('associarAlunosTurma') }}");
    });

});
</script>
</head>

<body>
    <form id="formulario">
    @csrf        
    <div class="container col-lg-6" align="center">
        <div class="row">
            <div class="col-lg-3" align="center"><button type="button" id="btn_cadastro_aluno" class="btn btn-primary">Cadastrar Aluno</button></div>
            @if($perfil == 1 || $perfil == 2)
                <div class="col-lg-3" align="center"><button type="button" id="btn_cadastro_turma" class="btn btn-success">Cadastrar Turma</button></div>
            @endif
        </div><br /><br />
        <div class="row">
        @if($perfil == 1)
        <div class="col-lg-9 align="center"><button type="button" id="btn_associar_aluno_turma" class="btn btn-danger">Associar Aluno a Turma</button></div>
        @endif
        </div><br /><br />
        @if($perfil == 1 || $perfil == 2)
        <div class="row">
            <div class="col-lg-3" align="center"><button type="button" id="btn_rel_aluno_serie" class="btn btn-secondary">Alunos por Série</button></div>
            <div class="col-lg-3" align="center"><button type="button" id="btn_rel_aluno_turma" class="btn btn-info">Alunos por Turma</button></div>
            <div class="col-lg-3" align="center"><button type="button" id="btn_rel_irmaos" class="btn btn-dark">Relatório de Irmãos</button></div>
        </div>
    </div>
    @endif
    </form>
</body>
</html>
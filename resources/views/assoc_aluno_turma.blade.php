<html>
<head>
<title>POSITIVO</title>
<script type="text/javascript" src="<?php echo asset('js/jquery.min.js')?>"></script>

<script language="javascript">
    $(document).ready(function(){

        $.get("{{ Route('listarIdNomeAlunos') }}",{  '_token':'{{ csrf_token() }}' },function(data){
                $('#alunos').append("<option value = '"+data.id+"'>"+data.nome+"</option>");
        });

        $.get("{{ Route('listarTurma') }}",{  '_token':'{{ csrf_token() }}' },function(data){
            $('#turmas').append("<option value = '"+data.id+"'>"+data.nome_turma+"</option>");
        });

        $.post("{{ Route('associarAlunoTurma') }}",{  '_token':'{{ csrf_token() }}', 'id_aluno':$('#alunos').val(), 'id_turma':$('#turmas').val() },function(data){
            $('#msgRetornoCadastro').html('Associação realizada com sucesso.');
            $('#msgRetornoCadastro').attr('display','block');
            $('#msgRetornoCadastro').fadeIn('slow');
            setTimeout("$('#msgRetornoCadastro').fadeOut('slow')",3750);
            setTimeout("$('#msgRetornoCadastro').attr('display','none')",5000);
        });
    });
</script>
</head>

<body>
<form>
	<div class="container">
		<div class="row alert alert-primary" role="alert"><div class="col-lg-12" align="center">Associação de Aluno e Turma</div></div>
		<div class="row">
        <div class="col-lg-3"><label>Alunos</label></div><div class="col-lg-3">
            <select id="alunos" multiple>
            </select>
        </div>

        <div class="col-lg-3"><label>Turmas</label></div>
        <div class="col-lg-3">
            <select id="turmas">
                <option value="">Selecione uma turma abaixo</option>
            </select>
        </div>
    </div>
    <div align="center" class="alert alert-success col-lg-12" role="alert" id="msgRetornoCadastro" style="display: none"></div>
    <div class="col-lg-12" align="center"><input type="button" id="btn_associar" value="Associar Alunos a Turma"></div>


</form>
</body>
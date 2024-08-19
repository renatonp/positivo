<html>
<head>
<title>POSITIVO</title>
<script type="text/javascript" src="<?php echo asset('js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('js/bootstrap.min.js')?>"></script>
<link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">

<script language="javascript">
$(document).ready(function(){
    $('#serie').change(function(){
        if($('#serie').val() == 1 || $('#serie').val() == 2 || $('#serie').val() == 3){
            $('#segmento').val('Infantil');
        }
        else if($('#serie').val() == 4 || $('#serie').val() == 5 || $('#serie').val() == 6 || $('#serie').val() == 7 || $('#serie').val() == 8){
            $('#segmento').val('Anos Iniciais');
        }
        else if($('#serie').val() == 9 || $('#serie').val() == 10 || $('#serie').val() == 11 || $('#serie').val() == 12){
            $('#segmento').val('Anos Finais');
        }
        else{
            $('#segmento').val('Ensino Médio');
        }
    });
});
</script>
</head>

<body>
<form action="{{ Route('cadastrarTurma') }}" method="post">
	<div class="container">
		<div class="row alert alert-primary" role="alert"><div class="col-lg-12" align="center">Cadastro de Turma</div></div>
        <p><div class="col-lg-12" align="right"><input type="button" class="btn btn-success" value="Listagem de Turmas" onclick="listagemTurma()"></div><br>
		<div class="row">
			<div class="col-lg-3"><label>Nome da Turma</label></div><div class="col-lg-3"><input type="text" id="nome_turma" placeholder="Nome da Turma"></div>
		</div>
		<div class="row">
        <div class="col-lg-3"><label>Turno</label></div><div class="col-lg-3">
            <select id="turno" required="required">
                    <option value="">Selecione o Turno</option>
                    <option value="manha">Manhã</option>
                    <option value="tarde">Tarde</option>
                    <option value="integral">Integral</option>
            </select>
        </div>
        <div class="col-lg-3"><label>Vagas</label></div><div class="col-lg-3"><input type="text" id="qtd_vagas" placeholder="Quantidade de Vagas" required="required"></div>
		</div>

		<div class="row">
			<div class="col-lg-3"><label>Série</label></div><div class="col-lg-3">
            <select id="serie" required="required">
                    <option value="">Escolha a Série abaixo</option>
                    <option value="1">G1</option>
                    <option value="2">G2</option>
                    <option value="3">G3</option>
                    <option value="4">1º ano</option>
                    <option value="5">2º ano</option>
                    <option value="6">3º ano</option>
                    <option value="7">4º ano</option>
                    <option value="8">5º ano</option>
                    <option value="9">6º ano</option>
                    <option value="10">7º ano</option>
                    <option value="11">8º ano</option>
                    <option value="12">9º ano</option>
                    <option value="13">1º ano do Ensino Médio</option>
                    <option value="14">2º ano do Ensino Médio</option>
                    <option value="15">3º ano do Ensino Médio</option>
                </select>
            </div>
            <div class="col-lg-3"><label>Ano Letivo</label></div><div class="col-lg-3"><input type="text" id="ano" placeholder="Ano Letivo" required="required"></div>
		</div>

        <div class="row">
            <div class="col-lg-3"><label>Segmento</label></div>
                <div class="col-lg-3"><input type="text" id="segmento" readonly="readonly"></div>
        </div><br />
		<div class="col-lg-12" align="center">
			<input type="submit" class="btn btn-primary" value="Cadastrar Turma">
		</div>
		<br>
		<div align="center" class="alert alert-success col-lg-12" role="alert" id="msgRetorno" style="display: none"></div>
	</div>
</form>
</body>
</html>
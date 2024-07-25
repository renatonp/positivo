<html>
<head>
<title>POSITIVO</title>
<script type="text/javascript" src="<?php echo asset('js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('js/bootstrap.min.js')?>"></script>
<link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">

<script language="javascript">
$(document).ready(function(){
    $('#serie').change(function(){
        if($('#serie').val() == 'g1' || $('#serie').val() == 'g2' || $('#serie').val() == 'g3'){
            $('#segmento').val('Infantil');
        }
        else if($('#serie').val() == 'ano1' || $('#serie').val() == 'ano2' || $('#serie').val() == 'ano3' || $('#serie').val() == 'ano4' || $('#serie').val() == 'ano5'){
            $('#segmento').val('Anos Iniciais');
        }
        else if($('#serie').val() == 'ano6' || $('#serie').val() == 'ano7' || $('#serie').val() == 'ano8' || $('#serie').val() == 'ano9'){
            $('#segmento').val('Anos finais');
        }
        else{
            $('#segmento').val('Ensino Médio');
        }
    });
});
</script>
</head>

<body>
<form>
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
                    <option value="g1">G1</option>
                    <option value="g2">G2</option>
                    <option value="g3">G3</option>
                    <option value="ano1">1º ano</option>
                    <option value="ano2">2º ano</option>
                    <option value="ano3">3º ano</option>
                    <option value="ano4">4º ano</option>
                    <option value="ano5">5º ano</option>
                    <option value="ano6">6º ano</option>
                    <option value="ano7">7º ano</option>
                    <option value="ano8">8º ano</option>
                    <option value="ano9">9º ano</option>
                    <option value="ano1EM">1º ano do Ensino Médio</option>
                    <option value="ano2EM">2º ano do Ensino Médio</option>
                    <option value="ano3EM">3º ano do Ensino Médio</option>
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
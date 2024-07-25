<html>
<head>
<title>POSITIVO</title>
<script type="text/javascript" src="<?php echo asset('js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('js/bootstrap.min.js')?>"></script>
<link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">

<script language="javascript">
    $(document).ready(function(){
        novamatricula = '';
        for(var i=0; i < 5; i++){
            novamatricula += Math.floor(Math.random()*10);
        }

        $('#matricula').val(novamatricula);

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
<form action="{{ Route('cadastrarAluno') }}" method="post">
    @csrf
	<div class="container">
		<div class="row alert alert-primary" role="alert"><div class="col-lg-12" align="center">Cadastro de Alunos</div></div>
        <p><div class="col-lg-12" align="right"><input type="button" class="btn btn-success" value="Listagem de Alunos" onclick="listagemAluno()"></div><br>
		<div class="row">
			<div class="col-lg-3"><label>Matrícula</label></div><div class="col-lg-3"><input type="text" name="matricula" id="matricula"  readonly="readonly"></div>
		</div>
		<div class="row">
        <div class="col-lg-3"><label>Nome Completo</label></div><div class="col-lg-3"><input type="text" name="nome_completo" id="nome_completo" placeholder="Nome completo" required="required"></div>
        <div class="col-lg-3"><label>Data de Nascimento</label></div><div class="col-lg-3"><input type="text" name="data_nascimento" id="data_nascimento" placeholder="Data de Nascimento" required="required"></div>
		</div>

		<div class="row">
			<div class="col-lg-3"><label>Tipo de Endereço</label></div>
            <div class="col-lg-3">
                <select name="tipo_endereco" id="tipo_endereco" required="required">
                    <option value="">Tipo de Endereço</option>
                    <option value="cobranca">Cobrança</option>
                    <option value="residencial">Residencial</option>
                    <option value="correspondencia">Correspondência</option>
                </select>
            </div>
		</div>

		<div class="row">
        <div class="col-lg-3"><label>Rua</label></div><div class="col-lg-3"><input type="text" name="rua" id="rua" placeholder="Rua" required="required"></div>
        <div class="col-lg-3"><label>Cep</label></div><div class="col-lg-3"><input type="text" name="cep" id="cep" placeholder="Cep" required="required"></div>
		</div>
        
		<div class="row">
        <div class="col-lg-3"><label>Número</label></div><div class="col-lg-3"><input type="text" id="numero" name="numero" placeholder="Número" required="required"></div>
        <div class="col-lg-3"><label>Complemento</label></div><div class="col-lg-3"><input type="text" name="complemento" id="complemento" placeholder="Complemento" required="required"></div>
		</div>

		<div class="row">
			<div class="col-lg-3"><label>Série</label></div><div class="col-lg-3">
                <select id="serie" name="serie" required="required">
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
			<div class="col-lg-3"><label>Segmento</label></div><div class="col-lg-3"><input type="text" name="segmento" id="segmento" readonly="readonly"></div>
		</div>


		<div class="row">
			<div class="col-lg-3"><label>Nome da mãe</label></div><div class="col-lg-3"><input type="text" name="nome_mae" id="nome_mae" placeholder="Nome da Mãe" required="required"></div>
			<div class="col-lg-3"><label>Nome do pai</label></div><div class="col-lg-3"><input type="text" name="nome_pai" id="nome_pai" placeholder="Nome do Pai" required="required"></div>
		</div>
		<br>
		<div class="col-lg-12" align="center">
			<input type="submit" class="btn btn-primary" value="Cadastrar Aluno">
		</div>
		<br>
		<div align="center" class="alert alert-success col-lg-12" role="alert" id="msgRetorno" style="display: none"></div>
	</div>
</form>
</body>
</html>
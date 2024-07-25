<html>
<head>
<title>POSITIVO</title>
<script type="text/javascript" src="<?php echo asset('js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('js/bootstrap.min.js')?>"></script>
<link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">

<script language="javascript">
    $(document).ready(function(){
        novamatricula = '';
        for(var i=0; i < 10; i++){
            novamatricula += Math.floor(Math.random()*10);
        }
        $('#matricula').val(novamatricula);
    });

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
</script>
</head>

<body>
<form>
	<div class="container">
		<div class="row alert alert-primary" role="alert"><div class="col-lg-12" align="center">Cadastro de Alunos</div></div>
        <p><div class="col-lg-12" align="right"><input type="button" class="btn btn-success" value="Listagem de Alunos" onclick="listagemAluno()"></div><br>
		<div class="row">
			<div class="col-lg-6"><label>Matrícula</label></div><div class="col-lg-6"><input type="text" id="matricula"  value="<?= $aluno->matricula ?>" readonly="readonly"></div>
		</div>
		<div class="row">
        <div class="col-lg-3"><label>Nome Completo</label></div><div class="col-lg-3"><input type="text" id="nome" value="<?= $aluno->nome_completo ?>" required="required"></div>
        <div class="col-lg-3"><label>Data de Nascimento</label></div><div class="col-lg-3"><input type="text" id="data_nascimento" value="<?= $aluno->data_nascimento ?>" required="required"></div>
		</div>

		<div class="row">
			<div class="col-lg-6"><label>Tipo de Endereço</label></div><div class="col-lg-6">
                <select id="tipo_endereco" required="required">
                    <option value="">Tipo de Endereço</option>
                    <option value="cobranca" <?php if($aluno->tipo_endereco == 'cobranca'){ echo 'selected'; } ?>>Cobrança</option>
                    <option value="residencial" <?php if($aluno->tipo_endereco == 'residencial'){ echo 'selected'; } ?>>Residencial</option>
                    <option value="correspondencia" <?php if($aluno->tipo_endereco == 'correspondencia'){ echo 'selected'; } ?>>Correspondência</option>
                </select>
            </div>
		</div>

		<div class="row">
        <div class="col-lg-3"><label>Rua</label></div><div class="col-lg-3"><input type="text" id="rua"  value="<?= $aluno->rua ?>" required="required"></div>
        <div class="col-lg-3"><label>Cep</label></div><div class="col-lg-3"><input type="text" id="cep"  value="<?= $aluno->cep ?>" required="required"></div>
		</div>
        
		<div class="row">
        <div class="col-lg-3"><label>Número</label></div><div class="col-lg-3"><input type="text" id="numero" value="<?= $aluno->numero ?>" required="required"></div>
        <div class="col-lg-3"><label>Complemento</label></div><div class="col-lg-3"><input type="text" id="complemento" value="<?= $aluno->complemento ?>" required="required"></div>
		</div>

		<div class="row">
			<div class="col-lg-3"><label>Série</label></div><div class="col-lg-3">
                <select id="serie" required="required">
                    <option value="">Escolha a Série abaixo</option>
                    <option value="g1"<?php if($aluno->serie == 'g1'){ echo 'selected'; } ?>>G1</option>
                    <option value="g2"<?php if($aluno->serie == 'g2'){ echo 'selected'; } ?>>G2</option>
                    <option value="g3"<?php if($aluno->serie == 'g3'){ echo 'selected'; } ?>>G3</option>
                    <option value="ano1"<?php if($aluno->serie == 'ano1'){ echo 'selected'; } ?>>1º ano</option>
                    <option value="ano2"<?php if($aluno->serie == 'ano2'){ echo 'selected'; } ?>>2º ano</option>
                    <option value="ano3"<?php if($aluno->serie == 'ano3'){ echo 'selected'; } ?>>3º ano</option>
                    <option value="ano4"<?php if($aluno->serie == 'ano4'){ echo 'selected'; } ?>>4º ano</option>
                    <option value="ano5"<?php if($aluno->serie == 'ano5'){ echo 'selected'; } ?>>5º ano</option>
                    <option value="ano6"<?php if($aluno->serie == 'ano6'){ echo 'selected'; } ?>>6º ano</option>
                    <option value="ano7"<?php if($aluno->serie == 'ano7'){ echo 'selected'; } ?>>7º ano</option>
                    <option value="ano8"<?php if($aluno->serie == 'ano8'){ echo 'selected'; } ?>>8º ano</option>
                    <option value="ano9"<?php if($aluno->serie == 'ano9'){ echo 'selected'; } ?>>9º ano</option>
                    <option value="ano1EM"<?php if($aluno->serie == 'ano1EM'){ echo 'selected'; } ?>>1º ano do Ensino Médio</option>
                    <option value="ano2EM"<?php if($aluno->serie == 'ano2EM'){ echo 'selected'; } ?>>2º ano do Ensino Médio</option>
                    <option value="ano3EM"<?php if($aluno->serie == 'ano3EM'){ echo 'selected'; } ?>>3º ano do Ensino Médio</option>
                </select>
            </div>
			<div class="col-lg-3"><label>Segmento</label></div><div class="col-lg-3"><select id="segmento" value="<?= $aluno->segmento ?>" readonly="readonly"></select></div>
		</div>


		<div class="row">
			<div class="col-lg-3"><label>Nome da mãe</label></div><div class="col-lg-3"><input type="text" id="nome_mae" required="required" value="<?= $aluno->nome_mae ?>"></div>
			<div class="col-lg-3"><label>Nome do pai</label></div><div class="col-lg-3"><input type="text" id="nome_pai" required="required" value="<?= $aluno->nome_pai ?>"></div>
		</div>
		<br>
		<div class="col-lg-12" align="center">
			<input type="submit" class="btn btn-primary" value="Editar Usuário">
		</div>
		<br>
		<div align="center" class="alert alert-success col-lg-12" role="alert" id="msgRetorno" style="display: none"></div>
	</div>
</form>
</body>
</html>
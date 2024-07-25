<html>
<head>
<title>POSITIVO</title>
<script type="text/javascript" src="<?php echo asset('js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('js/bootstrap.min.js')?>"></script>
<link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">

<script language="javascript">
    $(document).ready(function(){
    });
</script>
</head>

<body>
<form>
	<div class="container">
		<div class="row alert alert-primary" role="alert"><div class="col-lg-12" align="center">Cadastro de Turma</div></div>
        <p><div class="col-lg-12" align="right"><input type="button" class="btn btn-success" value="Listagem de Turmas" onclick="listagemTurma()"></div><br>
		<div class="row">
        <div class="col-lg-3"><label>Nome da Turma</label></div><div class="col-lg-3"><input type="text" name="nome_turma" id="nome_turma" value="<?= $turma->nome_turma ?>" required="required"></div>
        <div class="col-lg-3"><label>Turno</label></div><div class="col-lg-3">
            <select name="turno" id="turno" required="required">
                <option value="">Selecione o Turno desejado</option>
                <option value="manha"<?php if($turma->turno == 'manha'){ echo 'selected'; } ?>>Manhã</option>
                <option value="tarde"<?php if($turma->turno == 'tarde'){ echo 'selected'; } ?>>Tarde</option>
                <option value="integral"<?php if($turma->turno == 'integral'){ echo 'selected'; } ?>>Integral</option>
            </select>
        </div>

		<div class="row">
        <div class="col-lg-3"><label>Quantidade de Vagas</label></div><div class="col-lg-3"><input type="text" name="qtd_vagas" id="qtd_vagas" value="<?= $turma->qtd_vagas ?>" required="required"></div>
        <div class="col-lg-3"><label>Ano letivo</label></div><div class="col-lg-3"><input type="text" name="ano_letivo" id="ano_letivo" value="<?= $turma->ano ?>" required="required"></div>
		</div>
        
		<div class="row">
			<div class="col-lg-3"><label>Série</label></div><div class="col-lg-3">
                <select name="serie" id="serie" required="required">
                    <option value="">Escolha a Série abaixo</option>
                    <option value="1"<?php if($turma->serie == '1'){ echo 'selected'; } ?>>G1</option>
                    <option value="2"<?php if($turma->serie == '2'){ echo 'selected'; } ?>>G2</option>
                    <option value="3"<?php if($turma->serie == '3'){ echo 'selected'; } ?>>G3</option>
                    <option value="4"<?php if($turma->serie == '4'){ echo 'selected'; } ?>>1º ano</option>
                    <option value="5"<?php if($turma->serie == '5'){ echo 'selected'; } ?>>2º ano</option>
                    <option value="6"<?php if($turma->serie == '6'){ echo 'selected'; } ?>>3º ano</option>
                    <option value="7"<?php if($turma->serie == '7'){ echo 'selected'; } ?>>4º ano</option>
                    <option value="8"<?php if($turma->serie == '8'){ echo 'selected'; } ?>>5º ano</option>
                    <option value="9"<?php if($turma->serie == '9'){ echo 'selected'; } ?>>6º ano</option>
                    <option value="10"<?php if($turma->serie == '10'){ echo 'selected'; } ?>>7º ano</option>
                    <option value="11"<?php if($turma->serie == '11'){ echo 'selected'; } ?>>8º ano</option>
                    <option value="12"<?php if($turma->serie == '12'){ echo 'selected'; } ?>>9º ano</option>
                    <option value="13"<?php if($turma->serie == '13'){ echo 'selected'; } ?>>1º ano do Ensino Médio</option>
                    <option value="14"<?php if($turma->serie == '14'){ echo 'selected'; } ?>>2º ano do Ensino Médio</option>
                    <option value="15"<?php if($turma->serie == '15'){ echo 'selected'; } ?>>3º ano do Ensino Médio</option>
                </select>
            </div>
			<div class="col-lg-3"><label>Segmento</label></div><div class="col-lg-3"><input type="text" name="segmento" id="segmento" readonly="readonly"></div>
		</div>
		<br>
    		<div class="col-lg-12" align="center">
			<input type="submit" class="btn btn-primary" value="Editar Turma">
		</div>
		<br>
		<div align="center" class="alert alert-success col-lg-12" role="alert" id="msgRetorno" style="display: none"></div>
	</div>
</form>
</body>
</html>
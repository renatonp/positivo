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
        <div class="col-lg-3"><label>Nome da Turma</label></div><div class="col-lg-3"><input type="text" id="nome_turma" value="<?= $turma->nome_turma ?>" required="required"></div>
        <div class="col-lg-3"><label>Turno</label></div><div class="col-lg-3">
            <select id="turno" required="required">
                <option value="">Selecione o Turno desejado</option>
                <option value="manha"<?php if($turma->turno == 'manha'){ echo 'selected'; } ?>>Manhã</option>
                <option value="tarde"<?php if($turma->turno == 'tarde'){ echo 'selected'; } ?>>Tarde</option>
                <option value="integral"<?php if($turma->turno == 'integral'){ echo 'selected'; } ?>>Integral</option>
            </select>
        </div>

		<div class="row">
        <div class="col-lg-3"><label>Quantidade de Vagas</label></div><div class="col-lg-3"><input type="text" id="qtd_vagas" value="<?= $turma->qtd_vagas ?>" required="required"></div>
        <div class="col-lg-3"><label>Ano letivo</label></div><div class="col-lg-3"><input type="text" id="ano" value="<?= $turma->ano ?>" required="required"></div>
		</div>
        
		<div class="row">
			<div class="col-lg-3"><label>Série</label></div><div class="col-lg-3">
                <select id="serie" required="required">
                    <option value="">Escolha a Série abaixo</option>
                    <option value="g1"<?php if($turma->serie == 'g1'){ echo 'selected'; } ?>>G1</option>
                    <option value="g2"<?php if($turma->serie == 'g2'){ echo 'selected'; } ?>>G2</option>
                    <option value="g3"<?php if($turma->serie == 'g3'){ echo 'selected'; } ?>>G3</option>
                    <option value="ano1"<?php if($turma->serie == 'ano1'){ echo 'selected'; } ?>>1º ano</option>
                    <option value="ano2"<?php if($turma->serie == 'ano2'){ echo 'selected'; } ?>>2º ano</option>
                    <option value="ano3"<?php if($turma->serie == 'ano3'){ echo 'selected'; } ?>>3º ano</option>
                    <option value="ano4"<?php if($turma->serie == 'ano4'){ echo 'selected'; } ?>>4º ano</option>
                    <option value="ano5"<?php if($turma->serie == 'ano5'){ echo 'selected'; } ?>>5º ano</option>
                    <option value="ano6"<?php if($turma->serie == 'ano6'){ echo 'selected'; } ?>>6º ano</option>
                    <option value="ano7"<?php if($turma->serie == 'ano7'){ echo 'selected'; } ?>>7º ano</option>
                    <option value="ano8"<?php if($turma->serie == 'ano8'){ echo 'selected'; } ?>>8º ano</option>
                    <option value="ano9"<?php if($turma->serie == 'ano9'){ echo 'selected'; } ?>>9º ano</option>
                    <option value="ano1EM"<?php if($turma->serie == 'ano1EM'){ echo 'selected'; } ?>>1º ano do Ensino Médio</option>
                    <option value="ano2EM"<?php if($turma->serie == 'ano2EM'){ echo 'selected'; } ?>>2º ano do Ensino Médio</option>
                    <option value="ano3EM"<?php if($turma->serie == 'ano3EM'){ echo 'selected'; } ?>>3º ano do Ensino Médio</option>
                </select>
            </div>
			<div class="col-lg-3"><label>Segmento</label></div><div class="col-lg-3"><select id="segmento" readonly="readonly"></select></div>
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
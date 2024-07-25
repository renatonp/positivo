<html>
<head>
<title>POSITIVO</title>
<script type="text/javascript" src="<?php echo asset('js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('js/datatables.min.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('js/bootstrap.min.js')?>"></script>
<link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">

<script language="javascript">
function removerAluno(id){

}
$(document).ready(function(){
	 $('#listagem_usuario').DataTable();
});
</script>
</head>

<body>
    <div class="container">
        <div class="row alert alert-primary" role="alert"><div class="col-lg-12" align="center">Listagem de Alunos</div></div>
        <p><div class="col-lg-12" align="right"><input type="button" class="btn btn-success" value="Cadastro de Aluno" onclick="cadastroAluno()"></p>
        <table id="listagem_usuario" class="table table-bordered table-striped">
        	<thead>
    			<tr>
                	<th> Matrícula </th>
                	<th> Nome </th>
                	<th>Ações</th>
            	</tr>
            </thead>

            <tbody>
            	@foreach($alunos as $aluno)
            		<tr id="{{ $aluno->id }}">
            			<td>{{ $aluno->matricula }}</td>
            			<td>{{ $aluno->nome }}</td>
            			<td>
                            <input type="button" class="btn btn-success" value="Editar" onclick="edicaoAluno(<?= $aluno->id ?>)">
                            &nbsp;&nbsp;&nbsp;
                            <input type="button" class="btn btn-danger" value="Remover" onclick="removerAluno(<?= $aluno->id ?>)">
                        </td>
            		</tr>
            	@endforeach
            </tbody>
    	</table>
    </div></p>
</body>
</html>
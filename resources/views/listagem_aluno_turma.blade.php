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
        <div class="row alert alert-primary" role="alert"><div class="col-lg-12" align="center">Listagem de Alunos por Turma</div></div>
        <table id="listagem_usuario" class="table table-bordered table-striped">
        	<thead>
    			<tr>
                	<th> Turma </th>
                	<th> Quantidade de Alunos </th>
            	</tr>
            </thead>

            <tbody>
            	@foreach($alunoTurma as $aluno_turma)
            		<tr>
            			<td>{{ $aluno_turma["turma"] }}</td>
            			<td>{{ $aluno_turma["qtdAlunos"] }}</td>
            		</tr>
            	@endforeach
            </tbody>
    	</table>
    </div></p>
</body>
</html>
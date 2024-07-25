<html>
<head>
<title>POSITIVO</title>
<script type="text/javascript" src="<?php echo asset('js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('js/bootstrap.min.js')?>"></script>
<link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">

<script language="javascript">
$(document).ready(function(){
    $('#btn_login').click(function(){
        $('#formulario').submit();
    });
});
</script>
</head>

<body>
    <form action="{{ Route('welcome') }}" method="post" id="formulario">
    @csrf        
    <div class="container col-lg-6" align="center">
        <div class="row col-lg-6" align="center">Tela de Login</div><br />
		<div class="row col-lg-6" align="center">
			<label>Usuário</label>&nbsp;&nbsp;&nbsp;<input type="text" name="usuario"  placeholder="Usuário">
		</div><br />
		<div class="row col-lg-6" align="center">
			<label>Senha&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="password" name="senha"  placeholder="Senha">
		</div><br />
		<div class="row col-lg-6" align="center">
        <button type="button" id="btn_login" class="btn btn-primary">Login</button>
		</div>
    </div>
    </form>
</body>
</html>
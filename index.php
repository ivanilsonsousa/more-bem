<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="shortcut icon" href="_imagens/icone.png">
	<link rel="stylesheet" type="text/css" href="_css/estilo1.css">
	<script type="text/javascript" src="_scripts/acoes.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<img id="logo" src="_imagens/logo.png" alt="nao carregou">
	<fieldset id="campo-field" class="relative-parent">
	<legend id="legenda">Login</legend>
	<form id="form" method="POST" action="_controles/processa-login.php">
		<label id="label-user">Usuário:</label>
		<div class="blocoIcones" id="div-user">
			<button disabled="true" id="user-homem"><?php include "_imagens/user-homem.svg"?></button>
			<input type="text" name="usuario" id="usuario" placeholder="Digite seu email..."><br>
		</div>
		<label id="label-senha">Senha:</label>
		<div class="blocoIcones" id="div-senha">
			<button disabled="true" id="cadeado"><?php include "_imagens/cadeado.svg"?></button>
			<input type="password" name="senha" id="senha" placeholder="Digite a senha...">
			<button type="button" id="olho"><img id="img-olho" src="_imagens/olho-aberto.svg"/></button>
		</div>
		<button type="submit" id="botao">Confirmar</button>
	</form>
	<div id="div-links">
		<a href="tela-esqueceu-senha.php" id="esqueceu">Esqueceu a senha?</a>
		<a href="tela-novo-fornecedor.php" id="cad-forn">Cadastrar-se como fornecedor</a>
	</div>
	</fieldset>
</body>
<script type="text/javascript">olho()</script>
</html>
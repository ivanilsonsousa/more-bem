<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="shortcut icon" href="img/icone.png">
	<link rel="stylesheet" type="text/css" href="css/estilo-login.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

	<script type="text/javascript" src="scripts/funcoes.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
	<div id="site">
	<div id="imagem">
		<img src="img/logo.png" alt="nao carregou">
	</div>
	<fieldset class="relative-parent">
	<legend id="legenda">Login</legend>
	<form id="form" method="POST" action="controller/processa-login.php">
		<label id="label-user" for="usuario">Usuário:</label>
		<div class="blocoIcones" id="div-user">
			<input type="text" name="usuario" id="usuario" placeholder="Digite seu email..."><br>
			<i id="man" class="fas fa-user"></i>
		</div>
		<label id="label-senha" for="senha">Senha:</label>
		<div class="blocoIcones" id="div-senha">
			<input type="password" name="senha" id="senha" placeholder="Digite a senha...">
			<i id="lock" class="fas fa-lock"></i>
			<i><img id="olho" onclick="mostrarTexto()" src="img/eye-regular.svg"></i>
		</div>
		<button type="submit" id="botao">Confirmar</button>
	</form>
	<div id="div-links">
		<a href="tela-esqueceu-senha.php" id="esqueceu">Esqueceu a senha?</a>
		<a href="tela-novo-fornecedor.php" id="cad-forn">Cadastrar-se como fornecedor</a>
	</div>
	</fieldset>
	</div>
	<footer>
		<span>&#169; <script> document.write(ano())</script> Todos os direitos reservados by <strong>Scorpion, Inc.</strong></span>
	</footer>
</body>
</html>

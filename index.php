<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>login</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="_imagens/icone.png">
	<link rel="stylesheet" href="_css/estilo-login.css">
	<script type="text/javascript" src="_scripts/funcoes.js"></script>
</head>
<body>
	<img id="logo" src="_imagens/logo3.png" alt="nao carregou">	
	<fieldset id="campo-config" class="relative-parent">
		<legend id="legenda">Login</legend>
		<form method="POST" action="_controles/processa-login.php">

			<label for="usuario">Usuário:</label> <input type="email" id="usuario" name="usuario" placeholder="Digite seu email"><br>
			<label for="senha">Senha:</label> <input type="password" id="senha" name="senha" placeholder="Digite sua senha"><br>
			<img src="_imagens/olho-fechado12.png" id="olho" class="relative">
			
			<a href="tela-esqueceu-senha.php" id="esqueceu">Esqueceu a senha?</a>
			<input type="submit" value="Confirmar" id="botao"><br>
			<a href="tela-novo-fornecedor.php" id="cad-forn">Cadastrar-se como fornecedor</a>

		</form>
	</fieldset>
	<script>olho();</script>
</body>
</html>
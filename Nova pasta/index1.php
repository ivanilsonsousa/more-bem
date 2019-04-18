<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo-login.css">
	<link rel="shortcut icon" href="_imagens/icon.png">
</head>
<body>
	<div id="corpo-form">
	<img id="logo" src="_imagens/logo3.png" alt="nao carregou">
	
	<fieldset id="campo-config">
	<legend id="legenda">Login</legend>
		<form method="POST" action="processa-login.php">

			<label for="usuario">Usuário:</label> <input type="email" id="usuario" name="usuario" placeholder="Digite seu email"><br>
			<label for="senha">Senha:</label> <input type="password" id="senha" name="senha" placeholder="Digite sua senha"><br>
			<img src="_imagens/olho-fechado.png" id="olho" class="olho">
			
			<a href="tela-esqueceu-senha.php" id="esqueceu">Esqueceu a senha?</a>
			<input type="submit" value="Confirmar" id="botao"><br>
			<a href="tela-novo-fornecedor.php" id="cad-forn">Cadastrar-se como fornecedor</a>

		</form>
	</fieldset>
	</div>

	<script type="text/javascript">
		document.getElementById('olho').addEventListener('mousedown', function() {
		document.getElementById('senha').type = 'text';
		var img = document.getElementById('olho');
		img.src = '_imagens/olho-aberto1.png';
		});

		document.getElementById('olho').addEventListener('mouseup', function() {
		document.getElementById('senha').type = 'password';
		var img = document.getElementById('olho');
		img.src = '_imagens/olho-fechado.png';
		});

		// Para que o password não fique exposto apos mover a imagem.
		document.getElementById('olho').addEventListener('mousemove', function() {
		  document.getElementById('senha').type = 'password';
		});
	</script>

</body>
</html>
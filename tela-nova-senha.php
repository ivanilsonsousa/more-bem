<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Nova Senha</title>
	<link rel="stylesheet" href="_css/estilo-tela-nova-senha.css">
	<link rel="shortcut icon" href="_imagens/icone.png">
</head>
<body>
	<form method="POST" action="index.php">
		<fieldset class="form-interno">
		<legend id="legenda-redefinir-senha">Nova Senha</legend>

			<label for="nova-senha">Nova Senha:</label><input type="text" id="nova-senha"><br>
			<label for="repetir-senha">Repetir Senha:</label><input type="text" id="repetir-senha"><br>

			<input type="submit" value="Enviar" id="botao"><br>
		</fieldset>
	</form>
</body>
</html>
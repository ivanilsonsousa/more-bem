<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Novo Item</title>
	<link rel="stylesheet" href="_css/estilo-tela-novo-item.css">
	<link rel="shortcut icon" href="_imagens/icone.png">
</head>
<body>
	<form method="POST" action="_controles/processa-cadastro-item.php">
		<fieldset>
		<legend id="legenda-redefinir-senha">Novo Item</legend>

			<label for="material">Material:</label><input type="text" name="material" id="material">
			<label for="marca">Marca:</label><input type="text" name="marca" id="marca"><br>
			<label for="medida">Unidade de Medida:</label><input name="medida" type="text" id="medida"><br>

		<input type="submit" value="Salvar" id="botao"><br>
		</fieldset>
	</form>
</body>
</html>
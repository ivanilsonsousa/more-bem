<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastrar Fornecedor</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo-tela-novo-fornecedor.css">
	<link rel="shortcut icon" href="_imagens/icone.png">
</head>
<body>

	<fieldset id="campo-cadastro">
	<legend id="legenda">Cadastrar Fornecedor</legend>
	<form method="POST" action="_controles/processa-cadastro-fornecedor.php">

		<label for="rsocial">Razão Social:</label> <input type="text" id="rsocial" name="rsocial"><br>
		<label for="cnpj">CNPJ:</label> <input type="text" id="cnpj" name="cnpj"><br>

		<fieldset id="endereco" class="form-interno">
		<legend id="legenda-end">Endereço</legend>
			<label for="rua">Rua:</label><input type="text" id="rua" name="rua">
			<label for="num">Num:</label><input type="number" id="num" name="num" min="1"><br>
			<label for="cep">CEP:</label><input type="text" id="cep" name="cep">
			<label for="tel">Tel:</label><input type="tel" id="tel" name="tel">
		</fieldset>

		<fieldset id="dados-login" class="form-interno">
		<legend id="legenda-dados-login">Dados de Login</legend>
			<label for="email">Email:</label><input type="email" id="email" name="email"><br>
			<label for="senha">Senha:</label><input type="password" id="senha" name="senha"><br>
			<label for="num">Repetir Senha:</label><input type="password" id="rsenha" name="rsenha"><br>
		</fieldset>
		<input type="submit" value="Enviar" id="botao"><br>
	</form>
	</fieldset>
</body>
</html>
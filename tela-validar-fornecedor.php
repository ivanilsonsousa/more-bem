<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Validar Cadastro Fornecedor</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo-tela-validar-fornecedor1.css">
	<link rel="shortcut icon" href="_imagens/icone.png">
</head>
<body>

	<fieldset id="campo-cadastro">
	<legend id="legenda">Validar Cadastro</legend>
	<form method="POST" action="_controles/processa-validar-fornecedor.php">

		<label for="rsocial">Razão Social:</label> <input type="text" value="CNOVA LTDA" id="rsocial" readonly="true" name="rsocial"><br>
		<label for="cnpj">CNPJ:</label> <input type="text" id="cnpj" readonly="true" name="cnpj" value="86.672.175/0001-60"><br>

		<fieldset id="endereco" class="form-interno">
		<legend id="legenda-end">Endereço</legend>
			<label for="rua">Rua:</label><input type="text" id="rua" readonly="true" value="RUA CLAÚDIO SANTOS PEREIRA" name="rua">
			<label for="num">Num:</label><input type="number" id="num" readonly="true" value="112" name="num" min="1"><br>
			<label for="cep">CEP:</label><input type="text" id="cep" readonly="true" value="62580-000" name="cep">
			<label for="tel">Tel:</label><input type="tel" id="tel" readonly="true" value="36611-0125" name="tel">
		</fieldset>

		<fieldset id="dados-login" class="form-interno">
		<legend id="legenda-dados-login">Dados de Login</legend>
			<label for="email">Email:</label><input type="email" id="email" readonly="true" value="EXTRA@GMAIL.COM" name="email"><br>
			<label for="senha">Senha:</label><input type="password" id="senha" value="Palmeiras" readonly="true" name="senha"><br>
		</fieldset>
		<input type="submit" value="Validar" id="botao"><br>
	</form>
	</fieldset>
</body>
</html>
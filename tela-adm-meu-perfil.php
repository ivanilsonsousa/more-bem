<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Editar Dados Usuário</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo-tela-editar-usuario.css">
	<link rel="shortcut icon" href="_imagens/icone.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
	<link rel="stylesheet" type='text/css' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="site">
	  <i class="fas fa-user-edit fa-4x"></i><br><br>
		<fieldset id="campo-cadastro">
		<legend id="legenda">Editar Dados</legend>
		<form method="POST" action="_controles/processa-cadastro-fornecedor.php">

			<label for="nome">Nome:</label> <input type="text" id="nome" name="nome"><br>
			<label for="cnpj">CPF:</label> <input type="text" id="cpf" name="cpf"><br>

			<fieldset class="form-interno">
			<legend id="legenda-dados-login">Dados de Login</legend>
				<label for="email">Email:</label><input type="email" id="email" name="email"><br>
				<label for="senha">Senha:</label><input type="password" id="senha" name="senha"><br>
				<label for="rsenha">Repetir Senha:</label><input type="password" id="rsenha" name="rsenha"><br>
			</fieldset>
			<input class="btn btn-default" type="submit" value="Salvar" id="botao"><br>
		</form>
		</fieldset>
	</div>
</body>
</html>

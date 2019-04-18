<?php
    session_start();
	if (!isset($_SESSION['idforn'])) {
		header("location: index.php");
		exit;
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo-tela-inicial-fornecedor.css">
	<link rel="shortcut icon" href="_imagens/icon.png">
</head>
<body>

	<img id="logo" src="_imagens/logo3.png" alt="nao carregou">
	<div id="saudacao">
		<h2>Bem-Vindo Fornecedor!</h2>
	</div>
	<fieldset id="campo-acoes">
	<legend id="legenda">Ações</legend>	
		<button onclick="window.location.href='tela-editar-fornecedor.php';" id="edt-perfil" class="botao">Editar<br>Pefil</button>
		<button onclick="window.location.href='tela-novo-item.php';" class="botao">Adicionar<br>Itens</button>
		<button onclick="window.location.href='tela-novo-orcamento.php';" class="botao">Adicionar Orçamentos</button><br>
		<button onclick="window.location.href='tela-ver-itens.php';" class="botao">Itens</button>
		<button onclick="window.location.href='tela-ver-fornecedores.php';" class="botao">Fornecedores</button>
		<button onclick="window.location.href='_controles/sair.php';" class="botao">Sair</button>
	</fieldset>
	
</body>
</html>




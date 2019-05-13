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
		<meta charset="UTF-8">
		<title>Home - Administrador</title>
		<link rel="shortcut icon" href="_imagens/icone.png">
		<link rel="stylesheet" type='text/css' href="_css/estilo-tela-inicial-adm.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
		<link rel="stylesheet" type='text/css' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	</head>
	<body>

		<div class="site">
			<h1>Bem-Vindo Rafael!</h1>
			<button type="button" id="sair" onclick="sair()" class="sair"><i class="fas fa-power-off fa-2x"></i><br>Sair</button>
			<fieldset>
				<legend>Ações</legend><br>
				<button type="button" onclick="window.location.href='tela-adm-gerenciar-usuarios.php';" class="btn btn-primary"><i class="fas fa-cogs fa-2x"></i><i class="fas fa-address-card fa-2x"></i><br><br><label>Gerenciar Usuários</label></button>
				<button type="button" onclick="window.location.href='tela-adm-gerenciar-orcamentos.php';" class="btn btn-primary"><i class="fas fa-cogs fa-2x"></i><i class="fas fa-bars fa-2x"></i><br><br><label>Gerenciar Orçamentos</label></button>
				<button type="button" onclick="window.location.href='tela-adm-gerenciar-ofertas.php';" class="btn btn-primary"><i class="fas fa-cogs fa-2x"></i><i class="fas fa-wallet fa-2x"></i><br><br><label>Gerenciar Ofertas</label></button><br><br>
				<button type="button" onclick="window.location.href='tela-adm-gerenciar-fornecedores.php';" class="btn btn-primary"><i class="fas fa-cogs fa-2x"></i><i class="fas fa-user-tie fa-2x"></i><br><br><label>Gerenciar Fornecedores</label></button>
				<button type="button" class="btn btn-primary"><i class="fas fa-comments fa-2x"></i><br><br><label>Mensagens</label></button>
				<button type="button" onclick="window.location.href='tela-adm-gerenciar-itens.php';" class="btn btn-primary"><i class="fas fa-cogs fa-2x"></i><i class="fas fa-list-ul fa-2x"></i><br><br><label>Gerenciar Itens</label></button>
			</fieldset>
		</div>

    <script type="text/javascript">
      function sair(){
        if (confirm("Deseja realmente sair?")){
            location.href="_controles/sair.php";
        }
      }
    </script>

	</body>
</html>

<?php
	require_once "_classes/BD.class.php";

	$bd = new BD();
	$bd->abrir("meubanco", "localhost", "root", "");
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Gerenciar Fornecedores</title>
		<link rel="shortcut icon" href="_imagens/icone.png">
		<link rel="stylesheet" type='text/css' href="_css/estilo-tela-gerenciar-fornecedores-adm1.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
		<link rel="stylesheet" type='text/css' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	</head>
	<body>

		<div class="site">
      <i class="fas fa-cogs fa-4x"></i><i class="fas fa-address-card fa-2x"></i><br><br>
			<fieldset id="form-content">
				<legend>Gerenciar Fornecedores</legend><br>
        <div class="barra-pesquisa">
        </div>
        <div id="div-pesquisa" class="blocoIcones">
          <input class="blocoIcones" type="text" placeholder="Pesquisar...">
          <button class="blocoIcones"><i class="fas fa-search"></i></button>
        </div>
        <div onclick="window.location.href='tela-validar-fornecedor.php';" class="botao">
          <i class="fas fa-suitcase"></i>
          <label>Validar Fornecedores</label>
        </div>

				<div class="tabela">
					<table>
							<tr>
								<th>Razão Social</th>
								<th>Rua</th>
								<th>Número</th>
								<th>Telefone</th>
							</tr>

							<?php
								$lista = $bd->listarTodosOsFornecedores();

								while($dado = $lista->fetch(PDO::FETCH_ASSOC)) {?>
									<tr>
										<td><?php echo $dado['rsocial'];?></td>
										<td><?php echo $dado['rua'];?></td>
										<td><?php echo $dado['num'];?></td>
										<td><?php echo $dado['tel'];?></td>
									</tr>
							<?php
								} ?>

					</table>
				</div>

			</fieldset>
		</div>

	</body>
</html>

<?php
	require_once "_classes/BD.class.php";

	$bd = new BD();
	$bd->abrir("meubanco", "localhost", "root", "");
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Gerenciar Itens</title>
		<link rel="shortcut icon" href="_imagens/icone.png">
		<link rel="stylesheet" type='text/css' href="_css/estilo-tela-gerenciar-itens-adm.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
		<link rel="stylesheet" type='text/css' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	</head>
	<body>

		<div class="site">
      <i class="fas fa-cogs fa-4x"></i><i class="fas fa-list-ul fa-2x"></i><br><br>
			<fieldset id="form-content">
				<legend>Gerenciar Itens</legend><br>
        <!-- <div class="barra-pesquisa">
        </div> -->
        <div id="div-pesquisa" class="blocoIcones">
          <input class="blocoIcones" type="text" placeholder="Pesquisar...">
          <button class="blocoIcones"><i class="fas fa-search"></i></button>
        </div>
        <div onclick="window.location.href='tela-novo-item.php';" class="botao">
          <i class="fas fa-plus-circle"></i>
          <label>Adicionar Item</label>
        </div>

        <div class="tabela">
          <table>
    				<tr>
    					<th>Id</th>
    					<th>Material</th>
    					<th>Marca</th>
    					<th>Unidade de Medida</th>
    				</tr>

    				<?php
    					$lista = $bd->listarTodosOsItens();

    					while($dado = $lista->fetch(PDO::FETCH_ASSOC)) {?>
    						<tr>
    							<td><?php echo $dado['id'];?></td>
    							<td><?php echo $dado['material'];?></td>
    							<td><?php echo $dado['marca'];?></td>
    							<td><?php echo $dado['medida'];?></td>
    						</tr>
    				<?php
    					} ?>
          </table>
      </div>

			</fieldset>
		</div>

	</body>
</html>

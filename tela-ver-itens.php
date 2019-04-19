<?php
	require_once "_classes/BD.class.php";

	$bd = new BD();
	$bd->abrir("meubanco", "localhost", "root", "");
?>

<html lang="pt-br">
<head>
	<title>Ver Itens</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo-tela-ver-itens.css">
	<link rel="shortcut icon" href="_imagens/icone.png">
</head>
<body>
		<h2>ITENS DO BANCO DE DADOS</h2>
		
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
</body>
</html>
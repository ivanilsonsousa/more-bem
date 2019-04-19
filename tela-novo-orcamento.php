<?php
	require_once "_classes/BD.class.php";

	$bd = new BD();
	$bd->abrir("meubanco", "localhost", "root", "");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastrar Orçamento</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo-tela-novo-orcamento.css">
	<link rel="shortcut icon" href="_imagens/icone.png">
	<script type="text/javascript" src="_scripts/funcoes.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

	<fieldset id="campo-item">
	<legend id="legenda">Cadastrar Orçamento</legend>
	<form method="POST" action="_controles/processa-novo-orcamento.php">

		<label for="titulo">Título:</label> <input type="text" id="titulo" name="titulo">
		<label for="prazo" id="label-prazo">Prazo:</label> <input type="date" id="prazo" name="prazo"><br>
		<label for="texto" id="descricao">Descrição:</label><br><textarea cols="57" rows="7" maxlength="350" placeholder="Digite uma descrição..."></textarea>

		<fieldset id="selecionar-item" class="form-interno">
		<legend id="legenda-item">Selecionar Item</legend>
			<label for="material">Material:</label>
			<select id="seletor" onchange="preenche()">
				
				<option>
					Selecione...
				</option>

				<?php 
					$lista = $bd->listarTodosOsItens();
					
					while($dado = $lista->fetch(PDO::FETCH_ASSOC)) {?>
						<option><?php echo $dado['material'];?></option>

				<?php
					} ?>

			</select>
			<label id="label-quant" for="num">Quantidade:</label><input type="number" id="quant" name="quant" min="1"><br>
			<label for="marca">Marca:</label><input type="text" id="marca" name="marca" readonly="true">
			<label id="label-medida" for="medida">Unid. de Medida:</label><input type="text" id="medida" name="medida" readonly="true"><br>
			<input type="hidden" id="id-item">
			<input type="button" id="botao-inserir-item" value="Adicionar">
		</fieldset>

		<fieldset id="dados-item" class="form-interno">
		<legend id="legenda-dados-item">Itens</legend>
			<table border="1">
				<tr>
					<th>Material</th>
					<th>Marca</th>
					<th>Unidade de Medida</th>
					<th>Quantidade</th>
				</tr>

				<?php 
					$lista = $bd->listarTodosOsItens();

					while($dado = $lista->fetch(PDO::FETCH_ASSOC)) {?>
						<tr>
							<td><?php echo $dado['material'];?></td>
							<td><?php echo $dado['marca'];?></td>
							<td><?php echo $dado['medida'];?></td>
							<td><?php echo $dado['id'];?></td>
						</tr>
				<?php
					} ?>

			</table>
		</fieldset>
		<input type="submit" value="Cadastrar" id="botao">
	</form>
	</fieldset>
</body>
</html>
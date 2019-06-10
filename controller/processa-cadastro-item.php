<?php
	require_once "../classes/BD.class.php";

	$bd = new BD();


	if(isset($_POST['material'])) {
		$material = addslashes($_POST['material']);
		$marca = addslashes($_POST['marca']);
		$medida = addslashes($_POST['medida']);
		$m = "Mensagem Padrão";

		if (!empty($material) && !empty($marca) && !empty($medida)) {
			$bd->abrir("meubanco", "localhost", "root", "");

			if($bd->msgErro == ""){ // tudo ok
				$i = new Item($material, $marca, $medida);
				$bd->inserirItem($i);
				unset($i);
				$m = "Item Cadastrado Com Sucesso!!!";
				echo("<script>history.go(-1)</script>");
			} else {
				$m = "Erro: ".$bd->msgErro;
				echo("<script>history.go(-1)</script>");
			}
		} else {
			$m = "Preencha Todos os Campos";
			echo("<script>history.go(-1)</script>");
		}
	}

	echo('<script>alert("'.$m.'");</script>');

	//header("refresh: 0.1; ../tela-novo-item.php");
?>

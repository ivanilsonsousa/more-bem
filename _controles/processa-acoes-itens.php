<?php
	session_start();
	if (!isset($_SESSION['idforn'])) {
		header("location: index.php");
		exit;
	}

	require_once "../_classes/BD.class.php";

	$bd = new BD();
	$indice = $_GET['id'];
	$acao = $_GET['acao'];
	$bd->abrir("meubanco", "localhost", "root", "");

	if($acao == "Apagar"){
			if($bd->msgErro == ""){ // tudo ok
				$bd->apagarItem($indice);
				header('location: ../tela-adm-gerenciar-itens.php');
			} else {
				$m = "Erro: ".$bd->msgErro;
			}
	} elseif ($acao == "Editar") {
			header("location: ../tela-editar-item.php?id=$indice");
	}

?>

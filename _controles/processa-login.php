<?php
	require_once "../_classes/BD.class.php";
	$bd = new BD();

	$usuario = addslashes($_POST["usuario"]);
	$senha = addslashes($_POST["senha"]);
		
	if (!empty($usuario) && !empty($senha)) {

		$bd->abrir("meubanco", "localhost", "root", "");
		if ($bd->msgErro == ""){

			if ($bd->logar($usuario, $senha)) {
				header("location: ../area-privada.php");
			} else {
				echo('<script>alert("Email e/ou senha incorretos");</script>');
				header("refresh: 0.1; ../index.php");
			}
		} else {
			echo('<script>alert("Erro ao abrir o banco");</script>');
			header("refresh: 0.1; ../index.php");
		}
	} else {
		echo('<script>alert("Preencha todos os campos");</script>');
			header("refresh: 0.1; ../index.php");
	}
?>

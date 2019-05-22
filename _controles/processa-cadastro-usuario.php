<?php 
	require_once "../_classes/BD.class.php";

	$bd = new BD();
	

	if(isset($_POST["nome"])) {
		$nome = addslashes($_POST["nome"]);
		$cpf = addslashes($_POST["cpf"]);
		$tipo = addslashes($_POST["tipo"]);
		$email = addslashes($_POST["email"]);
		$senha = addslashes($_POST["senha"]);
		$rsenha = addslashes($_POST["rsenha"]);
		$m = "Mensagem Padrão";

		if(!empty($nome) && !empty($cpf) && !empty($tipo)  && !empty($email) && !empty($senha) && !empty($rsenha)) {
			$bd->abrir("meubanco", "localhost", "root", "");
			
			if($bd->verificaExistencia($email)) {
				$m = "Email Já Cadastrado";
			} elseif($bd->msgErro == "") {	
				if($senha == $rsenha) {
					//$u = new Usuario($nome, $cpf, $tipo, $email, $senha);
					//$bd->inserirUsuario($u);
					//unset($u);
					$m = "Cadastrado Com Sucesso!Nome: $nome CPF: $cpf TIPO: $tipo EMAIL: $email SENHA: $senha";
					header("refresh: 0.1; ../tela-novo-usuario.php");
				} else {
					$m = "Senha e Confirmar Senha não correspondem!";
					header("refresh: 0.1; ../tela-novo-usuario.php");
				}
			} else {
				$m = "Erro: ".$bd->msgErro;
				header("refresh: 0.1; ../tela-novo-usuario.php");
			}
		} else {
			$m = "Preencha Todos os Campos";
			header("refresh: 0.1; ../tela-novo-usuario.php");
			//echo "<script>javascript:history.back(-2)</script>";
		}
	}

	echo('<script>alert("'.$m.'");</script>');

	//header("refresh: 0.1; ../tela-novo-fornecedor.php");
?>
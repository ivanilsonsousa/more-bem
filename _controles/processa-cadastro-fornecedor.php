<?php 
	require_once "../_classes/BD.class.php";

	$bd = new BD();
	

	if(isset($_POST['rsocial'])) {
		$rsocial = addslashes($_POST['rsocial']);
		$cnpj = addslashes($_POST['cnpj']);
		$rua = addslashes($_POST['rua']);
		$num = addslashes($_POST['num']);
		$cep = addslashes($_POST['cep']);
		$tel = addslashes($_POST['tel']);
		$email = addslashes($_POST['email']);
		$senha = addslashes($_POST['senha']);
		$rsenha = addslashes($_POST['rsenha']);
		$m = "Mensagem Padrão";

		if (!empty($rsocial) && !empty($cnpj) && !empty($rua) && !empty($num) && !empty($cep) && !empty($tel) && !empty($email) && !empty($senha) && !empty($rsenha)){
			$bd->abrir("meubanco", "localhost", "root", "");
			
			if($bd->verificaExistencia($email)) {
				$m = "Email Já Cadastrado";
			} elseif($bd->msgErro == "") {	
				if($senha == $rsenha) {
					$f = new Fornecedor($rsocial, $cnpj, $rua, $num, $cep, $tel, $email, $senha);
					$bd->inserirForncedor($f);
					unset($f);
					$m = "Cadastrado Com Sucesso!!!";
					header("refresh: 0.1; ../tela-novo-fornecedor.php");
				} else {
					$m = "Senha e Confirmar Senha não correspondem!";
					header("refresh: 0.1; ../tela-novo-fornecedor.php");
				}
			} else {
				$m = "Erro: ".$bd->msgErro;
				header("refresh: 0.1; ../tela-novo-fornecedor.php");
			}
		} else {
			$m = "Preencha Todos os Campos";
			header("refresh: 0.1; ../tela-novo-fornecedor.php");
			//echo "<script>javascript:history.back(-2)</script>";
		}
	}

	echo('<script>alert("'.$m.'");</script>');

	header("refresh: 0.1; ../tela-novo-fornecedor.php");
?>
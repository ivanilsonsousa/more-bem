<?php
	require_once "Fornecedor.class.php";
	require_once "Item.class.php";

	class BD {
		private $pdo;
		public $msgErro = "";

		public function abrir($nome, $host, $usuario, $senha){
			global $pdo;
			global $msgErro;
			
			$dsn = "mysql:host=$host;dbname=$nome;charset=utf8";

			try {
				$pdo = new PDO($dsn, $usuario, $senha);
			} catch (PDOException $e) {
				$msgErro = $e->getMessage();
			}
		}

		public function verificaExistencia($email){
			global $pdo;

			$sql = $pdo->prepare("SELECT idforn FROM fornecedor WHERE email = :e");
			$sql->bindValue(":e", $email);
			$sql->execute();

			if($sql->rowCount() > 0)
			{
				return true; //ja cadastrado
			}
			else
			{
				return false; //pode cadastrar
			}
		}

		public function inserirForncedor($f){
			global $pdo;
			global $msgErro;

			try {
				$sql = $pdo->prepare("INSERT INTO fornecedor (rsocial, cnpj, rua, num, cep, tel, email, senha) VALUES (:rs, :cn, :r, :n, :ce, :t, :e, :s)");
				$sql->bindValue(":rs", $f->getRazaoSocial());
				$sql->bindValue(":cn", $f->getCNPJ());
				$sql->bindValue(":r", $f->getRua());
				$sql->bindValue(":n", $f->getNum());
				$sql->bindValue(":ce", $f->getCEP());
				$sql->bindValue(":t", $f->getTel());
				$sql->bindValue(":e", $f->getEmail());
				$sql->bindValue(":s", md5($f->getSenha()));
				$sql->execute();
					
			} catch (Exception $e) {
				$msgErro = $e->getMessage();
				//echo "ERRRRRRRRRO <br>".$msgErro;
			}
		}

		public function listarTodosOsFornecedores(){
			global $pdo;
			global $msgErro;

			try {
				$sql = $pdo->prepare("SELECT * FROM fornecedor ORDER BY idforn ASC");
				$sql->execute();
				return $sql;
				
			} catch (Exception $e) {
				$msgErro = $e->getMessage();
			}
		}

		public function listarFornecedor($id){
			global $pdo;
			global $msgErro;

			try {
				$sql = $pdo->prepare("SELECT * FROM fornecedor WHERE idforn = $id");
				$sql->execute();
				$dado = $sql->fetch(PDO::FETCH_ASSOC);
				return $dado;

			} catch (Exception $e) {
				$msgErro = $e->getMessage();
			}
		}

		public function editarFornecedor($f){
			global $pdo;
			global $msgErro;

			try {
				$sql = $pdo->prepare("UPDATE fornecedor SET rsocial = :rs, cnpj = :cn, rua = :r, num = :n, cep = :ce, tel = :t, email = :e, senha = :s WHERE idforn = :id");

				$sql->bindValue(":rs", $f->getRazaoSocial());
				$sql->bindValue(":cn", $f->getCNPJ());
				$sql->bindValue(":r", $f->getRua());
				$sql->bindValue(":n", $f->getNum());
				$sql->bindValue(":ce", $f->getCEP());
				$sql->bindValue(":t", $f->getTel());
				$sql->bindValue(":e", $f->getEmail());
				$sql->bindValue(":s", md5($f->getSenha()));
				$sql->bindValue(":id", $f->getIdForn());
				
				$sql->execute();
					
			} catch (Exception $e) {
				$msgErro = $e->getMessage();
				//echo "<br>ERRRRRRRRRO <br>".$msgErro;
			}
		}

		public function inserirItem($i){
			global $pdo;
			global $msgErro;

			try {
				$sql = $pdo->prepare("INSERT INTO item (material, marca, medida) VALUES (:mat, :mar, :med)");
				$sql->bindValue(":mat", $i->getMaterial());
				$sql->bindValue(":mar", $i->getMarca());
				$sql->bindValue(":med", $i->getMedida());
				$sql->execute();
					
			} catch (Exception $e) {
				$msgErro = $e->getMessage();
				//echo "ERRRRRRRRRO <br>".$msgErro;
			}
		}

		public function listarTodosOsItens() {
			global $pdo;
			global $msgErro;

			try {
				$sql = $pdo->prepare("SELECT * FROM item ORDER BY id ASC");
				$sql->execute();
				return $sql;
				
			} catch (Exception $e) {
				$msgErro = $e->getMessage();
			}
		}

		public function listarItem($indice) {
			global $pdo;
			global $msgErro;

			try {
				$sql = $pdo->prepare("SELECT * FROM item WHERE id = :id");
				$sql->bindValue(":id", $indice);
				$sql->execute();
				$dado = $sql->fetch(PDO::FETCH_ASSOC);
				return $dado;
				
			} catch (Exception $e) {
				$msgErro = $e->getMessage();
			}
		}

		public function logar($email, $senha) {
			global $pdo;
			//verificar se o email e senha estao cadastrados, se sim
			$sql = $pdo->prepare("SELECT idforn FROM fornecedor WHERE email = :e AND senha = :s");
			$sql->bindValue(":e", $email);
			$sql->bindValue(":s", md5($senha));
			$sql->execute();

			if ($sql->rowCount() > 0) {
				$dado = $sql->fetch();
				session_start();
				$_SESSION['idforn'] = $dado['idforn'];
				return true; //conseguiu logar
			} else {
				return false; //nao foi possivel logar
			}
		}	
	}

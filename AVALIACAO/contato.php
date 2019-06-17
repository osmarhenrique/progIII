<?php 

	$nome = $_POST['nome'];
	$apelido = $_POST['apelido'];
	$telefone = $_POST['telefone'];		
	$email = $_POST['email'];

	require_once('conexao.php');
	try {
		$stmt = $conn->prepare('INSERT INTO contatos (nome, apelido, telefone, email) VALUES(:nome, :apelido, :telefone, :email)');
		$stmt->execute(array(
		  ':nome' => $nome,
		  ':apelido' => $apelido,
		  ':telefone' => $telefone,
		  ':email' => $email
		));

		$salvou = $stmt->rowCount();
   
  		if ($salvou=1) {
			header('Location: index.php'); 
  		 } 
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
?>
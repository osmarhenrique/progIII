<?php
	require_once('conexao.php');
	$lista = $conn->query("SELECT * FROM contatos");	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	<title>Avaliação</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<main>
		<section id="mainSection">
			<header>
				<h1>Avaliação Prática</h1>
				<h3>Cadastre-se para ser avaliado</h3>
			</header>
			<div>
				<form method="POST" action="contato.php">
					<div>
						<input type="text" name="nome" placeholder="Digite seu nome" required="Obrigatorio">
					</div>
					<div>
						<input type="text" name="apelido" placeholder="Digite seu apelido">
					</div>
					<div>
						<input type="text" name="telefone" placeholder="Digite seu telefone">
					</div>
					<div>
						<input type="email" name="email" placeholder="Digite seu email" required="Obrigatorio">
					</div><br>					
					<div>
						<button type="submit">Salvar</button>
					</div>
					<div>
						<table border="1">
		     			<tr>
					      <td>Código</td>
					      <td>Nome</td>
					      <td>Apelido</td>
					      <td>Telefone</td>
					      <td>E-mail</td>
		    			</tr>
		    			<?php while($dado = $lista->fetch(PDO::FETCH_ASSOC)) { ?>
		    			<tr>
					      <td><?php echo $dado['id']; ?></td>
					      <td><?php echo $dado['nome']; ?></td>
					      <td><?php echo $dado['apelido']; ?></td>
					      <td><?php echo $dado['telefone']; ?></td>
					      <td><?php echo $dado['email']; ?></td> 
		    			<?php } ?>
		  					</table>
		  				</div>	
				</form>
			</div>
		</section>
	</main>
</body>
</html>

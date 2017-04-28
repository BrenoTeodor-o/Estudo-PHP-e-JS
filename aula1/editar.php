<?php  
	require_once('conexao.php');
	session_start();

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$nome = $_POST['nome'];
		$idade = $_POST['idade'];
		$senha = $_POST['senha'];

		$sql = "UPDATE pessoas set nome = '$nome', idade = $idade, senha = '$senha' where id=".$_GET['id'].";";
		
		if (pg_query($sql)) {
			header('Location: admin.php');
		} else {
			echo "Erro";
		}
		
	}

	if (!$_SESSION['nome']) {
		header('Location: login.php');
	} else {
		$sql = "SELECT * FROM pessoas where id=".$_GET['id'].";";

		$pessoa = pg_query($sql);

		$pessoa = pg_fetch_assoc($pessoa);
	}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
	<input type="text" name="nome" value="<?php echo $pessoa['nome'] ?>">
	<input type="text" min="0" name="idade" value="<?php echo $pessoa['idade'] ?>">
	<input type="text" name="senha" value="<?php echo $pessoa['senha'] ?>" >
	<input type="submit" value="Atualizar">
</form>
</body>
</html>
<?php 
	require_once('conexao.php');
	session_start();
		$nome = $_POST['nome'];
		$idade = $_POST['idade'];
		$senha = $_POST['senha'];


		$sql = "INSERT INTO pessoas(nome, idade, senha) values('$nome', '$idade', '$senha');";

	if(pg_query( $sql )){
		echo "Usuário ".$nome." cadastrado com sucesso";
		session_start();
		$_SESSION['nome'] = $nome;
		header('Location: login.php');
	} else {
		echo "erro";
	}

	// var_dump($_POST);
 ?>
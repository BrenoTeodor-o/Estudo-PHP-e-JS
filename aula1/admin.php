<?php 
	require_once('conexao.php');
	session_start();

	if($_SESSION){
		include 'tela-admin.php';
	} else if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$username = $_POST['username'];
	$senha = $_POST['senha'];
		$sql = "SELECT nome FROM pessoas where nome='$username' AND senha='$senha';";
	
		$query = pg_query($sql);

		if(pg_num_rows($query)){
			echo "Usuario $username $senha";
			session_start();
			$_SESSION['nome'] = $username;
			$_SESSION['id'] = $query['id'];

			include 'tela-admin.php';

		} else {
			echo "não existe";
		}

	}




	
?>
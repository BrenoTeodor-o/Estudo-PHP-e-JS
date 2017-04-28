<?php  
	require_once('conexao.php');
	session_start();

	if (!$_SESSION['nome']) {
		header('Location: login.php');
	} else {
		var_dump($_GET['id']);
		$sql = "DELETE FROM pessoas WHERE id=".$_GET['id'].";";
		pg_query($sql);
		header('Location: admin.php');
	}



?>
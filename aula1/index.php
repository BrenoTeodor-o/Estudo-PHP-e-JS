<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- <?php 
	$ola = "Hello world";
	echo $ola;
 ?> -->

 <br>

 <?php
 $numero = 7; 
 $animal = 'macaco';
 // 	if ($numero === '7'){
 // 		echo "ok"; 
 // 	}else if($numero === 5){
 // 		echo "else if é integer";
 // 	}else{
 // 		echo "oloco bixo";
 // 	}

 // echo ($numero == 7) ? 'é 5' : 'não é 5';

// switch ($animal == 'sz') {
// 	case 'macaco':
// 		echo "Racismo é crime";
// 		break;
// 	case 'baleia':
// 		echo "Se for azul corre lek";
// 		break;
// 	default:
// 		echo "nenhum breno";
// 		break;
// }
	$count = 0;
	// for ($count=0; $count < 5; $count++) { 
	// 	var_dump($count);
	// }

	$pessoas = array(
		'Nome' 	=> 'Breno',
		'Idade'	=> 20
	);
	// var_dump($pessoas["Nome"]);

	// foreach ($pessoas as $pessoa) {
	// 	echo "<li>".$pessoa."</li>";
	// }
	$count = 0;
	// while($count < 5){
	// 	echo $count;
	// 	$count++;
	// }

	/*FUNÇÕES*/
	function doMal( $demonio/*, $dificuldade=null*/, $sacrificio=null )
	{
		//$dificuldade = $demonio['dificuldade'];
		// $mensagem = "Invocação do exu ". $demonio['nome'];
		// var_dump($dificuldade);
		// if ($dificuldade > 1 && $sacrificio == null) {
		// 	return $demonio['nome']." diz: Preciso de sacrificio";
		// }
		if ($sacrificio) {
			if(is_array($sacrificio)){
				// $mensagem .= " com os sacrificios de ";

				foreach ($sacrificio as $key => $value) {
					if ($key == 0) {
						// $mensagem .= $value;
					}else{
						// $mensagem .= ','.$value;
					}
					
				}
			}else{
				// $mensagem .= " com o sacrificio de ". $sacrificio;
			}
		}else{
			// $mensagem .= " sem sacrificio";
		}
		 return void; //$mensagem;
	}
	//catch(Exception $e){
	// 	return $e;
	// }
	$sacrificios = array('Cabra', 'Galinha', 'Virgem');
	$demonio = array(
		'nome'		  => 'Bolsominion',
		'dificuldade' => 1
	);	

	// echo doMal($demonio, $sacrificios);

	// echo "<pre>";
	// var_dump($_SERVER);

 ?>

 <form action="cadastro.php" method="POST">
 	<input type="text" name="nome">
 	<input type="number" min="0" name="idade">
 	<input type="password" name="senha">
 	<input type="submit" value="enviar">
 </form>



</body>
<footer>
	
</footer>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Respostas</title>
</head>
<body>
	<a href="index.php">Voltar para a home</a><br> <!-- Link para voltar pra proxima pagina... não esquecer de dar nome VOLTAR PARA A HOME-->
	<?php
	if(empty($_POST['nome'])|| empty($_POST['email']) )
	{

		echo '<h2>Nenhum dado recebido do fomulario de Preferênciais</h2>';/*saída tela*/

	}
	else
	{
		$nome   = $_POST['nome']; //instancia de variaveis com valor inicial
		$email  = $_POST['email'];
		$turno  = $_POST['turno'];
		$cor	= $_POST['cor'];


		echo "<h2>Dados cadastrados</h2>";//saída
		echo "<p><b>Nome:</b>".$nome."<br>";//Interpolação (só funciona com aspas duplas)
		echo "<b>Email: </b>".$email."<br>"; //concatenação
		echo'<b>Cor preferida:</b>'.$cor.
		': <input class="cores" type="color" value="'. $cor.'" disabled> <br>';
		//echo "<b>Cor preferida:</b> ".$cor."<br>";//hexadecimal
		echo "<b>Turno que prefere estudar:</b> ".$turno."</p>";


	}

	if(empty($_GET['ano_nasc']) || empty($_GET['ano_atual']))
	{

		echo'<h2>Nenhum dados recebidos na idade</h2>';
	}
	else
	{

		$ano_nasc	= $_GET['ano_nasc'];
		$ano_atual	= $_GET['ano_atual'];

		$idade=$ano_atual - $ano_nasc;


		if($idade >=18)
	 	{
			echo'<h3> VOCÊ PODE TIRAR A CNH, pois em ' .$ano_atual. ' você terá ' .$idade.' anos';
		}
		else
		{
			echo'<h3>VOCE NÃO PODE TIRAR A CNH, POIS EM'.$ano_atual.' VOCE TERÁ'.$idade.' ANOS';

		}
	}
	
	  ?>
	     

</body>
</html>
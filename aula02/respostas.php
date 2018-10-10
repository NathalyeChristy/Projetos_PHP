<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<meta charset="utf-8">
	<title>Aula 02 - Respostas</title>
</head>
<body>

	<!--criar link para voltar pra pagina anterior <a == link-->

	<a href="index.php">voltar para home</a> <br>
	<a href="http://www.google.com">ir pro GOOGLE espertinha</a><!--para paginas externas usar http://-->

	<?php 

		//verifica se alguma variavel esta vazia 
		if(empty($_POST['nome']) || empty($_POST['idade']) || empty($_POST['email']))
		{
			echo"<h2>Nenhum dado recebido do formulario </h2>";
		}

		else
		{

		//recebe dados dos formularios e armazena em variáveis
			$nome = $_POST['nome'];
			$idade = $_POST['idade'];
			$email = $_POST['email'];

			echo "<h2> Dados Cadastrados </h2>";
			echo "<p><b>Nome: </b>".$nome."<br>";
			echo "<b>Idade: </b>".$idade."<br>";
			echo "<b>Email: </b>".$email."</p>";
		}
	 ?>
</body>
</html>
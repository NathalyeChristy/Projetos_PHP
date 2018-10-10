<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Aula 03- Home</title>
</head>
<body>

	<h2>Preferências Pessoais</h2>
	<form name="Preferencias" action="respostas03.php" method="post" >
		
		<p>
			<labeL>Informe seu nome</labeL><br>
			<input type="text" name="nome" placeholder="Nome" class="campo">
		</p>

		<p>
			<label>Informe seu email</label><br>
			<input type="email" name="email" placeholder="Email" class="campo">
		</p>

		 <p>
		 	<label>Cor preferida: </label><br>
		 	<input type ="color" name = "cor" class="cores">

		 </p>


		 <p>

		 	<label>Voce prefere estudar em qual turno? </label><br>
		 	<select name="turno" class ="campo">
		 		<option value="Manhã" selected>Manhã</option>
		 		<option value= "Tarde" >Tarde</option>
		 		<option value= "Noite" >Noite</option>
		 	</select>
		 </p>

		 <p>
		 	<button type="submit" class="botao enviar">Enviar</button> 
		 	<button type="reset" class= "botao limpar">Limpar</button>
		 </p>

	</form>

	<h2>Calculo de idade</h2>
	<form name="calc_idade" action="respostas03.php" method="get">

		<p>
			<label>Ano de Nascimento</label><br>
			<input type="number" name="ano_nasc" class="campo">
		</p>

		<p>
			<label>Ano atual</label><br>
			<input type="number" name="ano_atual" calss="campo">	
		</p>

		<p>
			<button type="submit" class="botao enviar">Enviar</button>
		</p>
			



	</form>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<!--Comentário html-->
	<!--carregar a cor -->
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Aula 02 - Home</title>
</head>
<body>

	<h1>Formulário 01</h1>

	<form name="form1" action="respostas.php" method="post">

		<!-- Label. nao aplica formatação, indicador doq tem q escrever no campo asseguir.. O que faz a entrada dos dados é o input ..type=tipo(texto,numero), nome(oq deve digitar tipos de type= TEXT, NUMBER, EMAIL, FONE, COLOR, DATE, PASSWORD(SENHAS)) -->

		<p>
			<label>Nome: </label><br>
			<input type="text" name="nome" required>
		</p>

		<p>
			<label>Idade: </label><br>
			<input type="number" name="idade" min="0" max="150" required>
		</p>		

		<p>
			<label>E-mail: </label><br>
			<input type="email" name="email" required>
		</p>

			<!-- button (tipo generico. precisa de programação extra) 
				 submit  (envio os dados para o formular)
				 reset (limpa os campos)
					-->
		<p>
			<button type="submit">Enviar</button>
			<button type="reset">Limpar</button>
		</p>



	</form>
</body>
</html>
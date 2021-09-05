<!DOCTYPE html>
<html lang="pt-br">

<head>
	<link rel="stylesheet" href="css/restrito.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta charset="utf8">
	<title> Mudanças Climáticas</title>
</head>

<body>
	<div id="interface">
		<header id="cabecalho">
			<hgroup>
				<h1>Mudanças Climáticas</h1>
				<h2>Entendendo as causas e consequências</h2>
			</hgroup>
			<img src="img/IMG11.png">
			<nav id="menu">
				<h1>Login</h1>
				<ul>
				<li><a href="index.php">Home</a></li>
						<li><a href="contato.php">Contato</a></li><!-- [ITEM 5] -->
						<li><a href="login.php">Login</a></li><!-- [ITEM 6] -->
						<li><a href="cadastro.php">Cadastro</a></li>
				</ul>
		</header>
		

		<form id="formu" method="POST" action="users/login.php">
			<fieldset id="Login">
				<legend>Login</legend>
				<p>
					<label for="nome_ident">Usuário:</label>
				<p>
					<input type="text" name="userl" id="label" size="20" maxlength="30" placeholder="Usuário" required />
				<p>
					<label for="password">Senha:</label>
				<p>
					<input type="password" name="senhal" id="label" size="8" maxlength="10" placeholder="Senha" required />
				<p>
					<label for="user">Tipo de usuário:</label>
				<p>
					<select name="tuserl" id="usuario" required>
						<optgroup label="Selecione">
							<option selected value="Administrador">Administrador</option>
							<option selected value="Usuário">Usuário</option>
						</optgroup>
					</select>
				<p>
					<button id="button" type="submit">Fazer login</button>
			</fieldset>
		</form>
		<footer id="rodape">
			<p>
				Copyright&copy 2014 - Curso Técnico de Informática<br>
				<a href=" https://pt-br.facebook.com/" target="_blank">Facebook</a>  |
				<a href="https://twitter.com/?lang=pt" target="_blank">Twitter</a>
			</p>
			<img src="img/IMG4.png">
		</footer>
</body>

</html>
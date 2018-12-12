<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Login</title>
		<link rel="stylesheet" href="login.css">
	</head>
	<body>
		<div id="mainWrapper">
			<div id="title">
				<h1> And Codifier </h1>
			</div>
			<div id="form">
				<form action="">
					<p>
						<input type="text" name="login" id="login" placeholder="Login" required>
					</p>
					<p>
						<input type="password" name="mdp" id="mdp" placeholder="Mot de passe" required>
					</p>
					<p id="pswdForgotten">
						<a href="#">Mot de passe oublié ?</a>
					</p>
					<p id="validateButton">
						<input type="submit" value="Se connecter">
					</p>
					<p id="signUpLink">
						<a href="#">S'inscrire</a>
					</p>
				</form>
			</div>
		</div>
	</body>
</html>
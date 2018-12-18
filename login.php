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
						<span id="aidelogin"></spa
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

		<script type="text/javascript">

			// Contrôle du courriel en fin de saisie

			document.getElementById("login").addEventListener("blur", function (e) {

			    // Correspond à une chaîne de la forme xxx@yyy.zzz

			    var regexCourriel = /.+@.+\..+/;

			    var validiteCourriel = "";

			    if (!regexCourriel.test(e.target.value)) {

			        validiteCourriel = "Adresse invalide";
			    }
			    var spanLogin = document.getElementById("aidelogin");
				spanLogin.textContent = validiteCourriel;
				spanLogin.className = "spanError";
				// On efface l'erreur 5 secondes plus tard
			setTimeout(function() {
			  document.getElementById('aidelogin').innerHTML = "";
			},5000);
			});

		</script>
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Create Account</title>
		<link rel="stylesheet" href="createAccount.css">
	</head>
	<body>
		<div id="mainWrapper">
			<div id="title">
				<h1> Aand Codifier </h1>
			</div>
			<div id="form">
				<form action="">
					<p>
						<input type="text" name="login" id="login" placeholder="Login" size="22" required>
						<span id="spanMail"></span>
					</p>
					<p>
						<input type="text" name="numCarte" id="numCarte" placeholder="N° Carte Étudiant" size="22" required>
						<span id="spanNumCard"></span>
					</p>
					<p>
						<input type="password" name="mdp" id="mdp" placeholder="Mot de passe" size="22" required>
						<span id="spanPswd"></span>
					</p>
					<p>
						<input type="password" name="mdpConf" id="mdpConf" placeholder="Mot de passe de confirmation" size="22" required>
						<span id = "spanPswdConf"></span>
					</p>
					<p id="validateButton">
						<input type="submit" value="S'inscrire">
					</p>
				</form>
			</div>
		</div>
		
		<script>
			
			// Validation du mail
			document.getElementById("login").addEventListener("blur", function(e){
				var mailRegex=/.+@.+\..+/;
				var validateMail = "";
				if (!mailRegex.test(e.target.value)){
					validateMail = "Adresse invalide";
				}
				var spanMail = document.getElementById("spanMail");
				spanMail.textContent = validateMail;
				spanMail.className = "spanError";
			});

			// Validation du N° carte étudiant
			var numCard = document.getElementById("numCarte");
			var validateNum = "";
			var regexNumCard = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{9}$/;
			numCard.addEventListener("blur", function(e){
				if (!regexNumCard.test(numCard.value)){
					validateNum = "N° de carte invalide";
				}
				var spanNumCard = document.getElementById("spanNumCard");
				spanNumCard.textContent = validateNum;
				spanNumCard.classList.add("spanError");
			});

			// Validation du mot de passe
			var pswdInput = document.getElementById("mdp");
			pswdInput.addEventListener("blur", function(e){
				var validatePswd = "";
				if (pswdInput.value.length < 8){
					validatePswd = "Longueur faible";
				}
				var spanPswd = document.getElementById("spanPswd")
				spanPswd.textContent = validatePswd;
				spanPswd.classList.add("spanError");
			});

			// Validation du mmot de passe de confirmation
			var inputPswdConf = document.getElementById("mdpConf");
			var validatePswdConf = "";
			inputPswdConf.addEventListener("blur", function(e){
				if (inputPswdConf.value !== pswdInput.value){
					validatePswdConf = "Mots de passe différents";
				}
				var spanPswdConf = document.getElementById("spanPswdConf");
				spanPswdConf.textContent = validatePswdConf;
				spanPswdConf.className = "spanError";
			});
			
		</script>
	</body>
</html>
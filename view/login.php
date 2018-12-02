<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="login.css">
    	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
    	<script src="jquery.min.js"></script>
    	<!-- <script src="dist/js/jquery-3.3.1.min.js"></script> -->
   		<script src="bootstrap.min.js"></script>
		<title>Codification en ligne</title>
	</head>
	<body style="background-color: #1D1D28 ">
		<h1 style="text-align: center; color: #fff; font-size: 3em; font-weight: bold; margin-top: 200px;"> And Codifier </h1>

		<form >
			<div class="form-group" align="center" style="margin-top: 50px;">
				<label for="login" style="color: #fff; "><span class="glyphicon glyphicon-user" style="color: #D0003C; font-size: 2.5em;"></span></label>
				<input type="text" name="login" placeholder="Login" style="height: 55px; width: 300px; border-radius: 12px; background-color: #2B2A3C; margin-bottom: 25px; padding-left: 5px; color: #fff" ><br>
				<label for="password"><span class="glyphicon glyphicon-lock" style="color: #D0003C; font-size: 2.5em"></span></label>
				<input type="text" name="password" placeholder="Mot de passe" style="height: 55px; width: 300px; border-radius: 12px; background-color: #2B2A3C; margin-bottom: 25px; padding-left: 5px; color: #fff"><br>
				<a href="#" style="color: #fff; margin-left: 50px; font-size: 1.6em; ">Mot de passe oublié ?</a><br>

				<button type="submit" style="width: 250px; height: 50px; border-radius: 20px; background-color: #D0003C; color: #fff;font-weight: bold; font-size: 2em; margin-top: 55px; margin-left: 50px; margin-bottom: 30px;">Se Connecter</button><br>
				<a href="inscription.php" style="font-weight: bold; font-size: 2.5em; text-decoration: underline; color: #fff; margin-left: 50px;"> S'inscrire </a>
			</div>
		</form>
	</body>
</html>
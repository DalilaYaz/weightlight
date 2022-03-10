<?php require_once 'includes/nav2.php' ?>
<?php include('database.php') ?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inscription</title>
	<link rel="stylesheet" href="css/utilities.css">
	<link rel="stylesheet" href="css/signup.css">

</head>

<body>

	<div class="flex">

		<form action="signup.php" method="post">
			<?php include('errors.php'); ?>
			<p class="desc1">Bienvenue sur<span class="green"> Weight</span><span class="orange">Light</span>, Inscrivez-vous !</p>

			<!-- NOM ET PRENOM -->

			<div class="field row">
				<div>
					<label for="prenomUt">Prénom </label>
					<input type="text" name="prenomUt" value="<?php echo $prenomUt; ?>" required>
				</div>

				<div>
					<label for="nomUt">Nom</label>
					<input type="text" name="nomUt" value="<?php echo $nomUt; ?>" required>
				</div>
			</div>

			<!-- POIDS ET TAILLE -->

			<div class="field row">
				<div>
					<label for="poids">Poids ( kg )</label>
					<input type="number" name="poids" value="<?php echo $poids; ?>" required>
				</div>

				<div>
					<label for="taille">Taille ( cm )</label>
					<input type="number" name="taille" value="<?php echo $taille; ?>" required>
				</div>
			</div>

			<!-- EMAIL -->

			<div class="field">
				<label for="email">Adresse mail</label> <br>
				<input type="email" name="email" value="<?php echo $email; ?>" required>
			</div>

			<!-- PASSWORD -->

			<div class="field">
				<label for="password">Mot de passe</label> <br>
				<input type="password" name="password" value="<?php echo $password; ?>" required>
			</div>

			<!-- DATE DE NAISSANCE -->

			<div class="field">
				<label for="dateNaiss">Date de naissance</label> <br>
				<input type="date" name="dateNaiss" value="<?php echo $dateNaiss; ?>" required>
			</div>

			<!-- BUTTON S'INSCRIRE -->
			<button type="submit" class="btnPrimary" value="Sign Up" name="reg_user">S'inscrire</button>

			<p class="desc2"> Déjà inscrit? <span class="orange"> <a href="login.php" class="orange"> Connectez-vous.</a></span></p>

		</form>



		<!-- ILLUSTRATION -->

		<img src="images/home/diet.png" alt="">

	</div>

</body>

<!-- <footer>WeightLight &copy 2022 - IUT Calais</footer> -->

</html>
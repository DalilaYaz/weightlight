<?php require_once 'includes/nav2.php' ?>


<?php require_once 'db_con.php'; 
	session_start();
	if (isset($_POST['signup'])) {
		$name = $_POST['nomUt'];
        $prenom = $_POST['prenomUt'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$poids= $_POST['poids'];
        $taille= $_POST['taille'];
        $dateNaiss= $_POST['dateNaiss'];


		$photo = explode('.', $_FILES['avatar']['name']);
		$photo= end($photo);
		$photo_name= $username.'.'.$photo;

		$input_error = array();
		if (empty($name)) {
			$input_error['nomUt'] = "The Name Filed is Required";
		}
        if (empty($prenom)) {
			$input_error['prenomUt'] = "The Name Filed is Required";
		}
		if (empty($email)) {
			$input_error['email'] = "The Email Filed is Required";
		}
		if (empty($password)) {
			$input_error['password'] = "The Password Filed is Required";
		}
        if (empty($poids)) {
			$input_error['poids'] = "The poids Filed is Required";
		}
        if (empty($taille)) {
			$input_error['taille'] = "The taille Filed is Required";
		}
		if (empty($photo)) {
			$input_error['avatar'] = "The avatar Filed is Required";
		}

		if (!empty($password)) {
			if ($c_password!==$password) {
				$input_error['notmatch']="You Typed Wrong Password!";
			}
		}

		if (count($input_error)==0) {
			$check_email= mysqli_query($db_con,"SELECT * FROM `users` WHERE `email`='$email';");

			if (mysqli_num_rows($check_email)==0) {
				$check_username= mysqli_query($db_con,"SELECT * FROM `users` WHERE `username`='$username';");
				if (mysqli_num_rows($check_username)==0) {
			}else{
				$email_error= "This email already exists";
			}
			
		}
		
	}

?>


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

        <form action=" " method="post">
            <p class="desc1">Bienvenue sur<span class="green"> Weight</span><span class="orange">Light</span>, Inscrivez-vous !</p>

            <!-- NOM ET PRENOM -->

            <div class="field row">
                <div>
                    <label for="firstname">Prénom </label>
                    <input type="text" name="firstname" required>
                </div>

                <div>
                    <label for="lastname">Nom</label>
                    <input type="text" name="lastname" required>
                </div>
            </div>

            <!-- POIDS ET TAILLE -->

            <div class="field row">
                <div>
                    <label for="weight">Poids ( kg )</label>
                    <input type="number" name="weight" required>
                </div>

                <div>
                    <label for="height">Taille ( cm )</label>
                    <input type="number" name="height" required>
                </div>
            </div>

            <!-- EMAIL -->

            <div class="field">
                <label for="email">Adresse mail</label> <br>
                <input type="email" name="email" required>
            </div>

            <!-- PASSWORD -->

            <div class="field">
                <label for="password">Mot de passe</label> <br>
                <input type="password" name="password" required>
            </div>

            <!-- DATE DE NAISSANCE -->

            <div class="field">
                <label for="birthday">Date de naissance</label> <br>
                <input type="date" name="birthday" required>
            </div>

            <!-- BUTTON S'INSCRIRE -->
            <button type="submit" class="btnPrimary" value="Sign Up" name="create">S'inscrire</button>

            <p class="desc2"> Déjà inscrit? <span class="orange"> <a href="login.php" class="orange"> Connectez-vous.</a></span></p>

        </form>



        <!-- ILLUSTRATION -->

        <img src="images/home/diet.png" alt="">

    </div>

</body>

<!-- <footer>WeightLight &copy 2022 - IUT Calais</footer> -->

</html>
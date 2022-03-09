<?php require_once 'includes/nav2.php' ?>



<?php require_once 'db_con.php'; 
session_start();
if(isset($_SESSION['user_login'])){
	header('Location: homeuser.php');
}
	if (isset($_POST['login'])) {
		$email= $_POST['email'];
		$password= $_POST['password'];


		$input_arr = array();

		if (empty($email)) {
			$input_arr['input_user_error']= "Username Is Required!";
		}

		if (empty($password)) {
			$input_arr['input_pass_error']= "Password Is Required!";
		}

		if(count($input_arr)==0){
			$query = "SELECT * FROM `users` WHERE `email` = '$email';";
			$result = mysqli_query($db_con, $query);
			if (mysqli_num_rows($result)==1) {
				$row = mysqli_fetch_assoc($result);
				if ($row['password']==sha1(md5($password))) {
					if ($row['status']=='active') {
						$_SESSION['user_login']=$email;
						header('Location: homeuser.php');
					}else{
						$status_inactive = "Your Status is inactive, please contact with admin or support!";
					}
				}else{
					$worngpass= "This password Wrong!";	
				}
			}else{
				$usernameerr= "Username Not Found!";
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
    <!-- ICON WEIGHTLIGHT -->
    <link rel="icon" type="image/svg" href="images/logo/WL.png" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />
    <!-- utilities.css Représente le code css commun entre les pages -->
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Connexion</title>
</head>

<body>

    <div class="flex">

        <form action="" method="">

            <p class="desc1">Bienvenue sur<span class="green"> Weight</span><span class="orange">Light</span>,Connectez vous !</p>

            <div class="field">
                <label for="email">Email</label> <br>
                <input type="email" name="email" id="email" placeholder="Saisir votre email ici" required>
            </div>

            <div class="field">
                <label for="password">Mot de passe</label> <br>
                <input type="password" name="password" id="password" placeholder="Saisir votre mot de pass" required>
            </div>

            <?php if (isset($error)) {
                echo $error . "<br><br>";
            } ?>

            <button type="submit" name="submit" class="btnPrimary" value="Se Connecter" id="submit">Se Connecter</button>


            <p class="desc2"> Nouveau utilisateur ?<span class="orange"> <a href="signup.php" class="orange">Inscrivez-vous.</a></span></p>

        </form>

        <img src="images/home/lifestyle.jpg" alt="">

    </div>

</body>

<!-- <footer>WeightLight &copy 2022 - IUT Calais</footer> -->

</html>
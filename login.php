<?php require_once 'includes/nav2.php' ?>
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
    <title>WeightLight</title>
</head>

<body>

    <?php require_once 'class/BDD.php' ?>
    <?php // require_once 'class/Task.php' 
    ?>
    <?php require_once 'class/User.php' ?>
    <?php require_once 'class/Log.php' ?>


    <?php
    session_start();
    $db = new BDD('localhost', 'weightlight', 'root', '');

    $user = new User();
    $Log = new log("logDirect.txt");

    try {

        log::directWritelog("logDirect.txt", "log1", 1, "INFO");

        throw new Exception('Connexion  échoué.');
        log::directWritelog("logDirect.txt", "log1", 3, "ERROR");
    } catch (Exception $e) {
        log::directWritelog("logDirect.txt", "log2", 5, "CATCH ! " . $e);
        log::directWritelog("logDirect.txt", "log3", 3, "ERROR");
    } finally {
        log::directWritelog("logDirect.txt", "log4", 3, "ERROR");
    }

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $res = $user->connectUser($email, $password, $db);

        if ($res != 0) {
            header("Location: homeuser.php");
        } else {
            $error = "Invalid Credentials";
        }
    }
    ?>

    <div class="flex">

        <form action="" method="POST">
            <?php if (isset($error)) {
                echo $error;
            } ?>
            <p class="desc1">Bienvenue sur<span class="green"> Weight</span><span class="orange">Light</span>,Connectez vous !</p>

            <div class="field">
                <label for="email">Email</label> <br>
                <input type="email" name="email" id="email" placeholder="Saisir votre email ici" required>
            </div>

            <div class="field">
                <label for="password">Mot de passe</label> <br>
                <input type="password" name="password" id="password" placeholder="Saisir votre mot de pass" required>
            </div>

            <button type="submit" class="btnPrimary" value="Se Connecter" id="submit">Se Connecter</button>


            <p class="desc2"> Nouveau utilisateur ?<a href="signup.php"><span class="orange"> <a href="signup.php" class="orange">Inscrivez-vous.</a></span></a></p>

        </form>

        <img src="images/home/lifestyle.jpg" alt="">

    </div>

</body>

<footer>WeightLight &copy 2022 - IUT Calais</footer>

</html>
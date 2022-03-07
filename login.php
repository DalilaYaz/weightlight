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
    <title>Connexion</title>
</head>

<body>

    <?php require_once 'class/BDD.php' ?>
    <?php require_once 'class/User.php' ?>
    <?php require_once 'class/Log.php' ?>

    <?php session_start();
    $db = new BDD('localhost', 'weightlight', 'root', '');
    $user = new User();
    $Log = new log("logDirect.txt");

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $res = $user->connectUser($email, $password, $db);

        if ($res === 'admin') {
            header("Location: homeuser.php");
        } else if ($res === 'normal') {
            header("Location: homeuser.php");
        } else {
            $error = "Login ou mot de passe incorrect";
        }
    }
    ?>

    <div class="flex">

        <form action="" method="POST">

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

<footer>WeightLight &copy 2022 - IUT Calais</footer>

</html>
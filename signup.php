<?php require_once 'includes/nav2.php' ?>
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
    <?php require_once 'class/BDD.php' ?>
    <?php require_once 'class/User.php' ?>
    <?php require_once 'class/Log.php' ?>
    <?php session_start();

    $db = new BDD('localhost', 'weightlight', 'root', '');
    $user = new User();
    $Log = new log("logDirect.txt");
    if (isset($_POST['create'])) {
        $_POST['role'] = 'membre';
        $array = array();
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $weight = htmlspecialchars($_POST['weight']);
        $height = htmlspecialchars($_POST['height']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $birthday = htmlspecialchars($_POST['birthday']);

        array_push($array, $firstname, $lastname, $weight, $height, $email, $password, $birthday);


        $set = $user->set($array);
        if ($set) {
            $res = $user->addUser($db);
            if ($res) {
                $sucMsg = "User Added Successfully";
            } else {
                $sucMsg = "Failed to Add user";
            }
        } else {
            $sucMsg = "Failed to Set User";
        }
    }
    ?>

    <div class="flex">

        <form action="signup.php" method="POST">
            <p class="desc1">Bienvenue sur<span class="green"> Weight</span><span class="orange">Light</span>, Inscrivez-vous !</p>

            <!-- NOM ET PRENOM -->

            <div class="field row">
                <div>
                    <label for="firstname">Prénom </label>
                    <input type="text" name="firstname" required >
                </div>

                <div>
                    <label for="lastname">Nom</label>
                    <input type="text" name="lastname" required >
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
                <label for=password">Mot de passe</label> <br>
                <input type="password" name="password" required>
            </div>

            <!-- DATE DE NAISSANCE -->

            <div class="field">
                <label for="birthday">Date de naissance</label> <br>
                <input type="date" name="birthday" required>
            </div>

            <!-- SEXE

            <div class="row field">
                <label for="" class="sexLabel">Sexe</label>
                <div>
                    <input type="radio" name="Sexe" id="SexeChoice1">
                    <label for="SexeChoice1">Féminin</label>
                </div>

                <div>
                    <input type="radio" name="Sexe" id="SexeChoice2">
                    <label for="SexeChoice2">Masculin</label>
                </div>
            </div> -->

            <!-- BUTTON S'INSCRIRE -->
            <button type="submit" class="btnPrimary" value="Sign Up" name="create">S'inscrire</button>
            <?php if (isset($sucMsg)) {
                echo $sucMsg;
            } ?>
        </form>
        <p class="desc2"> Déjà inscrit ?<a href="login.php" class="orange">Connectez-vous.</a></span></a></p>


        <!-- ILLUSTRATION -->

        <img src="images/home/diet.png" alt="">

    </div>

</body>

<footer>WeightLight &copy 2022 - IUT Calais</footer>

</html>
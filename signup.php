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

    <div class="flex">

    <form action=" " method="post">
            <p class="desc1">Bienvenue sur<span class="green"> Weight</span><span class="orange">Light</span>, Inscrivez-vous !</p>

            <!-- NOM ET PRENOM -->

            <div class="field row">
                <div>
                    <label for="firstName">Prénom </label>
                    <input type="text" name="firstName" id="firstName">
                </div>

                <div>
                    <label for="lastName">Nom</label>
                    <input type="text" name="lastName" id="lastName">
                </div>
            </div>

            <!-- POIDS ET TAILLE -->

            <div class="field row">
                <div>
                    <label for="weight">Poids ( kg )</label>
                    <input type="number" name="weight" id="weight">
                </div>

                <div>
                    <label for="height">Taille ( cm )</label>
                    <input type="number" name="height" id="height">
                </div>
            </div>

            <!-- EMAIL -->

            <div class="field">
                <label for="email">Email</label> <br>
                <input type="email" name="email" id="email">
            </div>

            <!-- PASSWORD -->

            <div class="field">
                <label for="">Mot de passe</label> <br>
                <input type="password" name="password" id="password">
            </div>

            <!-- DATE DE NAISSANCE -->

            <div class="field">
                <label for="birthday">Date de naissance</label> <br>
                <input type="date" name="birthday" id="birthday">
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
            <button type="submit" class="btnPrimary" value="S'inscrire">S'inscrire</button>
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
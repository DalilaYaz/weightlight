<?php require_once 'includes/nav2.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="stylesheet" href="css/signup.css">

</head>

<body>


    <div class="flex">

        <form action="" method="">
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
                    <label for="weight">Poids</label>
                    <input type="number" name="weight" id="weight">
                </div>

                <div>
                    <label for="height">Taille</label>
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
                <label for="">Mot de pass</label> <br>
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

            <!-- <p class="desc2"> Déja inscrit?<a href="signup.php"><span class="orange"> Connectez-vous.</span></a></p> -->

        </form>

        <!-- ILLUSTRATION -->

        <img src="images/home/diet.png" alt="">

    </div>

</body>

<footer>WeightLight &copy 2022 - IUT Calais</footer>

</html>


<!-- <label for=""><b>Prenom</b></label><br>
            <input type="text" name="" id=""><br>

            <label for=""><b>Nom</b></label><br>
            <input type="text" name="" id=""><br>

            <label for=""><b>Email</b></label><br>
            <input type="text" name="" id=""><br>

            <label for=""><b>Mot de passe</b></label><br>
            <input type="text" name="" id=""><br>

            <label for=""><b>Sexe</b></label><br>
            <input type="radio" name="Sexe" id="SexeChoice1">
            <label for="SexeChoice1">Féminin</label>
            <input type="radio" name="Sexe" id="SexeChoice2">
            <label for="SexeChoice2">Masculin</label>
            <input type="radio" name="Sexe" id="SexeChoice3">
            <label for="SexeChoice3">Autre</label> <br>

            <label for=""><b>Poids</b></label><br>
            <input type="text" name="" id=""><br>
            <label for=""><b>Taille</b></label><br>
            <input type="text" name="" id=""><br>
            <label for=""><b>Date de naissance</b></label><br>
            <input type="text" name="" id=""><br>
            <input type="button" value="Créer en compte"><br>

            <p>Déjà inscrit ?</p><a href="./login.php">Connectez-vous</a><br>
        </div>
        <img id="signImg" src="./images/home/diet.png" alt="" srcset="">


</body>

</html>
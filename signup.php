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


            <p class="desc2"> Déjà inscrit ?<a href="login.php" class="orange"> Connectez-vous.</a></span></a></p>
        </form>



        <!-- ILLUSTRATION -->

        <img src="images/home/diet.png" alt="">

    </div>

</body>

<!-- <footer>WeightLight &copy 2022 - IUT Calais</footer> -->

</html>
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
    <link rel="stylesheet" href="css/homePage.css">
    <title>WeightLight</title>
</head>

<body>

    <!-- ================== ShowCase ===================== -->

    <section class="showCase">

        <div class="row">
            <div>
                <h2 class="quote">Vivez votre régime dans <span class="green">l’harmonie</span>
                    et le <span class="orange">confort.</span></h2>

                <button type="submit" class="btnPrimary" value="S'inscrire"><a href="signup.php">S'inscrire</a></button>

                <button type="submit" class="btnSecondary" value="Se Connecter"><a href="login.php">Se connecter</a></button>
            </div>

            <img src="images/home/main.jpg" alt="">
        </div>

    </section>

    <!-- ================== Fonctionnality ===================== -->

    <section class="fonctionnalite">


        <div>
            <h2>Fonctionnalités de WeightLight</h2>

            <div class="row">
                <div>
                    <img src="images/home/fct1.png" alt="">
                    <p>Suivez votre poids</p>
                </div>

                <div class="center">
                    <img src="images/home/fct2.png" alt="">
                    <p>Meilleur traqueur de calories</p>
                </div>

                <div>
                    <img src="images/home/fact3.png" alt="">
                    <p>Régime alimentaire</p>
                </div>

                <div>
                    <img src="images/home/fact4.png" class="" alt="">
                    <p>Programme de repas</p>
                </div>
            </div>


        </div>
    </section>

    <!-- ================== ShowCase ===================== -->

    <section class="testimonials">
        <h2 class="title">Avis de Nos Clients</h2>
        <div class="cards">
            <div class="card">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>Superbe application de suivi ! J'adore ! Peut être mettre un peu plus d'aliments qu'on puisse saisir. </p>
                <h3 class="avisName">Ailee</h3>
            </div>

            <div class="card">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Très bonne application. C'est facile à utiliser et cela m'a beaucoup aidé à suivre mon poids et ce que je mange pendant la journée. Merci pour ce travail incroyable.</p>
                <h3 class="avisName">Natalie</h3>
            </div>

            <div class="card">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>Bonne application dans l'ensemble, quelques problèmes et bogues à régler</p>
                <h3 class="avisName">Albert</h3>
            </div>
        </div>
    </section>

    <!-- ================== NewsLetter ===================== -->


    <section class="newsletter">

        <div class="content">

            <div class="leftCol">
                <h2><i class="fas fa-paper-plane"></i>NewsLetter</h2>

                <p class="desc">Inscrivez-vous et vous recevrez des informations sur les dernières mises à jour et nouvelles sur la plate-forme <span class="green"> weight</span><span class="orange">light.</span></p>
            </div>

            <div class="rightCol">
                <input type="text" name="name" id="name" placeholder="Votre Nom">

                <input type="email" name="email" id="email" placeholder="Votre Email Address">

                <button type="submit" class="btn" value="Adhérer maintenant!">Adhérer maintenant!</button>

            </div>

        </div>


    </section>

    <footer>
        <p>WeightLight &copy; 2022 IUT CALAIS</p>
    </footer>



</body>


</html>
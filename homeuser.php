<?php require_once 'includes/nav1.php' ?>
<?php
session_start();

if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
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
    <link rel="stylesheet" href="css/homeuser.css">
    <title>WeightLight</title>
</head>

<body>
    <main>
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success">
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <!-- logged in user information -->

        <?php
        include('database.php');
        // Return current date from the remote server
        $today = date("d/m/y");



        ?>

        <div class="headerInfo">
            <div class="greenBlock flex">
                <h3>Hi, <?php

                        $search_query = "SELECT prenomUt FROM utilisateur WHERE email = '{$_SESSION['email']}'  ";
                        $result = mysqli_query($db, $search_query);
                        while ($donnees = mysqli_fetch_array($result)) {
                            echo $donnees['prenomUt'];
                        }
                        ?> ! Voici votre résumé quotidien</h3>
                <span><?php echo $today ?></span>
            </div>

            <div class="flex">
                <div>
                    <p class="image"> Charger une photo</p>
                    <div class="flex">
                        <p class="weight">Poids :
                            <?php $search_query = "SELECT poids FROM utilisateur WHERE email = '{$_SESSION['email']}'  ";
                            $result = mysqli_query($db, $search_query);
                            while ($donnees = mysqli_fetch_array($result)) {
                                echo $donnees['poids'];
                            } ?> Kg </p>
                        <a href="modifyPoids.php"><i class="fas fa-edit"></i></a>
                    </div>

                </div>

                <div class="mg">
                    <p>Petit-déjeuner :

                        <?php
                        $search_query = "
        SELECT SUM(calories) FROM repas r INNER JOIN consommer c ON r.idRepas = c.idRepas
        WHERE c.idUser = ( SELECT idUser FROM utilisateur WHERE prenomUt LIKE 'test1' )
        AND c.idType = 1
        AND c.dateCons = CURRENT_DATE 
        ";
                        $result = mysqli_query($db, $search_query);
                        while ($donnees = mysqli_fetch_array($result)) {
                            echo $donnees['SUM(calories)'];
                        }
                        ?>
                    </p>
                    <p> Déjeuner :
                        <?php
                        $search_query = "SELECT SUM(calories) FROM repas r INNER JOIN consommer c ON r.idRepas = c.idRepas
                                         WHERE c.idUser = ( SELECT idUser FROM utilisateur WHERE prenomUt LIKE 'test1' )
                                         AND c.idType = 2
                                         AND c.dateCons = CURRENT_DATE";
                        $result = mysqli_query($db, $search_query);
                        while ($donnees = mysqli_fetch_array($result)) {
                            echo $donnees['SUM(calories)'];
                        }
                        ?></p>
                    <p> Collation : <?php
                                    $search_query = "SELECT SUM(calories) FROM repas r INNER JOIN consommer c ON r.idRepas = c.idRepas
                                         WHERE c.idUser = ( SELECT idUser FROM utilisateur WHERE prenomUt LIKE 'test1' )
                                         AND c.idType = 3
                                         AND c.dateCons = CURRENT_DATE";
                                    $result = mysqli_query($db, $search_query);
                                    while ($donnees = mysqli_fetch_array($result)) {
                                        echo $donnees['SUM(calories)'];
                                    }
                                    ?></p>
                    <p>Dîner : <?php
                                $search_query = "SELECT SUM(calories) FROM repas r INNER JOIN consommer c ON r.idRepas = c.idRepas
                                         WHERE c.idUser = ( SELECT idUser FROM utilisateur WHERE prenomUt LIKE 'test1' )
                                         AND c.idType = 4
                                         AND c.dateCons = CURRENT_DATE";
                                $result = mysqli_query($db, $search_query);
                                while ($donnees = mysqli_fetch_array($result)) {
                                    echo $donnees['SUM(calories)'];
                                }
                                ?></p>
                    <p>Totale de calories : <?php
                                            $search_query = "SELECT SUM(calories) FROM repas r INNER JOIN consommer c ON r.idRepas = c.idRepas
                                         WHERE c.idUser = ( SELECT idUser FROM utilisateur WHERE prenomUt LIKE 'test1' )
                                         AND c.dateCons = CURRENT_DATE";
                                            $result = mysqli_query($db, $search_query);
                                            while ($donnees = mysqli_fetch_array($result)) {
                                                echo $donnees['SUM(calories)'];
                                            }
                                            ?></p>
                </div>


                <div class="mg mg-2">
                    <p>Nombre de Repas : <?php
                                            $search_query = "SELECT COUNT(*) FROM type";
                                            $result = mysqli_query($db, $search_query);
                                            while ($donnees = mysqli_fetch_array($result)) {
                                                echo $donnees['COUNT(*)'];
                                            }
                                            ?></p>
                    <p>Sport :
                        <?php
                        $search_query = "SELECT nomSport FROM sport s INNER JOIN pratiquer p ON s.idSport = p.idSport
                                         WHERE p.idUser = ( SELECT idUser FROM utilisateur WHERE prenomUt LIKE 'test1' )
                                         AND p.dateSport = CURRENT_DATE";
                        $result = mysqli_query($db, $search_query);
                        while ($donnees = mysqli_fetch_array($result)) {
                            echo $donnees['nomSport'];
                        }
                        ?>
                    </p>
                </div>
            </div>

            <?php

            ?>
        </div>
        <div style="width:100%; margin-top:5rem">
            <canvas id="myChart"></canvas>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
        </div>
    </main>

    <script src="js/homeUser.js"></script>
</body>


</html>
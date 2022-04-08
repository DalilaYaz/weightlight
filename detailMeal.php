<?php require_once 'includes/nav1.php';
include('database.php');
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
    <link rel="stylesheet" href="css/detailMeal.css">
    <title>WeightLight</title>
</head>

<body>
    <main>
        <div class="detail">
            <?php if ($_GET["idType"] == 1) {
                echo "<img src='images/meals/breakfast.png' alt='Petit déjeuner'>";
            } else if ($_GET["idType"] == 2) {
                echo "<img src='images/meals/lunch.png' alt='Déjeuner'>";
            } else if ($_GET["idType"] == 3) {
                echo "<img src='images/meals/collation.png' alt='Collation'>";
            } else if ($_GET["idType"] == 4) {
                echo "<img src='images/meals/dinner.png' alt='Dîner'>";
            }
            ?>

            <p>
                <?php
                $type_query = "SELECT nomType FROM `type` WHERE idType = '{$_GET["idType"]}'  ";
                $result = mysqli_query($db, $type_query);
                while ($donnees = mysqli_fetch_array($result)) {
                    echo strtoupper($donnees['nomType']);
                }
                ?>
            </p>
            <div class="caloriesInfo">
                <div class="intro">
                    <p>Bonjour <span class="orange"><?php
                                                    $search_query = "SELECT prenomUt FROM utilisateur WHERE email = '{$_SESSION['email']}'  ";
                                                    $result = mysqli_query($db, $search_query);
                                                    while ($donnees = mysqli_fetch_array($result)) {
                                                        echo $donnees['prenomUt'];
                                                    }
                                                    ?> </span></p>

                </div>
                <?php
                include('database.php');
                $meal_query = "
                SELECT repas.intitule, repas.calories, repas.idRepas
                FROM repas 
                JOIN consommer 
                ON repas.idRepas = consommer.idRepas
                WHERE consommer.dateCons = CURRENT_DATE
                AND consommer.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
                AND consommer.idType = " . $_GET['idType'];


                $result = mysqli_query($db, $meal_query);
                $array = array();
                if ($result->num_rows == 0) {
                    echo " Vous n'avez rien consommé durant ce repas";
                } else {
                    while ($donnees = mysqli_fetch_array($result)) {
                        array_push($array, $donnees['calories']);
                        echo "<p>vous avez consommé pendant ce repas :</p>";
                        echo "<p> 👉 " . $donnees['intitule'] . " ( " . $donnees['calories'] . " kcal )" . " <a href='deleteMeal.php?idRepas={$donnees['idRepas']}'><i class='fas fa-trash'></i></a>";
                        echo " <a href='modifyMeal.php?idRepas=";
                        echo $donnees['idRepas'] . "'";
                        echo "><i class='fas fa-edit'></i></a>";
                        echo "</p>";
                    }
                }
                $sum = array_sum($array);
                ?>
                
                <p><br/>Total du repas : <span class="green"><?php echo $sum ?> Kcal </span> obtenu.</p>
            </div>
        </div>
    </main>

</body>

</html>
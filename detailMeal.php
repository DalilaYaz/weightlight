<?php require_once 'includes/nav1.php';
include('database.php');    
session_start();
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
            <img src="images/meals/breakfast.png" alt="">
            <p>PETIT DÉJEUNER</p>
            <div class="caloriesInfo">
                <div class="intro">
                    <p>Bonjour <span class="orange"><?php
                        $search_query = "SELECT prenomUt FROM utilisateur WHERE email = '{$_SESSION['email']}'  ";
                        $result = mysqli_query($db, $search_query);
                        while ($donnees = mysqli_fetch_array($result)) {
                            echo $donnees['prenomUt'];
                        }
                        ?> </span></p>
                    <p>vous avez consommé pendant ce repas :</p>
                </div>
                <?php
                include('database.php');
                $meal_query = "
                SELECT repas.intitule, repas.calories, repas.idRepas
                FROM repas 
                JOIN consommer 
                ON repas.idRepas = consommer.idRepas
                WHERE consommer.dateCons = CURRENT_DATE
                AND consommer.idType = " . $_GET['idType'] ;
                
                $result = mysqli_query($db, $meal_query);
                $array = array();
                while ($donnees = mysqli_fetch_array($result)) {
                    array_push($array, $donnees['calories']);

                    echo "<p> - " . $donnees['intitule'] . " ( " . $donnees['calories'] . " kcal )" . " <a href='deleteMeal.php?idRepas={$donnees['idRepas']}'><i class='fas fa-minus-circle'></i></a>" . "</p>";
                }
                $sum = array_sum($array);
                ?>
                <p>Total de la journée : <span class="green"><?php echo $sum ?> Kcal </span> obtenu pendant votre repas.</p>
            </div>
        </div>
    </main>

</body>

</html>
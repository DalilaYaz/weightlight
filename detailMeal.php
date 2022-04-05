<?php require_once 'includes/nav1.php' ?>

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
                    <p>Bonjour <span class="orange">Daniel Commandant </span></p>
                    <p>vous avez consommé pendant ce repas :</p>
                </div>
                <?php
                include('database.php');
                $meal_query = "SELECT * FROM repas";
                $result = mysqli_query($db, $meal_query);
                $array = array();
                while ($donnees = $result->fetch_assoc()) {
                    array_push($array, $donnees['calories']);

                ?>

                    <p>
                        <?php echo $donnees['intitule']; ?>
                        <?php echo "( " . $donnees['calories'] . " kcal )"  ?>

                    </p>

                <?php
                }
                $sum = array_sum($array);
                ?>
                <p>Total de la journée : <span class="green"><?php echo $sum ?> Kcal </span> obtenu pendant votre repas.</p>
            </div>
        </div>
    </main>

</body>

</html>
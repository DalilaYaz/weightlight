<?php require_once 'includes/nav1.php' ?>

<?php $today = date("d/m/y"); ?>
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
    <link rel="stylesheet" href="css/details.css">
    <title>WeightLight</title>
</head>

<body>

    <div class="cards">

        <!-- card 1 graphe -->
        <div class="card1">
            <p class="desc1">Votre journal alimentaire pour le : <?php echo $today ?></p>
            <div style="height: 200px; margin-top: 1.3rem;">
                <canvas id="graph"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
            </div>

        </div>

        <!-- card 2 meals -->

        <div class="card2">

            <!-- =========== Block PETIT DÉJEUNER =========== -->

            <div class="row underline">
                <div class="row">
                    <img src="images/meals/breakfast.png" alt="">
                    <p class="mealType">PETIT <br> DÉJEUNER</p>
                </div>

                <div class="icons row">
                    <a href="detailMeal.php"><i class="fas fa-info-circle"></i></a>
                    <a href="addMeals.php"><i class="fas fa-plus-circle"></i></a>
                    <a href="deleteMeal.php"><i class="fas fa-pen-square"></i></a>
                </div>
            </div>

            <!-- =========== Block DÉJEUNER =========== -->

            <div class="row underline">
                <div class="row">
                    <img src="images/meals/lunch.png" alt="">
                    <p class="mealType">DÉJEUNER</p>
                </div>
                <div class="icons row">
                    <a href="detailMeal.php"><i class="fas fa-info-circle"></i></a>
                    <a href="addMeals.php"><i class="fas fa-plus-circle"></i></a>
                    <a href="modifyMeal.php"><i class="fas fa-pen-square"></i></a>
                </div>
            </div>

            <!-- =========== Block COLLATION =========== -->

            <div class="row underline">
                <div class="row">
                    <img src="images/meals/collation.png" alt="">
                    <p class="mealType">COLLATION</p>
                </div>
                <div class="icons row">
                    <a href="detailMeal.php"><i class="fas fa-info-circle"></i></a>
                    <a href="addMeals.php"><i class="fas fa-plus-circle"></i></a>
                    <a href="modifyMeal.php"><i class="fas fa-pen-square"></i></a>
                </div>
            </div>

            <!-- =========== Block DîNER =========== -->

            <div class="row underline">
                <div class="row">
                    <img src="images/meals/dinner.png" alt="">
                    <p class="mealType">DîNER</p>
                </div>
                <div class="icons row">
                    <a href="detailMeal.php"><i class="fas fa-info-circle"></i></a>
                    <a href="addMeals.php"><i class="fas fa-plus-circle"></i></a>
                    <a href="modifyMeal.php"><i class="fas fa-pen-square"></i></a>
                </div>
            </div>
        </div>


    </div>

    <script src="js/details.js"></script>

</body>


</html>
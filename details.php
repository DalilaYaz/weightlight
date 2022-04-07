<?php require_once 'includes/nav1.php';
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
            <?php
                include('database.php');
                
                ?>
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
                <?php
                $meal_query = "
                SELECT  repas.calories
                FROM repas 
                JOIN consommer 
                ON repas.idRepas = consommer.idRepas
                WHERE consommer.dateCons = CURRENT_DATE
                AND consommer.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
                AND consommer.idType = 1" ;
                
                $result = mysqli_query($db, $meal_query);
                $array = array();
                while ($donnees = mysqli_fetch_array($result)) {
                    array_push($array, $donnees['calories']);
                }
                $sum1 = array_sum($array);
                echo $sum1 ." kcal";
                ?>
                <div class="icons row">
                    <a href="detailMeal.php?idType=1"><i class="fas fa-info-circle"></i></a>
                    <a href="addMeals.php?idType=1"><i class="fas fa-plus-circle"></i></a>
                </div>
            </div>

            <!-- =========== Block DÉJEUNER =========== -->

            <div class="row underline">
                <div class="row">
                    <img src="images/meals/lunch.png" alt="">
                    <p class="mealType">DÉJEUNER</p>
                </div>
                <?php
                $meal_query = "
                SELECT  repas.calories
                FROM repas 
                JOIN consommer 
                ON repas.idRepas = consommer.idRepas
                WHERE consommer.dateCons = CURRENT_DATE
                AND consommer.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
                AND consommer.idType = 2" ;
                
                $result = mysqli_query($db, $meal_query);
                $array = array();
                while ($donnees = mysqli_fetch_array($result)) {
                    array_push($array, $donnees['calories']);
                }
                $sum2 = array_sum($array);
                echo $sum2 ." kcal";
                ?>
                <div class="icons row">
                    <a href="detailMeal.php?idType=2"><i class="fas fa-info-circle"></i></a>
                    <a href="addMeals.php?idType=2"><i class="fas fa-plus-circle"></i></a>
                </div>
            </div>

            <!-- =========== Block COLLATION =========== -->

            <div class="row underline">
                <div class="row">
                    <img src="images/meals/collation.png" alt="">
                    <p class="mealType">COLLATION</p>
                </div>
                <?php
                $meal_query = "
                SELECT  repas.calories
                FROM repas 
                JOIN consommer 
                ON repas.idRepas = consommer.idRepas
                WHERE consommer.dateCons = CURRENT_DATE
                AND consommer.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
                AND consommer.idType = 3" ;
                
                $result = mysqli_query($db, $meal_query);
                $array = array();
                while ($donnees = mysqli_fetch_array($result)) {
                    array_push($array, $donnees['calories']);
                }
                $sum3 = array_sum($array);
                echo $sum3 ." kcal";
                ?>
                <div class="icons row">
                    <a href="detailMeal.php?idType=3"><i class="fas fa-info-circle"></i></a>
                    <a href="addMeals.php?idType=3"><i class="fas fa-plus-circle"></i></a>
                </div>
            </div>

            <!-- =========== Block DîNER =========== -->

            <div class="row underline">
                <div class="row">
                    <img src="images/meals/dinner.png" alt="">
                    <p class="mealType">DîNER</p>
                </div>
                <?php
                $meal_query = "
                SELECT  repas.calories
                FROM repas 
                JOIN consommer 
                ON repas.idRepas = consommer.idRepas
                WHERE consommer.dateCons = CURRENT_DATE
                AND consommer.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
                AND consommer.idType = 4" ;
                
                $result = mysqli_query($db, $meal_query);
                $array = array();
                while ($donnees = mysqli_fetch_array($result)) {
                    array_push($array, $donnees['calories']);
                }
                $sum4 = array_sum($array);
                echo $sum4 ." kcal";

                $sum5 = $sum1 + $sum2 + $sum3 + $sum4;
                ?>
                
                <div class="icons row">
                    <a href="detailMeal.php?idType=4"><i class="fas fa-info-circle"></i></a>
                    <a href="addMeals.php?idType=4"><i class="fas fa-plus-circle"></i></a>
                </div>

                
            </div>
            TOTAL : <?php echo $sum5 ?> Kcal

        </div>


    </div>

    <!-- <script src="js/details.js"></script> -->
<script>
    //graphe
var varsum1 = <?php echo json_encode($sum1)?> / <?php echo json_encode($sum5)?> * 100;
var varsum2 = <?php echo json_encode($sum2)?> / <?php echo json_encode($sum5)?> * 100;
var varsum3 = <?php echo json_encode($sum3)?> / <?php echo json_encode($sum5)?> * 100;
var varsum4 = <?php echo json_encode($sum4)?> / <?php echo json_encode($sum5)?> * 100;
const graph = document.getElementById('graph').getContext('2d');
let myChart = new Chart(graph, {
    type: 'doughnut',
    data: {
        labels: ['Petit déjeuner', 
        'Déjeuner', 
        'Collation', 
        'Dîner'],
        datasets: [{
            label: 'Total de la journée: 2265 KCAL',
            data: [varsum1, varsum2, varsum3, varsum4],
            backgroundColor: [
                'rgba(67, 164, 216, 1)',
                'rgba(241, 146, 51, 1)',
                'rgba(251, 226, 4, 1)',
                'rgba(126, 243, 122, 1)',
            ],
            
            borderWidth: 1
        }]
    },

    
    options:{
      responsive: true,
      maintainAspectRatio: false,
      
      plugins: {
        legend: {
          display: true,
          position: 'right',
         
        },
        
      },
      title:{
        display: true,
        text:"Calories",
        fontSize: 14,
        
      },

      layout:{
        padding:{
        top: 10,
        
        },
      },

    },

   
});
</script>
</body>


</html>
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
        <div class="headerInfo">
            <div class="greenBlock flex">
                <h3>Hi, Daniel Commandant ! Voici votre résumé quotidien</h3>
                <span>11/01/2022</span>
            </div>

            <div class="flex">
                <div>
                    <p class="image"> Charger une photo</p>
                    <div class="flex">
                        <p class="weight">Poids : 60Kg </p>
                        <i class="fas fa-edit"></i>
                    </div>

                </div>

                <div class="mg">
                    <p>Petit-déjeuner : 200</p>
                    <p>Collation Midi : 200</p>
                    <p>Dîner : 120 </p>
                    <p>Totale de calories : 520</p>
                </div>


                <div class="mg mg-2">
                    <p>Nombre de Repas : 3</p>
                    <p>Journée : 12/12/2022</p>
                    <p>Sport : Velo</p>
                </div>
            </div>


        </div>
        <div style="width:100%; margin-top:5rem">
            <canvas id="myChart"></canvas>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
        </div>
    </main>

    <script src="js/homeUser.js"></script>
</body>


</html>
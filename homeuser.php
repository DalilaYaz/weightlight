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

                <div>
                    <p>Nombre de Repas :</p>
                    <p>Nombre de Repas :</p>
                    <p>Nombre de Repas :</p>
                </div>
                <div>
                    <p>Nombre de Repas :</p>
                    <p>Nombre de Repas :</p>
                    <p>Nombre de Repas :</p>
                </div>
            </div>


        </div>
        
            <canvas id="graph"></canvas>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    </main>

    <script src="js/homeUser.js"></script>
</body>


</html>
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sportslist.css">
    <title>WeightLight</title>
</head>

<body>
    <div class="flex">
        <div>
            <div class="dropdown">
                <label for="sport-select">Activité sportif </label>
                <select name="sports" id="sport-select">
                    <option value="">Nom de l'activité</option>
                    <option value="dog">Course à pieds</option>
                    <option value="cat">Football</option>
                    <option value="hamster">Basket-ball</option>
                    <option value="parrot">Natation</option>
                    <option value="spider">Cyclisme</option>
                    <option value="goldfish">Pêche</option>
                </select>
            </div>

            <div class="dropdown">
                <label for="duration-select">Duration </label>
                <select name="duration" id="duration-select">
                    <option value="">Duration</option>
                    <option value="5m">5 minutes</option>
                    <option value="10m">10 minutes</option>
                    <option value="15m">15 minutes</option>
                    <option value="20m">20 minutes</option>
                    <option value="30m">30 minutes</option>
                    <option value="45m">45 minutes</option>
                    <option value="1h">1 heure</option>
                    <option value="2h">2 heures</option>
                    <option value="3h">3 heures</option>
                </select>
            </div>


            <button type="submit" class="btnPrimary" value="Ajouter">Ajouter</button>

        </div>

        <img src="./images/sports/foot.png" alt="">

    </div>


</body>


</html>
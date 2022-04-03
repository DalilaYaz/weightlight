<?php require_once 'includes/nav1.php' ?>
<?php

include "database.php";

if (isset($_POST['submit'])) {

    $nomSport = $_POST['nomSport'];

    $duree = $_POST['duree'];

    $sql = "INSERT INTO `sport`(`nomSport`, `duree`) VALUES ('$nomSport','$duree')";

    $result = $db->query($sql);

    if ($result == TRUE) {

        echo '<script>alert("Sport ajouté avec succès")</script>';
    } else {

        echo "Error:" . $sql . "<br>" . $db->error;
    }

    $db->close();
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/addMeal.css">
    <title>WeightLight</title>
</head>

<body>
    <div class="flex">
        <div class="">

            <form action="" method="POST">

                <div class="field">
                    <label for="nomSport">Nom du Sport</label> <br>
                    <input type="text" name="nomSport" id="nomSport">
                </div>

                <div class="field">
                    <label for="duree">Durée</label> <br>
                    <input type="text" name="duree" id="duree">
                </div>

                <button type="submit" name="submit" class="btnPrimary" value="Ajouter" id="submit">Ajouter</button>

            </form>
        </div>

        <img src="./images/sports/foot.png" alt="">

    </div>

    <!-- <form action="code.php" method="POST">

                <div class="from-group mb-3">
                    <label for="nomSport"></label>
                    <select name="nomSport" class="form-control">
                        <option value="">-- Nom de l'activité -- </option>
                        <option value="Football">Football</option>
                        <option value="Natation">Natation</option>
                        <option value="Basket-ball">Basket-ball</option>
                        <option value="Course à pied">Course à pied</option>
                        <option value="Pêche">Pêche</option>
                    </select>
                </div>
                <div class="from-group mb-3">
                    <button type="submit" class="btnPrimary" name="save_select" value="Ajouter">Ajouter</button>

                </div>
            </form> -->

    <!-- <div class="dropdown">
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
            </div> -->

    <!-- <div class="dropdown">
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
            </div> -->




</body>

</html>
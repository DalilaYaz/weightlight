<?php require_once 'includes/nav1.php' ?>

<?php

include "database.php";
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

if (isset($_POST['submit']) && isset($_GET['idRepas'])) {

    $idRepas  = $_GET['idRepas'];
    $intitule = $_POST['intitule'];
    $calories = $_POST['calories'];

    $sql = "UPDATE repas 
    SET intitule = '{$intitule}',calories = '{$calories}'
    WHERE idRepas = {$_GET['idRepas']}";
    $result = $db->query($sql);
    if ($result == true) {
        header('location: details.php');
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
    <link rel="stylesheet" href="css/addMeal.css">
    <title>WeightLight</title>
</head>


<body>
    <div class="mainBlock">
        <h3>Modifier un Repas</h3>
        <form action="" method="POST">

            <div class="field">
                <label for="intitule">Nom du repas</label> <br>
                <?php
                echo "<input type='text' name='intitule' id='intitule' value='";
                $sql = "SELECT intitule
                        FROM repas
                        WHERE idRepas = {$_GET['idRepas']}";
                $result = $db->query($sql);
                while ($donnees = mysqli_fetch_array($result)) {
                    echo $donnees['intitule'] . "' required>";
                }  
                 
                ?>
            </div>

            <div class="field">
                <label for="calories">Calories ( kcal )</label> <br>
                <?php
                echo "<input type='text' name='calories' id='calories' value='";
                $sql = "SELECT calories
                        FROM repas
                        WHERE idRepas = {$_GET['idRepas']}";
                $result = $db->query($sql);
                while ($donnees = mysqli_fetch_array($result)) {
                    echo $donnees['calories'] . "' required>";
                }  
                 
                ?>
                
            </div>


            <button type="submit" name="submit" class="btnPrimary" value="Modifier" id="submit">Modifier</button>


        </form>
    </div>
</body>

</html>
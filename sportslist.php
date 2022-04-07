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

if (isset($_POST['submit'])) {
    if (preg_match("/^[a-zA-Z]+$/", $_POST['nomSport'])) {
        $nomSport = $_POST['nomSport'];
        $duree = $_POST['duree'];

        $sql = "INSERT INTO `sport`(`nomSport`, `duree`) VALUES ('$nomSport','$duree')";
        $result = $db->query($sql);

        $search_query = "SELECT idSport,duree FROM sport WHERE nomSport = '$nomSport' AND idSport = ( SELECT MAX( idSport ) FROM sport )";
        $result2 = mysqli_query($db, $search_query);
        $array = array();
        while ($donnees = mysqli_fetch_array($result2)) {
            array_push($array, $donnees['idSport'], $donnees['duree']);
        }

        $search_id = "SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}'";
        $result_id = mysqli_query($db, $search_id);
        while ($donnees = mysqli_fetch_array($result_id)) {
            $idUser = $donnees['idUser'];
        }
        $sql2 = "INSERT INTO pratiquer VALUES ( $idUser , $array[0] , $array[1]  , CURRENT_DATE )";
        $result3 = $db->query($sql2);
        if ($result == TRUE) {
            header('location: homeuser.php');
        } else {

            echo "Error:" . $sql . "<br>" . $db->error;
        }

        $db->close();
    }else {
        echo "<script>alert('Nom de sport invalide, veuillez réessayer !')</script>";
    }
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
    <link rel="stylesheet" href="css/sportslist.css">
    <link rel="stylesheet" href="css/addMeal.css">
    <title>WeightLight</title>
</head>

<body>
    <div class="flex">
        <div class="">

            <form action="" method="POST">
                <div class="field">
                    <label for="nomSport">Nom du Sport</label> <br>
                    <input type="text" name="nomSport" id="nomSport" required>
                </div>
                <div class="field">
                    <label for="duree">Durée</label> <br>
                    <input type="number" name="duree" id="duree" required>
                </div>
                <button type="submit" name="submit" class="btnPrimary" value="Ajouter" id="submit">Ajouter</button>

            </form>

        </div>

        <img src="./images/sports/foot.png" alt="">

    </div>

</body>

</html>
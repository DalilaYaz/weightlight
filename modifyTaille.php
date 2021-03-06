<?php require_once 'includes/nav1.php' ?>
<?php
include('database.php');
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
    
    $taille = $_POST['taille'];
    $sql = "UPDATE utilisateur SET taille = {$taille} WHERE idUser = ( SELECT idUser WHERE email = '{$_SESSION['email']}' ) ";
    $result = $db->query($sql);
    if ($result == true) {

        header('location: homeuser.php');
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
        <h3>Modifier votre Taille</h3>
        <form action="modifyTaille.php" method="POST">

            <div class="field">
                <label for="Taille">Taille ( cm )</label> <br>
                <?php
                echo "<input type='number' name='taille' id='taille' value='";
                $sql = "SELECT taille
                        FROM utilisateur
                        WHERE idUser = ( SELECT idUser WHERE email = '{$_SESSION['email']}' )";
                $result = $db->query($sql);
                while ($donnees = mysqli_fetch_array($result)) {
                    echo $donnees['taille'] . "' required>";
                }  
                 
                ?>

            </div>


            <button type="submit" name="submit" class="btnPrimary" value="Modifier" id="submit">Modifier</button>

        </form>
    </div>
</body>



</html>
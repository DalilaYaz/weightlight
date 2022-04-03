<?php require_once 'includes/nav1.php' ?>
<?php

include "database.php";

if (isset($_POST['submit'])) {

  $intitule = $_POST['intitule'];

  $calories = $_POST['calories'];

  $sql = "INSERT INTO `repas`(`intitule`, `calories`) VALUES ('$intitule','$calories')";

  $result = $db->query($sql);

  if ($result == TRUE) {

    echo '<script>alert("Repas ajouté avec succès")</script>';
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
    <h3>Ajouter un Repas</h3>
    <form action="" method="POST">

      <div class="field">
        <label for="intitule">Nom du repas</label> <br>
        <input type="text" name="intitule" id="intitule">
      </div>

      <div class="field">
        <label for="calories">Calories</label> <br>
        <input type="text" name="calories" id="calories">
      </div>


      <button type="submit" name="submit" class="btnPrimary" value="Ajouter" id="submit">Ajouter</button>


    </form>
  </div>
</body>

</html>
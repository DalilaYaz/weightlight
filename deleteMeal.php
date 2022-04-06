<?php

include('database.php');

if (isset($_GET['idRepas'])) {

    $idRepas  = $_GET['idRepas'];

    $sql = "DELETE FROM consommer WHERE consommer.idRepas=$idRepas";
    $result = mysqli_query($db, $sql);
    var_dump($result);
    $sql2 = "DELETE FROM repas WHERE repas.idRepas=$idRepas";
    $result2 = mysqli_query($db, $sql2);
    var_dump($result);

    if ($result == true && $result2 == true) {
        echo '<script>alert("Repas supprimé avec succès")</script>';
    }

    /*if ($result == TRUE && $result2 == TRUE) {
        echo " deleted successfully.";
    } else {

        echo "Error:" . $sql . "<br>" . $db->error;
        echo "Error:" . $sql2 . "<br>" . $db->error;
    }*/
}

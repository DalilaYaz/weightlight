<?php

include "database.php";

if (isset($_GET['idRepas '])) {

    $idRepas  = $_GET['idRepas '];

    $sql = "DELETE FROM `repas` WHERE `idRepas `='$idRepas '";

    $result = $db->query($sql);

    if ($result == TRUE) {

        echo "Record deleted successfully.";
    } else {

        echo "Error:" . $sql . "<br>" . $db->error;
    }
}

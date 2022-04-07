<?php

include('database.php');


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

if (isset($_GET['idRepas'])) {

    $idRepas  = $_GET['idRepas'];

    $sql = "DELETE FROM consommer WHERE consommer.idRepas=$idRepas";
    $result = mysqli_query($db, $sql);

    $sql2 = "DELETE FROM repas WHERE repas.idRepas=$idRepas";
    $result2 = mysqli_query($db, $sql2);

    if ($result == true && $result2 == true) {
        header('location: details.php');
    }

    /*if ($result == TRUE && $result2 == TRUE) {
        echo " deleted successfully.";
    } else {

        echo "Error:" . $sql . "<br>" . $db->error;
        echo "Error:" . $sql2 . "<br>" . $db->error;
    }*/
}

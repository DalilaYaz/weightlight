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

if (isset($_GET['idSport'])) {
    
    $idSport  = $_GET['idSport'];

    $sql = "DELETE FROM pratiquer WHERE pratiquer.idSport=$idSport";
    $result = mysqli_query($db, $sql);
    var_dump($result);
    $sql2 = "DELETE FROM sport WHERE sport.idSport=$idSport";
    $result2 = mysqli_query($db, $sql2);
    var_dump($result2);
    if ($result == true && $result2 == true) {
        header('location: homeuser.php');
    }
}else{
    echo "No IdSport found";
}

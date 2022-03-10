<?php
session_start();

// initializing variables
$nomUt = "";
$prenomUt = "";
$email    = "";
$password = "";
$poids    = "";
$taille = "";
$dateNaiss    = "";
$errors = array();

// connect to the database
include('database.php');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $nomUt = mysqli_real_escape_string($db, $_POST['nomUt']);
    $prenomUt = mysqli_real_escape_string($db, $_POST['prenomUt']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $poids = mysqli_real_escape_string($db, $_POST['poids']);
    $taille = mysqli_real_escape_string($db, $_POST['taille']);
    $dateNaiss = mysqli_real_escape_string($db, $_POST['dateNaiss']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }


    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM utilisateur WHERE email='$email' OR nomUt='$nomUt' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists

        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password); //encrypt the password before saving in the database

        $query = "INSERT INTO utilisateur (nomUt, prenomUt, email, password, poids, taille, dateNaiss) 
  			  VALUES('$nomUt', '$prenomUt','$email', '$password', '$poids', '$taille', '$dateNaiss')";
        mysqli_query($db, $query);
        $_SESSION['email'] = $email;

        header('location: login.php');
    }
}

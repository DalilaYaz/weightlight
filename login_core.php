<?php

session_start();

include_once "config.php";
$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
if ( !$connection ) {
    echo mysqli_error( $connection );
    throw new Exception( "Database cannot Connect" );
}
$action = $_REQUEST['action'] ?? '';

if ( 'login' == $action ) {
    $email = $_REQUEST['email'] ?? '';
    $password = $_REQUEST['password'] ?? '';

    if ( $email && $password) {
        $query = "SELECT * FROM utilisateur WHERE email='{$email}'";
        $result = mysqli_query( $connection, $query );

        if ( $data = mysqli_fetch_assoc( $result ) ) {
            $_passsword = $data['password'] ?? '';
            $_email = $data['email'] ?? '';
            $_id = $data['idUser'] ?? '';

            if ( password_verify( $password, $_passsword ) ) {
                $_SESSION['idUser'] = $_id;
                header( "location:homeuser.php" );
                die();
            }
        } else {
            header( "location:login.php?error" );
        }

    }
}

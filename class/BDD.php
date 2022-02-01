<?php

class BDD
{
    private $conn;
    private $dbname;
    private $host;
    private $user;

    // Constructor
    public function __construct($host, $dbname, $username,  $pass)
    {
        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname;", $username, $pass);
            //echo "Connexion bien établie" . '<br>';
        } catch (PDOException $e) {
            die("Impossible de se connecter à la base de données $this->dbname :" . $e->getMessage() . $e->getCode() . '<br>');
        } catch (Exception $e) {
            die('Une exception standard a été lancé' . $e->getMessage() . '<br>');
        }
    }

    // Getter
    public function getCon()
    {
        return $this->conn;
    }

}
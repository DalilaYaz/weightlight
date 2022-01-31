<?php
require_once("./class/log_class.php");

class bdd
{
    private $Connexion;
    

    public function __construct($server, $DBName, $user, $password)
    {
        
        $Connexion = "mysql:host=" . $server . ";dbname=" . $DBName;
        try {

            $this->Connexion = new PDO($Connexion, $user, $password);
            
        } catch (PDOException $e) {
            print "Erreur PDO !  : " . $e->getMessage() . "<br/>";
            die();
        } catch (Exception $e) {
            print "Erreur Standard !  : " . $e->getMessage() . " " . $e->getCode() . "<br/>";
        }
    }
    public function __destruct()
    {
        $this->Connexion = null;
    }

    public function request($requete, $array)
    {
        $objLog = new log("./log/log.txt");
        try {
            $query = ($this->Connexion)->prepare($requete);
            $query->execute($array);
            return $query;
        } catch (PDOException $e) {
            $objLog->writeLog("Erreur PDO !  : " . $e->getMessage(). "<br>");
            die();
        } catch (Exception $e) {
            $objLog->writeLog("Erreur Standard !  : " . $e->getMessage() . " " . $e->getCode() . "<br/>");
            
        }
    }
    public function select($requete, $array = null)
    {
        $objLog = new log("./log/log.txt");
        try {
            $query = ($this->Connexion)->prepare($requete);
            $query->execute($array);
            $array = array();
            while ($ligne = $query->fetchObject()) {
                array_push($array, $ligne);
            }
            $query->closeCursor();
            return $array;
        } catch (PDOException $e) {
            $objLog->writeLog("Erreur PDO !  : " . $e->getMessage(). "<br>");
            die();
        } catch (Exception $e) {
            $objLog->writeLog("Erreur Standard !  : " . $e->getMessage() . " " . $e->getCode() . "<br/>");
        }
    }
}

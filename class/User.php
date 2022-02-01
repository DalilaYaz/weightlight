
<?php require_once 'BDD.php' ?> 
<?php

class User
{
    private  $id;
    private  $userName;
    private  $lastName;
    private $email;
    private $password;
    private  $role;


    // Constructeur
    public function __construct()
    {
        // $this->id = $id;
        // $this->name = $name;
        // $this->lastName = $lastName;
        // $this->email = $email;
        // $this->password = $password;
        // $this->role = $role;
    }

    public function set($data = array()): bool
    {
        if (array_key_exists('id', $data)) {
            $this->id = $data['id'];
        }
        if (array_key_exists('userName', $data)) {
            $this->userName = $data['userName'];
        }
        if (array_key_exists('lastName', $data)) {
            $this->lastName = $data['lastName'];
        }
        if (array_key_exists('email', $data)) {
            $this->email = $data['email'];
        }
        if (array_key_exists('role', $data)) {
            $this->role = $data['role'];
        }
        if (array_key_exists('password', $data)) {
            $this->password = $data['password'];
        }

        return true;
    }

    //Functions

    public function addUser($db): bool

    {
        $sql = "INSERT INTO utilisateur(nomUt, prenomUt,email, password, userRole, poids, taille,sexe,dateNaiss) 
        VALUES (:lastName,:userName,:email,:password,'membre',:weight,:height,'homme',:dateNaiss)";

        $stmt = $db->getCon()->prepare($sql);
        $stmt->bindValue(':lastName', $this->lastName);
        $stmt->bindValue(':userName', $this->userName);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':password', md5($this->password));
        //$stmt->bindValue(':userRole', $this->role);
        $stmt->bindValue(':weight', $this->weight);
        $stmt->bindValue(':height', $this->height);
        //$stmt->bindValue(':sexe', $this->sexe);
        $stmt->bindValue(':dateNaiss', $this->dateNaiss);


        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function connectUser($email, $password, $db): string
    {
        $role="";
        $password = md5($password);


        $sql = "SELECT * FROM utilisateur WHERE email='$email' AND password='$password'";


        $result = $db->getCon()->query($sql);

        if ($result->rowCount()  > 0) {

            $row = $result->fetch(PDO::FETCH_ASSOC);

            $_SESSION['id'] = $row['idUser'];
            $_SESSION['userRole'] = $row['userRole'];
            $role = $row['userRole'];
        }
        return $role;
    }

    public function disconnectUser(): bool
    {
        session_start();
        session_destroy();
        if (isset($_SERVER['HTTP_COOKIE'])) {
            $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
            foreach ($cookies as $cookie) {
                $parts = explode('=', $cookie);
                $name = trim($parts[0]);
                setcookie($name, '', time() - 1000);
                setcookie($name, '', time() - 1000, '/');
            }
        }
        return true;
    }

    public function modifyUser($db, $user_id): bool
    {
        $sql = "UPDATE utilisateur SET userName=:userName,lastName=:lastName, email=:email,password=:password WHERE idUser=:idUser";

        $stmt = $db->getCon()->prepare($sql);
        $stmt->bindValue(':userName', $this->userName);
        $stmt->bindValue(':lastName', $this->lastName);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':password', md5($this->password));
        $stmt->bindValue(':idUser', $user_id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }


    // Chercher un  utilisateur
    public function searchUser($db, $text): array
    {
        $sql = "select * FROM utilisateur WHERE email LIKE '%$text%'  OR username  LIKE '%$text%' OR lastName LIKE '%$text%'";
        $stmt = $db->getCon()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Afficher la liste des utilisateurs 
    public function showusers($db): array
    {
        $sql = "select * FROM utilisateur ";
        $stmt = $db->getCon()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    // recuperer un utilisateur selon son id
    public function getUserById($db, $user_id): array
    {
        $sql = "select * FROM utilisateur WHERE idUser=:idUser ";
        $stmt = $db->getCon()->prepare($sql);
        $stmt->bindValue(':idUser', $user_id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }


    // Chercher une tache

    public function searchTask($user_id, $db, $text): array
    {
        $sql = "SELECT (SELECT b.taskName FROM task b WHERE a.idTask=b.idTask AND b.taskName LIKE '%$text%') as taskName FROM usertask a  WHERE a.idUser=:idUser ";
        $stmt = $db->getCon()->prepare($sql);
        $stmt->bindValue(':idUser', $user_id);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    // Display my tasks 
    public function showTask($user_id, $db): array

    {
        $sql = "SELECT a.idTask,(SELECT b.taskName FROM task b WHERE a.idTask=b.idTask) as taskName FROM usertask a  WHERE a.idUser=:idUser ";
        $stmt = $db->getCon()->prepare($sql);
        $stmt->bindValue(':idUser', $user_id);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }



    // Affect a Task to a specific team

    public function affectTask($user, $task, $db): bool
    {
        $sql = "INSERT INTO usertask(idUser, idTask) VALUES (:idUser,:idTask)";

        $stmt = $db->getCon()->prepare($sql);
        $stmt->bindValue(':idUser', $user);
        $stmt->bindValue(':idTask', $task);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }


    // Affect a User to a specific team

    public function affectUserTeam($user, $team, $db): bool
    {
        $sql = "INSERT INTO userteam(idUser, idTeam) VALUES (:idUser,:idTeam)";

        $stmt = $db->getCon()->prepare($sql);
        $stmt->bindValue(':idUser', $user);
        $stmt->bindValue(':idTeam', $team);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function  deleteMember($user_id, $db): bool
    {
        $sql = "DELETE FROM utilisateur WHERE idUser=:idUser";

        $stmt = $db->getCon()->prepare($sql);
        $stmt->bindValue(':idUser', $user_id);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Destructeur

}

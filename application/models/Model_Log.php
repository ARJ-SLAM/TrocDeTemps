<?php
class Model_Log extends CI_model{

    // Nouveau profil
    public function setUser($newUser)
    {
        $sql = $this->db->insert("user", $newUser);
    }
    
   // Utilisateur se connecter
    public function getUserByNameAndPassword($login, $pass)
    {
        $sql = $this->db->query("select idUser, login, nomUser, photoUser from user where mdp = '".$pass."' and login = '".$login."'");
    
        if($sql)
        {
            return $sql->row_array();
        }
        else
        {
            return false;
        }
    }

    // Selection de l'utilisateur par rapport au nom d'utilisateur
    public function getUserByName($login)
    {
        $sql = $this->db->query("select idUser from user where login = '".$login."'");
        return $sql->result();
    }

    // Selection de l'utilisateur par rapport à son ID
    public function getUserById($id)
    {
        $sql = $this->db->query("select idUser, nomUser, login, mdp, photoUser from user where idUser= '".$id."'");
        return $sql->result();
    }

}
?>

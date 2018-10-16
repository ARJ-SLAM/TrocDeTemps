<?php
class Model_connexion_inscription extends CI_Model
{
    public function getUserByNameAndPassword($login, $password)
    {
        $sql = $this->db->query("select login, nomUser, photoUser from user where mdp = '".$password."' and login = '".$login."'");
        return $sql->result();
    }

    public function getUserByName($login)
    {
        $sql = $this->db->query("select idUser from user where login = '".$login."'");
        return $sql->result();
    }

    public function setUser($photo, $nomUser, $login, $password)
    {
        $sql = $this->db->query("insert into user (nomUser, login, mdp, photoUser) values ('".$nomUser."', '".$login."', '".$password."', '".$photo."')");
    }
}
?>
<?php
class Controleur_Acces extends CI_Controller
{
    public function connexion()
    {
        $this->load->model("Jconnexion/Model_connexion_inscription");
        $data["User"] = $this->Model_connexion_inscription->getUserByNameAndPassword($_POST["login"], $_POST["password"]);
        if ($data["User"] != "")
        {
            $this->load->view("Jconnexion/retour/connexion_ret", $data);
        }
    }

    public function accesConnexion()
    {
        $this->load->view("Jconnexion/connexion");
    }

    public function accesInscription()
    {
        $this->load->view("Jconnexion/inscription");
    }

    public function setInscription()
    {
        $this->load->model("Jconnexion/Model_connexion_inscription");
        $data["User"] = $this->Model_connexion_inscription->getUserByName($_POST["login"]);
        if ($data["User"] == null)
        {
            $this->Model_connexion_inscription->setUser($_POST["photo"], $_POST["nomUser"], $_POST["login"], $_POST["password"]);
            $data["photo"] = $_POST["photo"];
            $data["nom"] = $_POST["nomUser"];
            $data["login"] = $_POST["login"];
            $this->load->view("Jconnexion/retour/inscription_ret", $data);
        }
    }
}
?>
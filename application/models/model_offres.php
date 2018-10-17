<?php

    class Model_offres extends CI_Model
    {
        function postLesOffres($user)
        {
            $sql = $this->db->query("select idOffre, descriptionOffre, dateOffre, idService from offre where idUser=".$user);
            return $sql->result();
        }

        function getLesCategories()
        {
            $sql = $this->db->query("select idCateg, nomCateg from categorie");
            return $sql->result();
        }
        
        function getLesServices($idCateg)
        {
            $sql = $this->db->query("select idService, nomService, photoService from service where idCateg=".$idCateg);
            return $sql->result();
        }

        function maxOffres()
        {
            $sql = $this->db->query("select max(idOffre) as idOffre from offre");
            return $sql->result();
        }

        function creerUneOffre()
        {

        }
    }

?>
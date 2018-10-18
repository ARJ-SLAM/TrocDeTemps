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
            $sql = $this->db->query("select idService, nomService from service where idCateg=".$idCateg);
            return $sql->result();
        }

        function getPhotoService($idService)
        {
            $sql = $this->db->query("select photoService from service where idService=".$idService);
            return $sql->result();
        }

        function maxOffres()
        {
            $sql = $this->db->query("select max(idOffre) as idOffre from offre");
            return $sql->result();
        }

        function creerUneOffre($user,$dateOffre,$idOffre,$idService,$descriptionOffre)
        {
            $sql = $this->db->query("insert into offre(idOffre, descriptionOffre, dateOffre, idService, idUser) values($idOffre, '$descriptionOffre', '$dateOffre', $idService, $user)");
        }

        function afficheOffre($idOffre)
        {
            $sql = $this->db->query("select idOffre, descriptionOffre, offre.idService as idService, nomService from offre inner join service on offre.idService = service.idService where idOffre=".$idOffre);
            return $sql->result();
        }

        function modifOffre($dateOffre,$idOffre,$descriptionOffre)
        {
            $sql = $this->db->query("update offre set descriptionOffre = '$descriptionOffre' where idOffre =" . $idOffre);
            $sql = $this->db->query("update offre set dateOffre = '$dateOffre' where idOffre =" . $idOffre);
        }
    }
?>
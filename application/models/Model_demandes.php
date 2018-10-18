<?php

    class Model_demandes extends CI_Model
    {
        function postLesDemandes($user)
        {
            $sql = $this->db->query("select idDemande, descriptionDemande, dateDemande, idService from demande where idUser=".$user);
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

        function getPhotoService($idService)
        {
            $sql = $this->db->query("select photoService from service where idService=".$idService);
        }

        function maxDemandes()
        {
            $sql = $this->db->query("select max(idDemande) as idDemande from demande");
            return $sql->result();
        }

        function creerUneDemande($user,$dateDemande,$idDemande,$idService,$descriptionDemande)
        {
            $sql = $this->db->query("insert into demande(idDemande, descriptionDemande, dateDemande, idService, idUser) values($idDemande, '$descriptionDemande', '$dateDemande', $idService, $user)");
        }

        function afficheDemande($idDemande)
        {
            $sql = $this->db->query("select idDemande, descriptionDemande, demande.idService as idService, nomService from demande inner join service on demande.idService = service.idService where idDemande=".$idDemande);
            return $sql->result();
        }

        function modifDemande($dateDemande,$idDemande,$descriptionDemande)
        {
            $sql = $this->db->query("update demande set descriptionDemande = '$descriptionDemande' where idDemande =" . $idDemande);
            $sql = $this->db->query("update demande set dateDemande = '$dateDemande' where idDemande =" . $idDemande);
        }
    }

?>
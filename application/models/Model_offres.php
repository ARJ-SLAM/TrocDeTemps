<?php
    class Model_Offres extends CI_Model
    {
        public function getShowOffers($id)
        {
            $sql = $this->db->query("select idOffre, descriptionOffre, dateOffre, offre.idService, nomService, photoService 
            from offre inner join service on offre.idService = service.idService where idUser=".$id);
            return $sql->result();
        }
        public function creerUneOffre($idUser, $dateOffre, $idOffre, $idService, $descriptionOffre)
        {
            $sql = $this->db->query("insert into offre(idOffre, descriptionOffre, dateOffre, idService, idUser) values($idOffre, '$descriptionOffre', '$dateOffre', $idService, $idUser)");
        }
    }
?>
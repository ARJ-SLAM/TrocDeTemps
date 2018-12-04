<?php
    class Model_Deals extends CI_Model
    {
        public function getShowDeals($id)
        {            
            $sql = $this->db->query("select idDeal, dateDeal, idEtat, noteUser1, noteUser2, nomUser, photoUser, nomService as serviceOffer
            from deal inner join offre on idOffreUser2 = idOffre inner join service on service.idService = offre.idService 
            inner join user on user.idUser = offre.idUser where idCreateur =".$id);
            return $sql->result();
        }
        public function getServiceByName($id){
            $sql = $this->db->query("select nomService as Offer from deal inner join offre on idOffreUser1 = idOffre inner join service on service.idService = offre.idService inner join user on user.idUser = offre.idUser where idCreateur =".$id);
            return $sql->result();
        }
        public function getEtatById($id){
            $sql = $this->db->query("select idEtat from deal where idCreateur =".$id);
            return $sql->result();
        }
    }
?>
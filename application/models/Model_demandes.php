<?php
    class Model_Demandes extends CI_Model
    {
        public function getShowRequest($id)
        {
            $sql = $this->db->query("select idDemande, descriptionDemande, dateDemande, demande.idService, nomService, photoService 
            from demande inner join service on demande.idService = service.idService where idUser=".$id);
            return $sql->result();
        }
    }
?>
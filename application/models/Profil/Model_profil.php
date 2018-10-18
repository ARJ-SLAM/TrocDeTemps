<?php
class Model_profil extends CI_Model
{
    public function getOffres()
    {
        $sql = $this->db->query("select idOffre, descriptionOffre, dateOffre from offre inner join user on offre.idUser = user.idUser where nomUser = '".$nomUser."'");
        return $sql->result();
    }

}
?>
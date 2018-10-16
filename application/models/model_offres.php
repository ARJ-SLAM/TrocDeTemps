<?php

    class Model_Categorie extends CI_Model
    {
        function postLesOffres()
        {
            $sql = $this->db->query("select idOffre, descriptionOffre, dateOffre, idService from offre");
            return $sql->result();
        }
    }

?>
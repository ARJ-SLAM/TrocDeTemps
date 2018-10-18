<?php

    foreach($lesDemandes as $uneDemande)
    {
        echo "<input id='idDemande' type='text' disabled='disabled' value='$uneDemande->idDemande'><br>";
        echo "<input id='idService' type='hidden' value='$uneDemande->idService' >";
        echo "<input type='text' disabled='disabled' value='$uneDemande->nomService'><br>";
        echo "<textarea id='description'>$uneDemande->descriptionDemande</textarea><br>";
        echo "<input type='button' value='Modifier demande' onclick='modifDemande()'>";
    }

?>
<?php

    foreach($lesOffres as $uneOffre)
    {
        echo "<input id='idOffre' type='text' disabled='disabled' value='$uneOffre->idOffre'><br>";
        echo "<input id='idService' type='hidden' value='$uneOffre->idService' >";
        echo "<input type='text' disabled='disabled' value='$uneOffre->nomService'><br>";
        echo "<textarea id='description'>$uneOffre->descriptionOffre</textarea><br>";
        echo "<input type='button' value='Modifier offre' onclick='modifDemande()'>";
    }

?>
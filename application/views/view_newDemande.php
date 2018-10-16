<?php 

    foreach($maxDemandes as $idDemande)
    {
        $id = $idDemande->idDemande+1;
        echo "<input type='text' disabled='true' value='".$id."'><br>";
    }

?>

<select id="lesCateg" onchange="modifServices(this.value)">

<?php
    foreach($lesCateg as $uneCateg)
    {
        echo "<option value='".$uneCateg->idCateg."'>$uneCateg->nomCateg</option>";
    }
?>

</select> <br>

<select id="lesServices">

<?php
    foreach($lesServices as $unService)
    {
        echo "<option value='".$unService->idService."'>$unService->nomService</option>";
    }
?>

</select> <br>

<textarea id="description"></textarea> <br>

<input type="button" value="Créer la demande" id="btnnewDemande">
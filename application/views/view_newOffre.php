<?php 

    foreach($maxOffres as $idOffre)
    {
        $id = $idOffre->idOffre+1;
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

<div id='divServices'>
<?php
    foreach($photoServices as $unePhoto)
    {
        echo "<p id='photo'><img src='".$unePhoto->photoService."'><p>";
    }
?>

<select id="lesServices">

<?php
    foreach($lesServices as $unService)
    {
        echo "<option value='".$unService->idService."'>$unService->nomService</option>";
    }
?>

</select> 
</div> <br>

<textarea id="description"></textarea> <br>

<input type="button" value="Créer l'offre" id="btnnewOffre">
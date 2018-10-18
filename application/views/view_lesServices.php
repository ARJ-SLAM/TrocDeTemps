<?php
    foreach($photoServices as $unePhoto)
    {
        echo "<p id='photo'><img src='".$unePhoto->photoService."'><p>";
    }
?>

<select id="lesServices" onchange="modifPhoto(this.value)">

<?php
    foreach($lesServices as $unService)
    {
        echo "<option value='".$unService->idService."'>$unService->nomService</option>";
    }
?>

</select> 
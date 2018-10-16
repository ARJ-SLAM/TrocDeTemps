<?php
    foreach($lesServices as $unService)
    {
        echo "<option value='".$unService->idService."'>$unService->nomService</option>";
    }
?>
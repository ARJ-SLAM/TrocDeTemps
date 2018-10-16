<?php
foreach($User as $unUser)
{
    echo "<ul><li><a href='profil/index/".$unUser->idUser."'><img height='30' width='30' src='".$unUser->photoUser."'> ".$unUser->nomUser."</a></li>";
    echo "<li><a href='#' onclick='deconnexion()'>Déconnexion</a></li></ul>";
}
?>
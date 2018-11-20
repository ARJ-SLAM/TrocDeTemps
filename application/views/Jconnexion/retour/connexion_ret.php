<?php
foreach($User as $unUser)
{
    echo "<li><a href='index.php/profil/index/".$unUser->idUser."'><img height='30' width='30' src='".$unUser->photoUser."'> ".$unUser->nomUser."</a></li>";
    echo "<li><a href='#' onclick='deconnexion()'>Déconnexion</a></li>";
}
?>
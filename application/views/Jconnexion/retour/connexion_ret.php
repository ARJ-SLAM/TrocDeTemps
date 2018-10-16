<?php
foreach($User as $unUser)
{
    echo "<ul><li><a href='profil'><img height='30' width='30' src='".$unUser->photoUser."'> ".$unUser->nomUser."<input type='hidden' value='".$unUser->login."'></a></li>";
    echo "<li><a href='#' onclick='deconnexion()'>Déconnexion</a></li></ul>";
}
?>
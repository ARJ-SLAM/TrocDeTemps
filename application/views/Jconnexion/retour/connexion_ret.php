<?php
foreach($User as $unUser)
{
    echo "<ul><li><a href='#'><img height='35' width='35' src='".$unUser->photoUser."'> ".$unUser->nomUser."<input type='hidden' value='".$unUser->login."'></a></li>";
    echo "<li><a href='#' onclick='deconnexion()'>Déconnexion</a></li></ul>";
}
?>
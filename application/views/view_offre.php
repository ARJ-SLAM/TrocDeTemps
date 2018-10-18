<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mes Offres</title>
    <script src='JQuery/jquery-3.1.1.js'> </script>
    <script src="JS/mesFonctions.js"></script>
    <script>

        $(
            function()
            {
                $("#newOffres").click(function()
                {
                    AfficherNewOffre();
                });

                $("#newDemandes").click(function()
                {
                    AfficherNewDemande();
                });

            }
        );

    </script>
</head>
<body>
    <input type='hidden' id='user' value='1'>
    <h1>Offres</h1>

    <input type='button' value='Créer les offres' id='newOffres'>

 

    <div id="divOffres">
        <?php 
            foreach($lesOffres as $uneOffre)
            {
                ?>
                <input type='button' onclick="updateOffre(<?php echo $uneOffre->idOffre ?>)" value="
                <?php
                echo $uneOffre->idOffre."    ";
                echo $uneOffre->descriptionOffre."    ";
                echo $uneOffre->dateOffre."    ";
                echo $uneOffre->idService."    ";?>"> <br>
                <?php
            }
        ?>
    </div>

    <h1>Les Demandes</h1>

<input type='button' value='Créer les demandes' id='newDemandes'>



<div id="divDemandes">
    <?php 
        foreach($lesDemandes as $uneDemande)
        {
            ?>
            <input type='button' onclick="updateDemande(<?php echo $uneDemande->idDemande ?>)" value="
            <?php
            echo $uneDemande->idDemande."    ";
            echo $uneDemande->descriptionDemande."    ";
            echo $uneDemande->dateDemande."    ";
            echo $uneDemande->idService."    ";?>"> <br>
            <?php
        }
    ?>
</div>

<div id="modal" class="modal">

</body>
</html>
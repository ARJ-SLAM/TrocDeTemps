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
                echo $uneOffre->idOffre."<br>";
                echo $uneOffre->descriptionOffre."<br>";
                echo $uneOffre->dateOffre."<br>";
                echo $uneOffre->idService."<br>";
            }

        ?>
    </div>

    <h1>Les Demandes</h1>

<input type='button' value='Créer les demandes' id='newDemandes'>



<div id="divDemandes">
    <?php 
        foreach($lesDemandes as $uneDemandes)
        {
            echo $uneDemandes->idDemande."<br>";
            echo $uneDemandes->descriptionDemande."<br>";
            echo $uneDemandes->dateDemande."<br>";
            echo $uneDemandes->idService."<br>";
        }

    ?>
</div>

<div id="modal" class="modal">

</body>
</html>
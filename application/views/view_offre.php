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
                $("#btnOffres").click(function()
                {
                    AfficherLesOffres();
                });
            }
        );

    </script>
</head>
<body>
    <h1>Offres</h1>

    <input type='button' value='Afficher les offres' id='btnOffres'>

    <div id="divOffres"></div>
    
</body>
</html>
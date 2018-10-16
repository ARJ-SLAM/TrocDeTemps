<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>E-Trading | Site de Troc en ligne</title>
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700normal,700italic|Source+Sans+Pro:400,400italic,700normal,700italic" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
        <link rel="icon" href="">

        <!-- script -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="<?php echo base_url();?>assets/JS/myFunctions.js"></script>
        <script src="<?php echo base_url();?>assets/JS/Connexion_inscription_fonction.js"></script>
        <script>
            $(document).ready(function(){

            $('#modal').modal('open');
            
            $('a[title|="modal_inscription"]').click(function(){
                acces_inscription();
                $('.modal').modal();
            })
            $('a[title|="modal_connexion"]').click(function(){
                acces_connexion();
                $('.modal').modal();
            })
        });
        </script>
    </head>

    <body >
    <header>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                    <div class="container">
                        <a href="#" class="brand-logo">E-trading</a>
                        <a data-activates="slide-out" href="#" class="sidenav-trigger right" data-target="mobile-links"><i class="material-icons">menu</i></a>

                        <ul id="id-nav" class="hide-on-med-and-down">
                            <li class="active"><a href="home" class="links">Home</a></li>
                            <li><a href="profil#offre" class="links">Mes offres</a></li>
                            <li><a href="profil#demande" class="links">Mes demandes</a></li>
                            <li><a href="profil#deal" class="links">Mes deals</a></li>
                        </ul>
                        <ul id="id-nav-connect" class="right hide-on-med-and-down">
                            <li><a href="#modal" class="links modal-trigger" title="modal_inscription">Inscription</a></li>
                            <li><a href="#modal" class="links modal-trigger" title="modal_connexion">Connexion</a></li>
                            <li id="connecter"></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
            <ul class="sidenav" id="mobile-links">
                <li class="brand-logo">E-traiding</li>
                <li><a href="home">Home</a></li>
                <li><a href="profil#offre" >Mes offres</a></li>
                <li><a href="profil#demande" >Mes demandes</a></li>
                <li><a href="profil#deal" >Mes deals</a></li>
                <li><a href="#modal" class="modal-trigger" title="modal_inscription">Inscription</a></li>
                <li><a href="#modal" class="modal-trigger" title="modal_connexion">Connexion</a></li>
                <li id="mobile_connecter"></li>
            </ul>
    </header>

        <!-- Modal Inscription -->
    <div id="modal" class="modal">
    </div>

</body>

        </header>
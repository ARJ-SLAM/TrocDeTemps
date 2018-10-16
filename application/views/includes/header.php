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
        <script src="<?php echo base_url();?>assets/JS/Connexion_inscription_function.js"></script>
        <script src="<?php echo base_url();?>assets/JS/myFunctions.js"></script>
        <script>
            $(document).ready(function(){
            $('.sidenav').sidenav();
            
            $(window).scroll(function(){
                if ($(window).scrollTop()>300){
                    $('nav').addClass('blue-grey');
                }else{
                    $('nav').removeClass('blue-grey');
                }
            });
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
        <header id="header" >
            <!-- Navbar -->
            <div class="navbar-fixed" >
                <nav role="navigation" class="">
                    <div class="nav-wrapper container">
                        <div class="nav-header">
                            <a href="#" class="brand-logo">E-trading</a>
                            <a data-activates="slide-out" href="#" class="sidenav-trigger" data-target="mobile-links"><i class="material-icons">menu</i></a>
                        </div>

                        <ul id="id-nav" class="hide-on-med-and-down">
                            <li class="active"><a href="home" class="links">Home</a></li>
                            <li><a href="profil#offre" class="links">Mes offres</a></li>
                            <li><a href="profil#demande" class="links">Mes demandes</a></li>
                            <li><a href="profil#deal" class="links">Mes deals</a></li>
                        </ul>
                        <ul id="id-nav-connect" class="right hide-on-med-and-down">
                            <li><a href="#" class="links modal-trigger" title="modal_inscription">Inscription</a></li>
                            <li><a href="#modalSignIn" class="links modal-trigger" title="modal_connexion">Connexion</a></li>
                            <li id="connecter"></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- Toggle Navigation -->
            <ul id="mobile-links" class="sidenav" >
                <li class="mobile-nav-logo">
                    <div class="brand-logo center">E-traiding</div>
                        <div class="container">
                            <div class="divider"></div>
                        </div>
                </li>
                <li><a href="home">Home</a></li>
                <li><a href="profil#offre">Mes offres</a></li>
                <li><a href="profil#demande">Mes demandes</a></li>
                <li><a href="profil#deal">Mes deals</a></li>
                <li><a href="#" class="modal-trigger" title="modal_inscription">Inscription</a></li>
                <li><a href="#modalSignIn" class="modal-trigger" title="modal_connexion">Connexion</a></li>
                <li id="mobile_connecter"></li>
            </ul>

            <!-- Modal Sign In -->
            <div id="idmodal" class="modal">
                <!-- <div class="modal-content">
                    <h4 class="center">Bienvenue sur <i class="logo">E-Trading</i></h4>
                    <h5 class="center">Connectez-vous !</h5>
                    <div class="divider"></div><br/>
                    <div class="container">
                        <div class="row">
                            <div class="input-field col s12 m12 l10 offset-l1">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Identifiant</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m12 l10 offset-l1">
                                <i class="material-icons prefix">lock</i>
                                <input id="pass" type="password" class="validate" name="pass">
                                <label for="pass">Mot de passe</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12 m6 l4 offset-l1 create-account">
                                <a href="#" >Vous n'avez pas de compte ?<br>Crée-en un !</a>
                            </div>
                            <div class="col s12 m3 l3 offset-m3 offset-l3">
                                <button type="submit" class="btn waves-effect waves-light"  id=connect name="connect">Connexion</button>
                            </div>
                        </div>
                
                    </div>
                </div>-->
            </div>

        </header>
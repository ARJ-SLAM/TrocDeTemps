<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
            
    <title>E-Trading</title>
    <!--Import Google Icon Font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--Import  Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Fichier CSS -->
    <link rel="stylesheet" href="assets/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- script -->
    <script src="assets/JQuery/jquery-3.1.1.js"></script>
    <script src="assets/JS/materialize.min.js"></script>
    <script src="assets/JS/Connexion_inscription_fonction.js"></script>
    
    <!-- script -->
    <script>
        $(document).ready(function(){
            // $('.sidenav').sidenav();
            
            // $(window).scroll(function(){
            //     if ($(window).scrollTop()>300){
            //         $('nav').addClass('blue-grey');
            //     }else{
            //         $('nav').removeClass('blue-grey');
            //     }
            // });
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
<body>
    <header>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                    <div class="container">
                        <a href="#" class="brand-logo">E-trading</a>
                        <a data-activates="slide-out" href="#" class="sidenav-trigger right" data-target="mobile-links"><i class="material-icons">menu</i></a>

                        <ul class="right hide-on-med-and-down">
                            <li class="active"><a href="#" class="links">Home</a></li>
                            <li><a href="#" class="links">Categories</a></li>
                            <li><a href="#" class="links">Besoins</a></li>
                            <li>
                                <form>
                                    <div class="input-field">
                                        <input id="search" type="search" required>
                                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                        <i class="material-icons">close</i>
                                    </div>
                                </form>
                            </li>
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
                <li><a href="#">Home</a></li>
                <li><a href="#">Catégories</a></li>
                <li><a href="#">Mes besoins</a></li>
                <li><a href="#modal" class="modal-trigger" title="modal_inscription">Inscription</a></li>
                <li><a href="#modal" class="modal-trigger" title="modal_connexion">Connexion</a></li>
                <li id="mobile_connecter"></li>
            </ul>
    </header>

        <!-- Modal Inscription -->
    <div id="modal" class="modal">
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Jérôme P - Alexandre G - Robin M">
        <title><?php echo $title ?></title>
        
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
        <!-- script -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/myFunctions.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                    $(this).toggleClass('active');
                });
            });
        </script>
    </head>
    
    <body data-spy="scroll" data-target="#list-unstyled" data-offset="1"class="profil">
        
        <header>
            <div class="wrapper">
                <nav id="sidebar">
                    <div class="sidebar-header">
                        <h1>E-Trading</h1>
                        <hr>
                    </div>
                    
                    <div id="list-unstyled">
                        <ul class="list-unstyled components" >
                            <li class="active">
                                <a href="profil">Home</a>
                            </li>

                            <li class="">
                                <a href="#Offres">Offres</a>
                            </li>
                            <li class="">
                                <a href="#Demandes">Demandes</a>
                            </li>
                            <li class="">
                                <a href="#Deals">Deals</a>
                            </li>
                            <li>
                                <a href="logout">Déconnexion</a>
                            </li>
                            <hr>
                            <li>
                                <div class="profilUser">
                                    <img src="<?php echo $photoUser ?>" />
                                    <span><?php echo $nomUser ?></span>
                                </div>
                            </li>
                            <hr>
                        </ul>
                    </div>
                </nav>

                    <div id="content">
                        <button type="button" id="sidebarCollapse" class="navbar-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>

            </div>
        </header>
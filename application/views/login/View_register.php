    <body class="regist">

            <div class="container">
                <div id="register" class="row justify-content-sm-center ">
                    <div class="col-sm-9 col-md-6 col-lg-4">
                        <div class="register border shadow p-3 mb-5 bg-white rounded">
                            <div class="register-head">
                                <h3 class="title">Inscription</h3>
                            </div>
                                <?php
                                    $error = $this->session->flashdata('error');

                                    if($error) {
                                        
                                    echo "<div class='alert alert-danger'>";
                                    echo $error;
                                    echo "</div> <br>";
                                    }
                                ?>
                        
                            <div class="register-body">
                                <form role="form" method="post" action="<?php echo base_url('home/register_user'); ?>">
                                    
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Nom & Prénom" name="nomUser" type="text" />
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" placeholder="Nom d'utilisateur•trice" name="login" type="text" />
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" placeholder="Mot de passe" name="mdp" type="password" />
                                    </div>

                                    <div class="row justify-content-around">
                                        <div class="col-4 align-self-center">
                                            <input class="btn btn-sm btn-primary" type="submit" value="Inscription" name="register"/>
                                        </div>
                                        <div class="col-7 offset-sm-1">
                                            <h6>Déjà inscrit•e ?</h6><a href="<?php echo base_url('home'); ?>">Connectez-vous !</a>
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

    </body>
</html>

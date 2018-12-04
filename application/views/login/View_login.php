    <body class="connect">

        <div class="container">
            <div id="login" class="row justify-content-sm-center ">
                <div class="col-sm-9 col-md-6 col-lg-4">
                    <div class="login border shadow p-3 mb-5 bg-white rounded">
                        <div class="login-head">
                            <h3 class="title">Bienvenue sur<br>E-Trading !</h3>
                        </div>
                            <?php
                                $success= $this->session->flashdata('success');
                                $error= $this->session->flashdata('error');

                                if($success){
                                    
                                    echo "<div class='alert alert-success'>";
                                    echo $success; 
                                    echo "</div> <br>";
                                
                                }
                                if($error) {
                                    
                                echo "<div class='alert alert-danger'>";
                                echo $error;
                                echo "</div> <br>";
                                }
                            ?>
                    
                        <div class="login-body">
                            <form role="form" method="post" action="<?php echo base_url('home/login'); ?>">
                                
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nom d'utilisateur•trice" name="login" type="text"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mot de passe" name="pass" type="password" />
                                </div>

                                <div class="row justify-content-around">
                                    <div class="col-4 ">
                                        <input class="btn btn-sm btn-primary" type="submit" value="Connexion" name="connexion"/>
                                    </div>
                                    <div class="col-7 offset-sm-1 align-self-center">
                                        <a href="<?php echo base_url('home/register'); ?>">Inscrivez-vous ☺</a>
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

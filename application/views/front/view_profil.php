<div id="Contents">

        <section id="offre">
            <div class="container">
                <div class="row">
                    <h2>Mes Offres&nbsp;<a href="" id="newOffres"><i class="small material-icons">add</i></a></h2>

                    <div id="divOffres" class="row">
                    
                        <?php foreach($lesOffres as $uneOffre)
                            {
                            echo "<div class='col s12 m6 l3'>
                                    <div class='card blue-grey darken-2 z-depth-3'>
                                        <div class='card-content white-text'>
                                            <span class='card-title'>Card Title</span>
                                            <p>".$uneOffre->descriptionOffre."</p>
                                            <span class='date'>".$uneOffre->dateOffre."</span>
                                        </div>
                                    </div>
                                </div>";
                            }
                        ?>

                    </div>
                </div>
            </div>
        </section>

        <section id="demande">
            <div class="container">
                <div class="row">
                    <h2>Mes Demandes&nbsp;<a href="" id="newDemandes"><i class="small material-icons">add</i></a></h2>

                    <div id="divDemandes" class="row">
                        
                        <?php foreach($lesDemandes as $uneDemandes)
                            {
                            echo "<div class='col s12 m6 l3'>
                                    <div class='card blue-grey darken-2 z-depth-3'>
                                        <div class='card-content white-text'>
                                            <span class='card-title'>Card Title</span>
                                            <p>".$uneDemandes->descriptionDemande."</p>
                                            <span class='date'>".$uneDemandes->dateDemande."</span>
                                        </div>
                                    </div>
                                </div>";
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </section>

        <section id="deal">
            <div class="container">
                <div class="row">
                    <h2>Mes Deals&nbsp;<a href=""><i class="small material-icons">add</i></a></h2>
                    <div class="row">

                        <div class="col s12 m6 l3">
                            <div class="card green center z-depth-3">
                                <div class="card-image">
                                     <img src="<?php echo base_url();?>assets/img/troc.jpg">
                                </div>
                                <div class="card-content white-text">
                                <span class="card-title">Card Title</span>
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                    I am convenient because I require little markup to use effectively.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#" class="waves-effect waves-light btn">Modifier</a>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m6 l3">
                            <div class="card red center z-depth-3">
                                <div class="card-image">
                                     <img src="<?php echo base_url();?>assets/img/troc.jpg">
                                </div>
                                <div class="card-content white-text">
                                <span class="card-title">Card Title</span>
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                    I am convenient because I require little markup to use effectively.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#" class="waves-effect waves-light btn">Modifier</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
    
    <div id="modal" class="modal"></div>
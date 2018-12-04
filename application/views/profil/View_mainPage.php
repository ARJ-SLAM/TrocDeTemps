        <div class="sections" data-spy="scroll" data-target="#list-unstyled" data-offset="0">

            <section id="Offres">
                <div class="title">
                    <h3>Mes Offres <a href="" data-toggle="modal" data-target="#add" onclick="CreerUneOffre"><i class="fas fa-plus-circle"></i></a></h3>
                </div>

                <div id="divOffres" class="row">
                        
                    <?php foreach($offers as $offer)
                        {
                        echo "<div class='card shadow mb-5 bg-white rounded'>
                                <div class='card-body'>
                                    <a href='' data-toggle='modal' data-target='#add' onclick=''><h5 class='card-title'>".$offer->nomService."</h5></a>
                                    <h6 class='card-subtitle mb-2 text-muted'>".$offer->dateOffre."</h6>
                                    <p class='card-text'>".$offer->descriptionOffre."</p>
                                </div>
                            </div>";
                        } 
                    ?>
                </div>
            </section>

            <section id="Demandes">
                <div class="title">
                    <h3>Mes Demandes <a href="" data-toggle="modal" data-target="#add"><i class="fas fa-plus-circle"></i></a></h3>
                </div>

                <div id="divDemandes" class="row">
                            
                    <?php foreach($requests as $request)
                        {
                        echo "<div class='card shadow mb-5 bg-white rounded'>
                                <div class='card-body'>
                                <a href='' data-toggle='modal' data-target='#add' onclick=''><h5 class='card-title'>".$request->nomService."</h5></a>
                                    <h6 class='card-subtitle mb-2 text-muted'>".$request->dateDemande."</h6>
                                    <p class='card-text'>".$request->descriptionDemande."</p>
                                </div>
                            </div>";
                        } ?>   
                </div>
            </section>

            <section id="Deals">
                <div class="title">
                    <h3>Mes Deals <a href="" data-toggle="modal" data-target="#add"><i class="fas fa-plus-circle"></i></a></h3>
                </div>

                <div id="divMesDeals" class="row">
                    
                    <?php foreach($Deals as $Deal)
                        {
                            $border= $this->session->flashdata('border');
                        echo "<div class='card ".$border." shadow mb-5 bg-white rounded'>
                                    <img class='card-img' src='".$Deal->photoUser."' />
                                <div class='title' >
                                    <h5 class='card-title'>".$Deal->nomUser."</h5>
                                    <h6 class='card-subtitle mb-2 text-muted'>".$Deal->dateDeal."</h6>
                                </div>
                                
                                <div class='card-body'>
                                    <hr style='margin-top: 0px;'>
                                    <p class='card-text'>Mon offre : ".$Offer[0]->Offer."</p>
                                    <p class='card-text'>Ma demande : ".$Deal->serviceOffer."</p>
                                    <hr>
                                    
                                    <div class='note'>
                                        <p>Note : <span style='color: #D2952C;'>".$Deal->noteUser1." • ".$Deal->noteUser2."</span></p>
                                    </div>
                                </div>
                            </div>";
                        } ?>
                </div>
            </section>
        </div>

        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="AddTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="AddTitle"><?php echo $modalTitle ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body"> <!-- Direction view_new.php -->
                        <div class="row">
                            <div class="col-sm-6">
                                <img class="" src=""/>           
                            </div>
                            <div class="col-sm-6">
                                <form role="form" method="post" action="">
                                    
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label>Numéro</label>
                                            <input class="form-control" name="idOffre" type="text" value="" readonly="readonly">
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label>Date</label>
                                            <input class="form-control"  name="dateOffre" type="date" value="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Service</label>
                                        <select name="idService" class="form-control"></select>   
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control"  name="descriptionOffre" type="text" value="">
                                        </textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Sauvegarder"/>
                    </div>              
                </div>
            </div>
        </div>

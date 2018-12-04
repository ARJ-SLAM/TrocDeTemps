
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
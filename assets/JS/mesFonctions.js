function AfficherNewOffre()
{
    $.ajax
    (
        {
            type:"post",
            url:"index.php/profil/AfficherNewOffre",
            success:function(data)
            {
                $('#modal').empty();
                $('#modal').append(data);
            },
            error:function()
            {
                alert("Erreur de chargement du formulaire");
            }
        }
    );
}

function AfficherNewDemande()
{
    $.ajax
    (
        {
            type:"post",
            url:"index.php/profil/AfficherNewDemande",
            success:function(data)
            {
                $('#modal').empty();
                $('#modal').append(data);
            },
            error:function()
            {
                alert("Erreur de chargement du formulaire");
            }
        }
    );
}

function modifServices(idCateg)
{
    $.ajax
    (
        {
            type:"post",
            url:"index.php/profil/modifServices",
            data:"idCateg=" + idCateg,
            success:function(data)
            {
                $('#divServices').empty();
                $('#divServices').append(data);
            },
            error:function()
            {
                alert("Erreur de chargement des Services");
            }
        }
    );
}

function modifPhoto(idService)
{
    $.ajax
    (
        {
            type:"post",
            url:"index.php/profil/modifPhoto",
            data:"idService=" + idService,
            success:function(data)
            {
                $('#photo').empty();
                $('#photo').append(data);
            },
            error:function()
            {
                alert("Erreur de chargement des Photos");
            }
        }
    );
}
function CreerUneOffre()
{
    
    d = new Date();
    dateOffre = d.getFullYear() + '-' + (d.getMonth()+1) + '-' + d.getDate();

    $.ajax
    (
        {
            type:"post",
            url:"index.php/profil/CreerUneOffre",
            data:"user=" + $("#user").val() + "&dateOffre=" + dateOffre + "&idOffre=" + $("#idOffre").val() + "&idService=" + $("#lesServices").val() + "&descriptionOffre=" + $("#description").val(),
            success:function()
            {

            },
            error:function()
            {
                alert("Erreur de création de l'offre");
            }
        }
    );
}

function CreerUneDemande()
{

    d = new Date();
    dateDemande = d.getFullYear() + '-' + (d.getMonth()+1) + '-' + d.getDate();

    $.ajax
    (
        {
            type:"post",
            url:"index.php/profil/CreerUneDemande",
            data:"user=" + $("#user").val() + "&dateDemande=" + dateDemande + "&idDemande=" + $("#idDemande").val() + "&idService=" + $("#lesServices").val() + "&descriptionDemande=" + $("#description").val(),
            success:function()
            {

            },
            error:function()
            {
                alert("Erreur de création de la demande");
            }
        }
    );
}

function updateOffre(id)
{
    $.ajax
    (
        {
            type:"post",
            url:"index.php/profil/updateOffre",
            data:"idOffre=" + id,
            success:function(data)
            {
                $('#modal').empty();
                $('#modal').append(data);
            },
            error:function()
            {
                alert("Erreur de chargement de l'offre");
            }
        }
    );
}

function modifOffre()
{
    d = new Date();
    dateOffre = d.getFullYear() + '-' + (d.getMonth()+1) + '-' + d.getDate();

    $.ajax
    (
        {
            type:"post",
            url:"index.php/profil/modifOffre",
            data:"dateOffre=" + dateOffre + "&idOffre=" + $("#idOffre").val()+ "&descriptionOffre=" + $("#description").val(),
            success:function()
            {

            },
            error:function()
            {
                alert("Erreur de modification de l'offre");
            }
        }
    );
}

function updateDemande(id)
{
    $.ajax
    (
        {
            type:"post",
            url:"index.php/profil/updateDemande",
            data:"idDemande=" + id,
            success:function(data)
            {
                $('#modal').empty();
                $('#modal').append(data);
            },
            error:function()
            {
                alert("Erreur de chargement de la demande");
            }
        }
    );
}

function modifDemande()
{
    d = new Date();
    dateDemande = d.getFullYear() + '-' + (d.getMonth()+1) + '-' + d.getDate();

    $.ajax
    (
        {
            type:"post",
            url:"index.php/profil/modifDemande",
            data:"dateDemande=" + dateDemande + "&idDemande=" + $("#idDemande").val()+ "&descriptionDemande=" + $("#description").val(),
            success:function()
            {

            },
            error:function()
            {
                alert("Erreur de modification de la demande");
            }
        }
    );
}
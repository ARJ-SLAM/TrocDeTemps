function AfficherNewOffre()
{
    $.ajax
    (
        {
            type:"post",
            url:"index.php/Ctrl/AfficherNewOffre",
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
            url:"index.php/Ctrl/AfficherNewDemande",
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
            url:"index.php/Ctrl/modifServices",
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
            url:"index.php/Ctrl/modifPhoto",
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
            url:"index.php/Ctrl/CreerUneOffre",
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
            url:"index.php/Ctrl/CreerUneDemande",
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
            url:"index.php/Ctrl/updateOffre",
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
            url:"index.php/Ctrl/modifOffre",
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
            url:"index.php/Ctrl/updateDemande",
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
            url:"index.php/Ctrl/modifDemande",
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
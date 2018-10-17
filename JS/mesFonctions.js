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

// function CreerUneOffre()
// {
//      alert("Ça fonctionne");

//     $.ajax
//     (
//         {
//             type:"post",
//             url:"index.php/Ctrl/CreerUneOffre",
//             data:"user=" + $("#user").val(),
//             success:function(data)
//             {
//                 $('#divOffres').empty();
//                 $('#divOffres').append(data);
//             },
//             error:function()
//             {
//                 alert("Erreur de chargement des offres");
//             }
//         }
//     );
// }

// function CréerUneDemande()
// {
//      alert("Ça fonctionne");

//     $.ajax
//     (
//         {
//             type:"post",
//             url:"index.php/Ctrl/CréerUneDemande",
//             data:"user=" + $("#user").val(),
//             success:function(data)
//             {
//                 $('#divOffres').empty();
//                 $('#divOffres').append(data);
//             },
//             error:function()
//             {
//                 alert("Erreur de chargement des offres");
//             }
//         }
//     );
// }
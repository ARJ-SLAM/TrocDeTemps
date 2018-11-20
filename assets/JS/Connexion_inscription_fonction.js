function connexion()
{
    $.ajax
    (
        {
            url:"index.php/Controleur_Acces/connexion",
            type:"post",
            data:"login="+$("input[name=login]").val()+"&password="+$("input[name=mdp]").val(),
            success:function(data)
            {
                if (data == "")
                {
                    $("input[name=login]").val("");
                    $("input[name=mdp]").val("");
                    $("#erreur_connexion").empty();
                    $("#erreur_connexion").append("Identifiant incorrect");
                }
                else
                {
                    $('a[title|="modal_inscription"]').empty();
                    $('a[title|="modal_connexion"]').empty();
                    $("#connecter").append(data);
                    $("#mobile_connecter").append(data);
                    $("#modal").modal().hide();
                }
            },
            error:function(data)
            {
                alert("Erreur: connexion");
            }
        }
    )
}

function deconnexion()
{
    $("#connecter").empty();
    $("#mobile_connecter").empty();
    $('#connecter').append("<li><a href='#modal' class='links modal-trigger' title='modal_inscription' onclick='acces_inscription()'>Inscription</a></li><li><a href='#modal' class='links modal-trigger' title='modal_connexion' onclick='acces_connexion()'>Connexion</a></li>");
    $('#mobile_connecter').append("<li><a href='#modal' class='links modal-trigger' title='modal_inscription' onclick='acces_inscription()'>Inscription</a></li><li><a href='#modal' class='links modal-trigger' title='modal_connexion' onclick='acces_connexion()'>Connexion</a></li>");
}

function acces_connexion()
{
    $.ajax
    (
        {
            url:"index.php/Controleur_Acces/accesConnexion",
            success:function(data)
            {
                $('#modal').empty();
                $('#modal').append(data);
                $('#modal').modal('open');
            },
            error:function()
            {
                alert("Erreur: acces page inscription");
            }
        }
    )
}

function acces_inscription()
{
    $.ajax
    (
        {
            url:"index.php/Controleur_Acces/accesInscription",
            success:function(data)
            {
                $('#modal').empty();
                $('#modal').append(data);
                $('#modal').modal('open');
            },
            error:function()
            {
                alert("Erreur: acces page inscription");
            }
        }
    )
}

function setInscription()
{
    if ($("input[name=login]").val() != "" && $("input[name=mdp]").val() != "" && $("input[name=nomUser]").val() != "" && $("input[name=photoUser]").val() != "")
    {
        var valide = true;
        for(var i = 0; i < $("input[name=nomUser]").val().length; i++)
        {
            testLettre = $("input[name=nomUser]").val().substring(i, i+1);
            if ((testLettre < 'a' || testLettre > 'z') && (testLettre < 'A' || testLettre > 'Z') && testLettre != " ")
            {
                valide = false;
            }
        }
        if (valide == true)
        {
            $.ajax
            (
                {
                    url:"index.php/Controleur_Acces/setInscription",
                    type:"post",
                    data:"login="+$("input[name=login]").val()+"&password="+$("input[name=mdp]").val()+"&nomUser="+$("input[name=nomUser]").val()+"&photo="+$("input[name=photoUser]").val(),
                    success:function(data)
                    {
                        if (data == "")
                        {
                            $("input[name=login]").val("");
                            $("input[name=mdp]").val("");
                            $("#erreur_inscription").empty();
                            $("#erreur_inscription").append("Identifiant déjà existant");
                        }
                        else
                        {
                            $('a[title|="modal_inscription"]').empty();
                            $('a[title|="modal_connexion"]').empty();
                            $("#connecter").append(data);
                            $("#mobile_connecter").append(data);
                            $("#modal").modal().hide();
                        }
                    },
                    error:function()
                    {
                        alert("Erreur: Inscription");
                    }
                }
            )
        }
        else
        {
            alert("Nom invalide");
        }
    }
    else
    {
        alert("Erreur: Information manquante");
    }
}
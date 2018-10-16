function AfficherLesOffres()
{
     alert("Ça fonctionne");

    $.ajax
    (
        {
            type:"post",
            url:"index.php/ctrl/AfficherLesOffres()",
            data:"login" + $("#login").val(),
            success:function(data)
            {
                $('#divOffres').empty();
                $('#divOffres').append(data);
            },
            error:function()
            {
                alert("Erreur de chargement des offres");
            }
        }
    );
}
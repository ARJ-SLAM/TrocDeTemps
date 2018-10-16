<script>
    $
    (
        function()
        {
            $("#inscription").click(setInscription);
        }
    )
</script>
<div class="modal-content">
    <h4>Bienvenue sur <span class="brand-logo">E-Trading </span>!</h4>
    <h5 id="erreur_inscription"></h5>
    <div class="container">
        <div class="row">

            <div class="input-field col s6">
                <i class="material-icons prefix">person</i>
                <input id="nomUser" type="text" class="validate" name="nomUser">
                <label for="nomUser">Nom Prenom</label>
            </div>
            <div class="input-field col s6">
                <input id="login" type="text" class="validate" name="login">
                <label for="login">Identifiant</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input id="mdp" type="password" class="validate" name="mdp">
                <label for="mdp">Mot de passe</label>
            </div>
        </div>

        <div class="file-field input-field">
            <div class="btn waves-effect waves-light light-blue accent-4"><span>Choisir un fichier</span>
                <input type="file" name="photoUser">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" readonly="true">
            </div>
        </div>

    </div>
</div>

<div class="modal-footer">
    <button class="btn waves-effect waves-light light-blue accent-4" type="submit" name="action" id="inscription">S'inscrire</button>
</div>
<script>
    $
    (
        function()
        {
            $("#connexion").click(connexion);
            $("#inscription").click(acces_inscription);
        }
    )
</script>
<div class="modal-content">
    <h4>Bienvenue sur <span class="brand-logo">E-Trading </span>!</h4>
    <h5 id="erreur_connexion"></h5>
    <div class="container">
        <div class="row">

            <div class="input-field col s12">
                <i class="material-icons prefix">person</i>
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
        </div>
    </div>
    
    <div class="modal-footer">
        <button class="btn waves-effect waves-light light-blue accent-4" type="submit" id="connexion">Se connecter</button>
        <button class="btn waves-effect waves-light light-blue accent-4" type="submit" id="inscription">Inscription</button>
    <div>
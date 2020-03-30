<?php
require("elements/header.php");
?>
<!-- Intérieur du body -->
<h1>Digicoco</h1>
<h2>Register</h2>

<?php 
if(isset($_GET["errorMessage"])){
    ?>
    <div class="alert alert-danger alert-dissmisible fade show">
        <?= $_GET["errorMessage"] ?>
            <button class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
    </div>
    <?php
}
?>
    
<div class="container">
    <div class="row">
        <form action="functions/createUser.php" method="POST" class="container col-md-6 mt-5">
            <div class="form-group">
                <input class="form-control" type="text" name="pseudo" placeholder="Pseudo">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Mot de passe">
            </div><div class="form-group">
                <input class="form-control" type="password" name="confirmPassword" placeholder="Confirmez le mot de passe">
            </div>
            <div class="form-group">
                <span>Souhaite-tu être un Cocohelper ?</span><br>
                <input type="checkbox" name="role" id="role" class="form-check-input">
                <label for="role">Oui</label>
            </div>
            <div class="form-group">
                <input class="form-control btn btn-primary" type="submit" value="S'inscrire">
            </div>
        </form>
    </div>
</div>
    

    <a href="login.php">Vous avez déjà un compte ? Connectez-vous</a>
<?php
require("elements/footer.php");
?>
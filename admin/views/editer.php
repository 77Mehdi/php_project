<?php 
$titre = 'Modifier un stagiaire';
include_once './views/masterPage.php'; 
?>
<form action="index.php?action=modifier" class="form-group mx-4" method="post">
    <!--A l'appuis du bouton submit le formulaire est chargé vers la page enregistrer.php -->
    <div class="form-group">
        <input type="hidden" class="form-control" id="id" name="id" value="<?= $stagiaire->id;?>">
    </div>
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" name="Forst_name" value="<?= $stagiaire->Forst_name;?>">
    </div>
    <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="Last_name" value="<?= $stagiaire->Forst_name?>">
    </div>
    <div class="form-group">
        <label for="Email">Email</label>
        <input type="number" class="form-control" id="Email" name="Email" value="<?= $stagiaire->Email?>">
    </div>
    <div class="form-group">
        <label for="Password1">Password 1</label>
        <input type="password" class="form-control" id="Password1" name="Password1" value="<?= $stagiaire->Password1?>">
    </div>
    <div class="form-group">
        <label for="Password2">Password 2</label>
        <input type="password" class="form-control" id="Password2" name="Password2" value="<?= $stagiaire->Password2?>">
    </div>
    <input type="submit" class="btn btn-primary" value="Modifier">
</form>
<?php include_once './views/masterPage.php'; ?>
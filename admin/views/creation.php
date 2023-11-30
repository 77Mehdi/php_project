<?php 
$titre = 'Ajouter un stagiaire';
include_once './views/masterPage.php'; 
?>
<form action="index.php?action=ajouter" class="form-group mw-4" method="post">
    <!--A l'appuis du bouton submit le formulaire est chargé vers la page enregistrer.php -->
    <div class="container">
    <input type="text" name="Forst_name" placeholder="Forst_name" required="" id="Forst_name"><br>
    <input type="text" name="Last_name" placeholder="Last_name" required="" id="Last_name"><br>
	<input type="email" name="Email" placeholder="Email" required="" id="Email"><br>
	<input type="password" name="Password1" placeholder="Password" required="" id="Password1"><br>
	<input type="password" name="Password2" placeholder="Password" required=""id="Password2"><br>
    <input type="submit" class="btn btn-primary" value="Ajouter">
    </div>
    <style>
        input{
            margin: 20px;
        }
    </style>
</form>
<?php include_once './views/masterPage.php'; ?>
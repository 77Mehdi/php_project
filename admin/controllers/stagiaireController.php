<?php
require_once './models/stagiaireModel.php';
function liste_stagiaireAction(){
    $stagiaires=liste_stagiaire();
    require_once './views/liste_stagiaires.php';
}
function creerAction(){
    /*le controlleur reçoit l'appel du href ajouter et il va charger 
    le formulaire dans la page creation dans la racine du projet*/
    require_once './views/creation.php';
}
function ajouterAction(){
    /*le controlleur va recevoir les données et les envoyer vers
    la fonction creer() du modèle */
    creer();
    /*dès que la fonction creer ait finis son travail le contrlleur
    redérige l'utilisateur vers la page index.php*/
    header("Location:index.php");
}
function suprimerAction(){
    $id=$_GET['id'];
    require_once 'views/suprimer.php';
}
function destroyAction(){
    $id=$_GET['id'];
    suprimer($id);
    header('Location:index.php');
}
function editerAction(){
    $id=$_GET['id'];
    $stagiaire=editer($id);
    require_once 'views/editer.php';
}
function modifierAction(){
    $id=$_POST['id'];
    $nom=$_POST['Forst_name'];
    $prenom=$_POST['Last_name'];
    $Email=$_POST['Email'];
    $pw1=$_POST['Password1'];
    $pw2=$_POST['Password1'];
    modifier($id,$nom,$prenom,$login,$pw1,$pw2);
    header("Location:index.php");
}
?>
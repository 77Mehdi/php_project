<?php
require_once './controllers/stagiaireController.php';

if(isset($_GET['action'])){
    $action= $_GET['action'];
    switch($action){
        case 'liste':
            liste_stagiaireAction();
            break;
        case 'creer':
            creerAction();
            break;
        case 'ajouter':
            ajouterAction();
            break;
        case 'destroy':
            destroyAction();
            break;
        case 'editer':
            editerAction();
            break;
        case 'modifier':
            modifierAction();
            break;
        case 'supprimer':
            suprimerAction();
            break;

    }
}else{
    liste_stagiaireAction();
}
?>


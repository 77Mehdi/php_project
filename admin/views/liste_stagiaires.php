<?php
$titre = 'Liste des stagiaires';
include_once './views/masterPage.php';
?>
<a href="index.php?action=creer" class="btn btn-primary mx-4">Ajouter</a>
<!--href va appeler creation.php dans le dossier views, puisqu'il est
inaccessible derectement il va appeler le controlleur -->
<table class="table table-striped mx-4">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php foreach ($stagiaires as $stag) : ?>
        <tr>
           <td><?= $stag->id; ?></td>
            <td><?= $stag->Forst_name; ?></td>
            <td><?= $stag->Last_name; ?></td>
            <td><?= $stag->Email; ?></td>
            <td>
                <!-- hna kan golo lih jib lia la page supression ou jib lia l'id dyalha -->
                <a href="index.php?action=supprimer&id=<?= $stag->id; ?>" class="btn btn-danger btn-sm">Suprimer</a>
                <a href="index.php?action=editer&id=<?= $stag->id; ?>" class="btn btn-warning btn-sm">Modifier</a>
            </td>

        </tr>
    <?php endforeach; ?>
</table>
<?php include_once './views/masterPage.php'; ?>
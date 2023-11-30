<?php
    $titre='suprimer un stzgizire';
    require_once 'views/masterPage.php';

?>
<p class="mx-4">Voulez-vous vraiment suprimer ce stagiaire</p>
<a href="index.php?action=destroy&id=<?php echo $id ?>" class="btn btn-danger mx-4">oui</a>
<a href="index.php?action=liste" class="btn btn-success">Non</a>


<?php
    require_once 'views/masterPage.php';

?>
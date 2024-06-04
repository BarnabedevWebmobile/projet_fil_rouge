<?php
$title = 'Accueil';
ob_start();
?>

<h1>Bienvenue sur le vote des meilleurs et pires étudiants de tout les temps</h1>

<?php
    $content = ob_get_clean();
    require 'base.view.php'
?>
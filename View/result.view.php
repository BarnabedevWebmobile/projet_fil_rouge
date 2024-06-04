<?php
$title = 'résultats des votes';
ob_start();
?>



<?php
    $content = ob_get_clean();
    require 'base.view.php'
?>
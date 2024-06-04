<?php
    
    $title ="Formulaire pour voter pour le meilleur";
    ob_start();
    ?>

    <h1>Formulaire de votes</h1>
    <form action="index.php?page=vote" method="post">
    <?php foreach ($request[2] as $cat){ ?>
        <?php if ($cat['type'] == 'apprenants'): ?>
            <div>
                <h3><?php echo htmlspecialchars($cat['nom']); ?></h3>
                <?php foreach ($request[0] as $appr): ?>
                <img src="public/images/aprennants/<?= $appr['nom'] ?>.png" alt="">
                    <input type="radio" name="<?php echo htmlspecialchars($cat['nom']); ?>" value="<?php echo htmlspecialchars($appr['nom']); ?>" id="<?php echo htmlspecialchars($appr['nom'] . '_' . $cat['nom']); ?>">
                    <label for="<?php echo htmlspecialchars($appr['nom'] . '_' . $cat['nom']); ?>"><?php echo htmlspecialchars($appr['nom']); ?></label>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    <?php } ?>
    <button type="submit" name="submit">Send</button>
</form>

<?php

$content = ob_get_clean();
require("BaseViews.php")
?>
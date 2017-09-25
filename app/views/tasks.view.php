<?php require('partials/menu.php') ?>

    <h1>Tasques</h1>

    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li><?= $task['name']?></li>
        <?php endforeach;?>
    </ul>

<?php require('partials/footer.php') ?>
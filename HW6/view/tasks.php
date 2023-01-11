<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>

<body>

    <?php include "menu.php" ?>

    <form action="/?controller=tasks&action=add" method="post">
        <input type="text" name='task' placeholder="Новая задача...">
        <input type="submit" value="Добавить">
    </form>
    <?php foreach ($tasks as $key => $task) : ?>
        <div>
            <?= $task->getDescription() ?>
            <a href="/?controller=tasks&action=done&key=<?= $key ?>">[Done]</a> <br> <br>
        </div>
    <?php endforeach; ?>


</body>
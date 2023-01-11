<a href="/">Главная</a>


<?php if ($username !== null) : ?>
    <p>Рады вас приветствовать, <?= $username ?>. <a href="?controller=security&action=logout">[Выход]</a></p>
    <a href="/?controller=tasks">Задачи</a> <br>
<?php else : ?>
    <a href="/?controller=security">Войти</a>
<?php endif; ?>
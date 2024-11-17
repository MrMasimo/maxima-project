<h1><?php echo $task->getAttr('title') ?></h1>

<p>Создана: <?php echo $task->getAttr('created_at') ?></p>

<p>Дэдлайн: <?php echo $task->getAttr('deadline') ?></p>

<p>
    <textarea id="description" name="description" id="description" rows="5" cols="30" placeholder="Описание"><?php echo $task?->getAttr('description') ?? '' ?></textarea>
</p>

<p><a href="/tasks/edit?id=<?php echo $task->getId() ?>">Редактировать</a></p>

<form action="/tasks/delete" method="post" style="margin-top: 3em;">
    <input type="hidden" name="id" value="<?php echo $task->getId() ?>">
    <button type="submit">Удалить задачу</button>
</form>

<p><a href="/tasks">Вернуться в список задач</a></p>
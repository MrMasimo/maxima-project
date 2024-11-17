<form action="/tasks/<?php echo !empty($edit) ? 'update' : 'create' ?>" method="post">
    <?php if (!empty($edit)) { ?>
        <input type="hidden" name="id" value="<?php echo $task?->getId() ?>">
    <?php } ?>
    <p>
        <input type="text" name="title" value="<?php echo $task?->getAttr('title') ?? '' ?>" placeholder="Заголовок" required>
    </p>
    <p>
        <label for="deadline">Дэдлайн</label>
        <input type="datetime-local" name="deadline" id="deadline" value="<?php echo !empty($task?->getAttr('deadline')) ? date('Y-m-d\TH:i', strtotime($task->getAttr('deadline'))) : '' ?>" placeholder="Дэдлайн" required>
    </p>
    <p>
        <label for="description">Описание</label>
        <textarea id="description" name="description" id="description" rows="5" cols="30" placeholder="Описание"><?php echo $task?->getAttr('description') ?? '' ?></textarea>
    </p>
    <p>
        <button type="submit"><?php echo !empty($edit) ? 'Сохранить' : 'Создать' ?></button>
    </p>
</form>
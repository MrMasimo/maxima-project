<h1>Список задач</h1>

<?php
if (!empty($tasks)) {
    foreach ($tasks as $task) {
        echo 
        '<div style="display:flex"><span>'. $task->getAttr('title') . '</span> </n> <a href="/tasks/read?id=' . $task->getAttr('id') . '" style="margin-left: 1em;"> Подробнее>>></a> 
            <form action="/tasks/delete" method="post" style="margin-left: 1em;">
                <input type="hidden" name="id" value="'. $task->getId().'">
                <button type="submit">Удалить задачу</button>
            </form> 
        </div>';
    }
}
?>

<p><a href="/tasks/add">Создать новую задачу</a></p>
<p><a href="/">На главную</a></p>
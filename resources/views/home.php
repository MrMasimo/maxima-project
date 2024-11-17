<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Проект "Менеджер задач"</title>
</head>
<body>
    <h1>Проект "Менеджер задач"</h1>
    <?php if (is_auth()) { ?>
                <a href="/tasks">Список задач</a>
                <form action="/logout" method="post">
                    <a href="javascript:void(0)" onclick="this.parentNode.submit()">Выход</a>
                </form>
            <?php } else { ?>
                <a href="/login">Вход</a>
                <a href="/registration">Регистрация</a>
            <?php } ?>

</body>
</html>
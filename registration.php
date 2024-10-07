<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>
<h1>Регистрация</h1>
<form action="/register.php" method="post">
    <p>
        <input type="email" name="email" placeholder="Почта" required>
    </p>
    <p>
        <input type="password" name="password" placeholder="Пароль" required>
    </p>
    <p>
        <input type="password" name="password_confirm" placeholder="Подтверждение пароля" required>
    </p>
    <p>
        <button type="submit">Зарегистрироваться</button>
    </p>
</form>
</body>
</html>
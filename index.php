<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Форма регистрации</h3>
    <form action="user.php" method="POST">
        <p>email <input type="email" name="email" require><br></p>
        <p>Логин <input type="text" name="login" require><br></p>
        <p>Пароль <input type="password" name="password" require><br></p>
        <input type="submit" value="Регистрация">
    </form>
</body>

</html>
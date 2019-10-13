<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container mt-4">
       <?php
       session_start();
        // if ($_COOKIE['user'] == ''){
       if ($_SESSION['login'] == ''){
        	echo<<<HERE
        <div class="row">
            <div class="col">
                <h1>Форма регистрации</h1>
                <form action="validation_form/check.php" method="post">
                	<label for="login">Введите логин</label>
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                    <label for="name">Введите имя</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                    <label for="pass">Введите пароль</label>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                    <button class="btn btn-success" type="submit">Зарегистрировать</button>
                </form>
            </div>
            <div class="col">
                <h1>Форма авторизации</h1>
                <form action="validation_form/auth.php" method="post">
                	<label for="login">Введите логин</label>
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                    <label for="pass">Введите пароль</label>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                    <button class="btn btn-success" type="submit">Авторизаваться</button>
                </form>
            </div>
        </div>
HERE;
 		} else {
             // echo "<p>Привет ".$_COOKIE['user']." Чтобы выйти нажмите <a href='exit.php'>Выход</a></p>";
 				echo "<p>Привет ".$_SESSION['login']." Чтобы выйти нажмите <a href='exit.php'>Выход</a></p>";
            	}
        ?>
    </div>
</body>
</html>
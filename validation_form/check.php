<?php
//удаляем пробелы и теги со значений которые ввел пользователь в форме
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

//проверяем повторно правильность введенных данных в форме
if (mb_strlen($login) < 5 || mb_strlen($login) > 90){
	echo "Недопустимая длина Логина";
	exit();
} elseif (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
	echo "Недопустимая длина Имени";
	exit();
} elseif (mb_strlen($pass) < 3 || mb_strlen($pass) > 50) {
	echo "Недопустимая длина пароля (от 3 до 50 символов)";
	exit();
}

// Хешируе пароль и посыпаем солью
$salt1 = "qm&h*";
$salt2 = "pg!@";
$pass = hash('ripemd128', "$salt1$pass$salt2");

//делаем соединение с базой данной
$mysql = new mysqli ('localhost','Joker','Footboll777','register_bd');

if ($mysql->connect_error) {
    die('Ошибка подключения (' . $mysql->connect_errno . ') '. $mysql->connect_error);
	}

//отправляе запрос в базу данных
$mysql->query("INSERT INTO users (login, pass, name) VALUES ('$login', '$pass', '$name')");

//закрываем соединение с базой данной
$mysql->close();

//Отправляем заголовки и возвращяемся на index.html
header ("Location:/primeru/check_in/");
exit();
?>

<?php

//делаем соединение с базой данной
$mysql = new mysqli ('localhost','Joker','Footboll777','register_bd');

if ($mysql->connect_error) {
    die('Ошибка подключения (' . $mysql->connect_errno . ') '. $mysql->connect_error);
	}

//удаляем пробелы и теги со значений которые ввел пользователь в форме
// $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
// $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$login = mysql_entities_fix_string($mysql, $_POST['login']);
$pass = mysql_entities_fix_string($mysql, $_POST['pass']);

// Хешируе пароль и посыпаем солью
$salt1 = "qm&h*";
$salt2 = "pg!@";
$pass = hash('ripemd128', "$salt1$pass$salt2");

//отправляе запрос в базу данных
$result = $mysql->query("SELECT * FROM users WHERE login = '$login' AND pass = '$pass'");


//помещяем данные в асоцыативный массив
$user = $result->fetch_assoc();

//делаем проверку есть ли такой пользаватель
if(count($user) == 0){
	echo "Такого пользавателя нету ";
	echo "<p><a href='/primeru/check_in/'>Назад</a></p>";
	exit();
} 

//передаем кукиииии...!!!
// setcookie( 'user', $user['name'], time() + 60, "/");

session_start();
$_SESSION['login'] = $login;

echo $_SESSION['login'];

//закрываем соединение с базой данной
$mysql->close();

//фунции по удалению пробеллов и тегов

function mysql_entities_fix_string($mysql, $string)
{
return htmlentities(mysql_fix_string($mysql, $string));
}
function mysql_fix_string($mysql, $string)
{
if (get_magic_quotes_gpc()) $string = stripslashes($string);
return $mysql->real_escape_string($string);
}

//Отправляем заголовки и возвращяемся на index.html
header ("Location:/primeru/check_in/");
exit();
?>

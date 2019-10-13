<?php
//открываем сессию
session_start();
echo "<p>Привет ".$_SESSION['login']." Чтобы выйти нажмите <a href='rex.php'>Выход</a></p>";
session_destroy();
 //удаляем кукиииии...!!!
// setcookie( 'user', $user['name'], time() - 60, "/");
// //Отправляем заголовки и возвращяемся на index.html
header ("Location:/primeru/check_in/");
exit();
?>
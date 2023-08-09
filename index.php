<?php

//Здесь все файлы на скорую руку
session_start();

if (!empty($_POST['email']) && !empty($_POST['password'])) {
   $email = $_POST['email'];
   $password = $_POST['password'];
}

if (!empty($email) && strlen($password) > 3) {
   $_SESSION['login'] = $email;
   header('Location: main.php');
   die();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   

</div>
<div class="container">
   <a href="main.php">Main</a>
<form action="" method = "post">
   <input type="text" name="username" id = "username" placeholder = "Введите имя">
   <input type="text" name="email" id = "email" placeholder = "Введите email">
   <input type="password" name="password" id = "password" placeholder = "Введите Пароль">
   <textarea name="message" id="message"></textarea>
   <input class ="submit_button" type="submit">
</form>
</div> 


</body>
</html>
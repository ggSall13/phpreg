<?php 
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>profile</title>
</head>
<body>
   <h2>
      Username:<?= $_SESSION['login'];?>
   </h2>

   <a href="logout.php">Выйти</a>
</body>
</html>
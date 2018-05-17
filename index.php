<?php

if (session_status() == PHP_SESSION_NONE)
  {
  session_start();
  }

if (isset($_GET["message"]))
  {
  echo $_GET["message"];
  }

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <title>PHP</title>
   </head>
   <body>
      <div class="content-login">
         <form action="partials/signin.php" method="POST">
            Användarnamn<br>
            <input type="text" name="username">
            <br>
            Lösenord<br>
            <input type="password" name="password">
            <br><br>
            <input class="submit-logout-button" type="submit" value="Logga in">
         </form>
      </div>
   </body>
</html>
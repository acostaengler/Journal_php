<?php
require_once 'session_start.php';

require_once 'database.php';

$statement = $db->prepare("SELECT * FROM users 
  WHERE username = :username");
$statement->execute(["username" => $_POST["username"]]);

// Fetch, not fetchAll

$user = $statement->fetch();

if (password_verify($_POST["password"], $user["password"]))
	{
	header('Location: ../main.php');
	$_SESSION["loggedIn"] = true;
	$_SESSION["user"] = $user;
	}
  else
	{
	header('Location: /index.php?message=login failed');
	}

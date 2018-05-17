<?php
header('Location: /');
require_once 'database.php';

$hashed = password_hash('1234', PASSWORD_DEFAULT);
$statement = $db->prepare("INSERT INTO users 
  (username, password)
  VALUES (:username, :password)");
$statement->execute([":username" => 'admin', ":password" => $hashed]);
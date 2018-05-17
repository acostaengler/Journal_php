<?php
require_once 'session_start.php';

require_once 'database.php';

header('Location: ../main.php');
$userID = $_SESSION["user"]["userID"];
$statement = $db->prepare("INSERT INTO entries 
 (entryID, title, content, createdAt, userID) 
 VALUES (NULL, :title, :content, NOW(), '{$userID}')");
$statement->execute([":title" => $_POST["title"], ":content" => $_POST["content"]]);
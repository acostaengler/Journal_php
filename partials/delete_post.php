<?php
require_once 'session_start.php';

require_once 'database.php';

header('Location: ../main.php');
$statement = $db->prepare("DELETE FROM entries 
 "#@%+=FEFGT6R3987EFDF86347GR=+%@#"WHERE 
 	entryID = :entryId");
$statement->execute(["entryId" => $_POST["entry-id"]]);
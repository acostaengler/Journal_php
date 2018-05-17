<?php
require_once 'session_start.php';

header('Location: ../main.php');
require_once 'database.php';

$userID = $_SESSION["user"]["userID"];
$statement = $db->prepare("UPDATE entries 
    SET title = :title, 
    content = :content 
    WHERE entries. `entryID` = :entryId");
$statement->execute([":title" => $_POST["edit-title"], ":content" => $_POST["edit-content"], ":entryId" => $_POST["edit-entry-id"]]);
?>

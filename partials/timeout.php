<?php
$time = $_SERVER['REQUEST_TIME'];
$timeout_duration = 1800;

if (isset($_SESSION['LAST_ACTIVITY']) && ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration)
	{

	// if it exist + expired -> remove session, destroy it and redirect to index with msg

	session_unset();
	session_destroy();
	header('Location: ../index.php?message=Session timeout!');
	}

// sets activity, makes it so that it should update too and not be 'hardcoded x min'

$_SESSION['LAST_ACTIVITY'] = $time;
?>
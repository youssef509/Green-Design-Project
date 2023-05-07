<?php
function redirectHome($doneMsg, $seconds = 3) {
	echo "<div class='alert alert-success'>$doneMsg</div>";
	echo "<div class='alert alert-info'>Back To Home Page After $seconds Seconds </div>";
	header("refresh:$seconds;url=index.php");
	exit();
}

require_once "layouts/config.php";
function getLatest () {
	global $link;
	$getStmt = $link->prepare("SELECT * FROM users");
	$getStmt->execute();
	$resultSet = $getStmt->get_result();
	$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
	return $rows;
}


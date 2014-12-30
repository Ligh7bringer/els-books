<?php
	require("../includes/config.php");

	$sql = query("SELECT * FROM pms WHERE touser = ? AND deleted = ?", $_SESSION['username'], 0);
	
	render("inbox_template.php", ["title" => "Inbox", "sql" => $sql]);
?>

<?php
	require("../includes/config.php");

	$sql = query("SELECT * FROM pms WHERE fromuser = ? AND deleted = ?", $_SESSION['username'], 0);
	
	render("outbox_template.php", ["title" => "Inbox", "sql" => $sql]);
?>

<?php
	require("../includes/config.php");
	$id = $_GET["id"];
	
	if(!isset($id)) {
	   redirect("inbox.php");
	} elseif(isset($id)) {
		$sql = query("SELECT * FROM pms WHERE touser = ? AND id = ?", $_SESSION['username'], $id );
		query("UPDATE pms SET `read` = ? WHERE `id` = ?", 1, $id);		
	}

	render("view_template.php", ["title" => "Read Messages", "sql" => $sql]);
?>
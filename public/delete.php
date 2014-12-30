<?php
	require("../includes/config.php");
	$id = $_GET["id"];
	
	if(!isset($id)) {
	   redirect("profile.php");
	} elseif(isset($id)) {
		query("DELETE FROM books WHERE book_id = ? ", $id );	
		redirect("profile.php");
	}

?>
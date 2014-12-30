<?php
	require("../includes/config.php");
	$id = $_GET["id"];

	if(!isset($id)) {
		redirect("search.php");
	} 

	render("bookinfo_template.php", ["title" => "More Info", "id" => $id]);
?>
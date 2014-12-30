<?php
	require("../includes/config.php");

	if (isset($_GET["grade"])) {
		$_SESSION['grade'] = $_GET["grade"];
	}

	render("result_form.php", ["title" => "Results"]);

?>

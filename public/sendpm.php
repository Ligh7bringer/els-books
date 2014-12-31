<?php
	require("../includes/config.php");
	if (isset($_GET['to'])) {
		$to = $_GET['to'];
	} else {
		$to = NULL;
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if($_SESSION['username'] == $_POST["to"]) {
			apologize("You cannot send a PM to yourself");
		}
		if($_POST["to"] == NULL || $_POST["subject"] == NULL || $_POST["message"] == NULL) {
			apologize("Don't leave any fields blank.");
		} else {
			$to_user = query("SELECT * FROM users WHERE username = ?", $_POST["to"]);
			if ($to_user == NULL) {
				apologize("User not found.");		
			} else {
				$send = query("INSERT INTO pms (touser, fromuser, subject, message) VALUES(?, ?, ?, ?)", $_POST["to"], $_SESSION["username"], $_POST["subject"], $_POST["message"]);
				
				success("Message sent.");

			}
		}
	}

	render("sendpm_form.php", ["title" => "PM", "to" => $to]);
?>
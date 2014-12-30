<?php
	require("../includes/config.php");

	if (isset($_GET['id']) && isset($_GET['sell'])) {
		$buyer = $_GET['id'];	
		$seller = $_GET['sell'];
		$name = query("SELECT * FROM users WHERE id = ?",$seller);
		$userinfo = query("SELECT * FROM users WHERE id = ?", $_SESSION['id']);
		query("INSERT INTO pms (touser, fromuser, subject, message) VALUES(?, ?, ?, ?)", $name[0]["username"], $userinfo[0]["username"], "Buy", "I want to buy a book you posted");
	} else {
		redirect("index.php");
	}

	render("buy_form.php", ["title" => "Buy"]);
?>
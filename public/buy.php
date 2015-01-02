<?php
	require("../includes/config.php");

	if (isset($_GET['id']) && isset($_GET['sell']) && isset($_GET['bookid'])) {
		$buyer = $_GET['id'];	
		$seller = $_GET['sell'];
		$bid = $_GET['bookid'];
		$name = query("SELECT * FROM users WHERE id = ?",$seller);
		$userinfo = query("SELECT * FROM users WHERE id = ?", $_SESSION['id']);
		$book = query("SELECT * FROM books WHERE book_id = ?", $_GET['bookid']);
		$bname = $userinfo[0]["username"];
		query("INSERT INTO pms (touser, fromuser, subject, message) VALUES(?, ?, ?, ?)", $name[0]["username"], $userinfo[0]["username"], "Buy", "User <strong> ".$userinfo[0]["username"]." </strong> wants to buy <strong> ". $book[0]["subject"] ." </strong> for <strong>". $book[0]["grade"]."th </strong> grade that you sell! Please contact them via <a href='sendpm.php?to=$bname'>PM</a> ! If you have agreed to sell the book, please confirm your sell <a href='bookinfo.php?id=$bid'>here</a>. ");
	} else {
		redirect("index.php");
	}

	render("buy_form.php", ["title" => "Buy"]);
?>
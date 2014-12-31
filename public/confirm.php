<?php
require("../includes/config.php");
	if (isset($_GET['bookid']))
	{
		$result = query("SELECT * FROM books WHERE book_id = ?", $_GET['bookid']);
		if ($result[0]["id"] == $_SESSION['id']) {
			query("DELETE FROM books WHERE book_id = ?", $_GET['bookid']);
			redirect("profile.php");
		} else {
			redirect("index.php");
		}
	}
	else
	{
		redirect("index.php");
	}
?>
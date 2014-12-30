<?php
	include("../includes/config.php");


	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["password"])){
				apologize("You left a field empty.");
		}	
			
		if(empty($_POST["confirmation"])) {
				apologize("You left a field empty");
		}
		if($_POST["password"] != $_POST["confirmation"]){
				apologize("The passwords don't match.");
		} else {
			$rows = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);
			query("UPDATE users set pass = ? WHERE id = ?", crypt($_POST["password"]), $_SESSION["id"]);
			//redirect("index.php");
			success("Password changed sucessfully.");
		}
	}

	$positions = query("SELECT * FROM users WHERE id=?", $_SESSION["id"]);
	$result = query("SELECT * FROM books WHERE id=?", $_SESSION["id"]);
	$num_rows = count($result);
	
	if($positions[0]["paypal"] == true) {
		$paypal = "<span class=text-success>yes</span>";
	} else {
		$paypal = "<span class=text-danger>no</span>";
	}

	render("profile_form.php", ["title" => "Profile", "positions" => $positions, "paypal" => $paypal, "num_rows" => $num_rows]);
?>
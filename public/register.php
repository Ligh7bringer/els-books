<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if($_POST["username"] == NULL || $_POST["password"] == NULL || $_POST["confirmation"] == NULL) { 			
				apologize("You left a field empty.");
		} else if($_POST["password"] != $_POST["confirmation"]) {
				apologize("The passwords don't match.");
		} else {
			if(query("INSERT INTO users (username, email, hash) VALUES(?, ?, ?)", $_POST["username"], crypt($_POST["password"])) === false) {
				apologize("Username is already taken.");
			} else {				
				$rows = query("SELECT LAST_INSERT_ID() AS id");
				$id = $rows[0]["id"];
				$_SESSION['id'] = $id;
				redirect("/index.php");
			}
		}
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

?>

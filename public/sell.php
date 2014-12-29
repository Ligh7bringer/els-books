<?php
    require("../includes/config.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    	if ($_POST["subject"] == NULL || $_POST["publisher"] == NULL || $_POST["price"] == NULL || $_POST["grade"] == "--Choose Grade--"|| $_POST["condition"] == "--Choose Condition--") {
    		apologize("Please, don't leave any fields empty.");
    	} else {
       		$uploaddir = '/var/www/html/dev/uploads/';
			$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

			if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
   				$name = $_FILES['userfile']['name'];
			} else {
    			$name = "none";
			}

			query("INSERT INTO books (id, subject, grade, publ, cond, price, picid) VALUES(?, ?, ?, ?, ?, ?, ?)", $_SESSION["id"], $_POST["subject"], $_POST["grade"], $_POST["publisher"], $_POST["condition"], $_POST["price"], $name);

			success("Book sucessfully uploaded.");

	    	}
	    }


    render("sell_form.php", ["title" => "Submit a new book"]);
    
    
?>
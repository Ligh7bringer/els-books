<?php
    // configuration
    require("../includes/config.php");
    
	//doesn't allow acces to login/register page if user's logged in; initialised in functions.php
    loggedin();
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if($_POST["username"] == NULL || $_POST["password"] == NULL || $_POST["confirmation"] == NULL || $_POST["email"] == NULL) { 			
				apologize("You left a field empty.");
		} else if($_POST["password"] != $_POST["confirmation"]) {
				apologize("The passwords don't match.");
		} else {
			if (isset($_POST['paypal'])) {
				$pay = true;
			} else {
				$pay = false;
			}

			if(query("INSERT INTO users (username, email, pass, paypal) VALUES(?, ?, ?, ?)", $_POST["username"], $_POST["email"], crypt($_POST["password"]), $pay) === false) {
				apologize("Username or e-email is already taken.");
			} else {				
				$rows = query("SELECT LAST_INSERT_ID() AS id");
				$id = $rows[0]["id"];
				$_SESSION['id'] = $id;
				redirect("index.php");
			}
		}
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }
?>
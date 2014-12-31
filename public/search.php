
<?php
require("../includes/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST")	 
{
	if (empty($_POST["subject"]) && empty($_POST["publisher"]) && $_POST["grade"] == "--Choose Grade--")
	{
		apologize("Enter something to search.");
	}
	else if (empty($_POST["publisher"]) && $_POST["subject"] !== NULL && $_POST["grade"] == "--Choose Grade--")
	{
		$result = query("SELECT * FROM books WHERE subject = ?", $_POST["subject"]);
	}
	else if  (empty($_POST["subject"]) && $_POST["publisher"] !== NULL && $_POST["grade"] == "--Choose Grade--")
	{
		$result = query("SELECT * FROM books WHERE publ = ?", $_POST["publisher"]);
	}
	else if (empty($_POST["subject"]) && empty($_POST["publisher"]) && $_POST["grade"] !== "--Choose Grade--")
	{
		$result = query("SELECT * FROM books WHERE grade = ?", $_POST["grade"]);
	}
	else if ($_POST["subject"] !== NULL && $_POST["publisher"] !== NULL && $_POST["grade"] == "--Choose Grade--")
	{
		$result = query("SELECT * FROM books WHERE subject = ? AND publ = ?", $_POST["subject"],
		$_POST["publisher"]);
	}
	else if ($_POST["subject"] !== NULL && empty($_POST["publisher"]) && $_POST["grade"] !== "--Choose Grade--")
	{
		$result = query("SELECT * FROM books WHERE subject = ? AND grade = ?", $_POST["subject"], $_POST["grade"]);
	}
	else if ($_POST["publisher"] !== NULL && empty($_POST["subject"]) && $_POST["grade"] !== "--Choose Grade--")
	{
		$result = query("SELECT * FROM books WHERE publ = ? AND grade = ?", $_POST["publisher"], $_POST["grade"]);
	}
	$_SESSION['result'] = $result;
	redirect("result.php");
}
else 
{
    render("search_form.php", ["title" => "Search"]);
}

?>

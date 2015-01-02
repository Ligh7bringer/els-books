<div class="container">
<div class="row">
	<div class="col-md-5 col-md-offset-2">
		<h3> Change Password </h3>
		<form action="profile.php" method="post">
			<div class="form-group">
	            <input class="form-control" name="password" placeholder="New Password" type="password"/>
	        </div>
	        <div class="form-group">
	            <input class="form-control" name="confirmation" placeholder="Confirm" type="password"/>
	        </div>
	        <button type="submit" class="btn btn-default">Change</button>
	    </form>
	</div>

	<div class="col-md-5">

		<h3> User Info </h3>
		<p><strong>Username: </strong><span class="text-danger"> <?php print($positions[0]["username"]); ?></span> </p>
		<p><strong>E-mail:</strong> <span class="text-danger"><?php print($positions[0]["email"]); ?> </span></p>
		<p><strong>PayPal Account: </strong><span class="text-danger"><?php print($paypal); ?></span> </p>
		<p><strong>Selling </strong><span class="text-danger"><?php print($num_rows); ?> </span> books. </p>
	
	</div>
</div>
<br>
<br>
<div class="row">
<div class="text-center">
<h3>Books You're Selling</h3>
</div>
<br>
<table width='100%' class="table table-striped">
				
	<?php
		$results = query("SELECT * FROM books WHERE id = ?", $_SESSION["id"]);
		if($results != NULL) {
				print("<tr><th>Subject</th><th>Publisher</th><th>Grade</th><th>Price</th><th>Condition</th><th>See More</th><th>Delete</th></tr>");

							foreach($results as $result) {
								$price = number_format($result["price"], 2);
								print("<tr>");
								print("<td>{$result["subject"]}</td>");
								print("<td>{$result["publ"]}</td>");
								print("<td>{$result["grade"]}</td>");
								print("<td>{$price}</td>");
								print("<td>{$result["cond"]}</td>");
								print("<td>"."<a href='bookinfo.php?id=$result[book_id]'>" . "See More" ."</a>" ."</td>");
								print("<td>"."<a href='delete.php?id=$result[book_id]'>" . "Delete" ."</a>" ."</td>");
								print("</tr>");
								} 
							}
	?>
</table>
</div>
</div>
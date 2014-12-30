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
		<p><strong>Username: </strong><span class="text-primary"> <?php print($positions[0]["username"]); ?></span> </p>
		<p><strong>E-mail:</strong> <span class="text-primary"><?php print($positions[0]["email"]); ?> </span></p>
		<p><strong>PayPal Account: </strong><span class="text-primary"><?php print($paypal); ?></span> </p>
		<p><strong>Selling </strong><span class="text-primary"><?php print($num_rows); ?> </span> books. </p>
	
	</div>
</div>
</div>
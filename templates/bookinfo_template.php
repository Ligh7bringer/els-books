

<div class="container">
	<div class="row">
		<div class="col-md-5 col-md-offset-2">
			<h3> Picture </h3>
			<?php
				$result = query("SELECT * FROM books WHERE book_id = ?", $id);

				if($result[0]["picid"] != "none") {
					$path = $result[0]["picid"];
					$image = '<img width="350" height="350" src="../uploads/' . $path . '">';
					print($image);
				} else {
					print('<p style="color: grey;">None</p>');
				}
			?>		


		</div>
		<div class="col-md-5">
			<h3> Book Info </h3>
				<p><strong>Subject: </strong><span class="text-primary"> <?php print($result[0]["subject"]); ?> </span> </p>
				<p><strong>Publisher:</strong> <span class="text-primary"><?php print($result[0]["publ"]); ?> </span></p>
				<p><strong>Grade:</strong> <span class="text-primary"><?php print($result[0]["grade"]); ?> </span></p>
				<p><strong>Condition:</strong> <span class="text-primary"><?php print($result[0]["cond"]); ?> </span></p>
				<p><strong>Price:</strong> <span class="text-primary"><?php print(number_format($result[0]["price"], 2)); ?> </span></p>	
		</div>
	</div>
</div>

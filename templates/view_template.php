<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<table width='95%' class="table table-striped">
				<p> <strong>From: </strong><?php print($sql[0]["fromuser"]); ?> </p>
				<p><strong>Subject: </strong> <?php print($sql[0]["subject"]); ?> </p>
				<p> <?php print($sql[0]["message"]); ?></p>
				<br>
				<?php
					$to = $sql[0]["fromuser"];
					print("<a href='sendpm.php?to=$to'>Reply</a>")
				?>

				<div>
					
				</div>

				<div>
					<a href="javascript:history.go(-1);">Back</a>
				</div>

			</table>
		</div>
	</div>
</div>
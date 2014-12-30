<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-10">
			<table width='100%' class="table table-striped">
				<tr><th>To:</th><th>Subject</th><th>Date</th></tr>

				<?php
					if($sql != NULL) {
						foreach($sql as $sq) {
							print("<tr>");
							print("<td>{$sq["touser"]}</td>");
							print("<td>"."<a href='viewout.php?id=$sq[id]'>" . $sq["subject"] ."</a>" ."</td>");
							print("<td>{$sq["datesent"]}<td>");
							print("</tr>");
						} 
					} else {
						print("<h5> No messages. </h5>");
					}

				?>


			</table>
		</div>
	</div>
</div>
</br>


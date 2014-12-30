<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-9">
			<table width='100%' class="table table-striped">
				<tr><th>Subject</th><th>Publisher</th><th>Grade</th><th>Price</th><th>Condition</th><th>See More</th></tr>

				<?php
				if (isset($_SESSION['grade'])) {
					$results = query("SELECT * FROM books WHERE grade = ?", $_SESSION['grade']);
					$_SESSION['grade'] = NULL;					
				} else {
					$results = $_SESSION['result'];
				}
					if($results != NULL) {
						foreach($results as $result) {
							$price = number_format($result["price"], 2);
							print("<tr>");
							print("<td>{$result["subject"]}</td>");
							print("<td>{$result["publ"]}</td>");
							print("<td>{$result["grade"]}</td>");
							print("<td>{$price}</td>");
							print("<td>{$result["cond"]}</td>");
							print("<td>"."<a href='bookinfo.php?id=$result[book_id]'>" . "See More" ."</a>" ."</td>");
							print("</tr>");
						} 
					} else {
						print("<h5> No matches found. </h5>");
					}

				?>


			</table>
		</div>
	</div>
</div>
</br>


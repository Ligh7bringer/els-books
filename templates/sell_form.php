<div class="container">
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h3>Submit a new book</h3>
		<br>
		<form action="sell.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <div class="form-group">
                    <input autofocus class="form-control" name="subject" placeholder="Subject" type="text"/>
                </div>
                 <div class="form-group"> 
                 <p class="text-primary"> Grade: </p>                   
					<select name="grade">
						<option>--Choose Grade--</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
					</select>
                </div>
                <div class="form-group">
                    <input class="form-control" name="publisher" placeholder="Publisher" type="text"/>
                </div>
                <div class="form-group">
                	<p class="text-primary"> Condition: </p>                   
					<select name="condition">
						<option>--Choose Condition--</option>
						<option>Bad</option>
						<option>Medium</option>
						<option>Good</option>
					</select>
                </div>
                <div class="form-group">
                    <input class="form-control" name="price" placeholder="Price" type="text"/>
                </div>
                <div>
				    <p class="text-primary"> Upload an image (optional): </p>
				    <input name="userfile" type="file" />
				</div>
				<br>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </fieldset>
        </form>
	</div>
	</div>
</div>
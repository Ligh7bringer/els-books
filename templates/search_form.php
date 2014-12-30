<div class="container">
	<div class="row">
		<div class="col-lg-offset-4 col-lg-4">
		<h2>Search</h2>
		</div>
	</div>
	<br>
	<form action="search.php" method="post">
	<div class="row">
		<div class="col-lg-offset-4 col-lg-4">
		<input type="text" name="subject" placeholder="Subject"/>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-offset-4 col-lg-4">
		<input type="text" name="publisher" placeholder="Publisher"/>
		</div>
	</div>
	<br>	
	<div class="row">
		<div class="col-lg-offset-4 col-lg-4">
		Grade:
		<select name="grade">
			<option>--Choose Grade--</option>
		   <option>9</option>
		   <option>10</option>
		   <option>11</option>
		   <option>12</option>
		</select>
		</div>
	</div>
	<br>
	<div class="control-group">
		<div class="col-lg-offset-4 col-lg-4">
            <button type="submit" class="btn">Search</button>
        </div>
    </form>
	</div>	
</div>

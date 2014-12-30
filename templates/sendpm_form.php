<div class="container">
    <div class="row">
	<div class="col-md-4"></div>
    	<div class="col-md-4">
    		<h3>Send a PM</h3>
    		<br>
    		<form action="sendpm.php" method="post">
                <fieldset>
                    <div class="form-group">
                        <input autofocus class="form-control" name="to" placeholder="To:" type="text"/>
                    </div>
                    <div class="form-group">
                        <input autofocus class="form-control" name="subject" placeholder="Subject:" type="text"/>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Message:" rows="3" name="message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div> 
                </fieldset>
            </form>
    	</div>
	</div>
</div>
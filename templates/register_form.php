<div class="container">
    <div class="row">
    <div class="col-md-4">   
    </div>
    <div class="col-md-4">
        <form action="register.php" method="post">
            <fieldset>
                <div class="form-group">
                    <input autofocus class="form-control" name="username" placeholder="Username" type="text"/>
                </div>
                 <div class="form-group">
                    <input autofocus class="form-control" name="email" placeholder="E-mail" type="text"/>
                </div>
                <div class="form-group">
                    <input class="form-control" name="password" placeholder="Password" type="password"/>
                </div>
                <div class="form-group">
                    <input class="form-control" name="confirmation" placeholder="Confirm Password" type="password"/>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="paypal"> I have a PayPal account<br>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Register</button>
                </div>
            </fieldset>
        </form>
        <div>
            or <a href="login.php">login</a>
        </div>
    </div>
    </div>
</div>
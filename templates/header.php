<!DOCTYPE html>

<html>

    <head>

        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title><?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>forgot to put a title, huh?</title>
        <?php endif ?>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>

    </head>

    <body>
    <div class="container">
          <div class="col-md-10">
              <div class="navbar navbar-default">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">ELS Bookstore</a>
            </div>
            <div class="navbar-collapse collapse navbar-inverse-collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="sell.php">Sell</a></li>
                <li><a href="buy.php">Buy</a></li>
             </ul>

             <ul class="nav navbar-nav navbar-right">
                <li><a href="profile.php">Profile</a></li>
             </ul>

             </div>
          </div>
        </div>

        <div class="col-md-2">
          <?php
            if (isset($_SESSION["loggedin"])) {
                echo "<p class=text-primary> Welcome, ".$_SESSION["username"].".</p> (<a href=logout.php>Log out </a>)";
            } else {
              Echo "<a href=login.php>Log in</a> or <a href=register.php>Register</a> ";
            }
          ?>
        </div>
        
    </div>


		<br/>
            <div id="middle">

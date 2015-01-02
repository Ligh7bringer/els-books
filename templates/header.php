<!DOCTYPE html>

<html>

    <head>

        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>

        <link rel="shortcut icon" type="image/png" href="../public/img/favicon.png" />

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

    <body style="background-image:url(../public/img/background.png); background-repeat:repeat">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
          <div class="col-md-8">
              <div class="navbar navbar-default">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" rel="home" title="Bookstore"> <img style="max-width:150px; max-height:150px;"
             src="../public/img/logo.png"> </a>
            </div>
            <div class="navbar-collapse collapse navbar-inverse-collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="sell.php">Upload</a></li>
                <li><a href="sendpm.php">Message</a></li>
                <li><a href="search.php">Search</a></li>
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
                $result = query("SELECT * FROM pms WHERE `touser` = ? AND `read` = ?", $_SESSION["username"], 0);
                echo "<p>Welcome, ".$_SESSION["username"]."! </p>(<a href=inbox.php>Inbox</a> ". count($result).") (<a href=outbox.php>Outbox</a>) (<a href=logout.php>Log out </a>) ";
            } else {
              Echo "<a href=login.php>Log in</a> or <a href=register.php>Register</a> ";
            }
          ?>
        </div>
      </div>
    </div>


		<br/>
            <div id="middle">

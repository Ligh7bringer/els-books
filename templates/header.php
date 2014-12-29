<!DOCTYPE html>

<html>

    <head>

        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet"/>
        <link href="css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>Under Construction: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Under Construction</title>
        <?php endif ?>

        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/scripts.js"></script>

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
              <a class="navbar-brand" href="#">Brand</a>
            </div>
            <div class="navbar-collapse collapse navbar-inverse-collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
              </ul>
              <form class="navbar-form navbar-right">
                <input type="text" class="form-control col-lg-8" placeholder="Search">
              </form>
             </div>
          </div>
        </div>
        <div class="col-md-2">
          <?php
            if (isset($_SESSION["loggedin"])) {
                echo "<p class=text-primary> Welcome, ".$_SESSION["username"]."</p> (<a href=logout.php>Log out </a>)";
            } else {
              Echo "<a href=login.php>Log in</a>";
            }
          ?>
        </div>
    </div>


		<br/>
            <div id="middle">

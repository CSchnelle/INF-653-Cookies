<?php
  session_status() === PHP_SESSION_ACTIVE ? '' : session_start();
	if (isset($_SESSION['firstname'])) {
    $firstname = $_SESSION['firstname'];
  }
?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zippy Used Autos</title>
    <link rel="stylesheet" type="text/css" href="view/css/main.css" />
</head>

<!-- the body section -->
<body>
    <header>
        <h1>Zippy Used Autos</h1>
    </header>
	<br>		
	 <?php   
			  if(isset($_SESSION['firstname'])){ ?>
              <h4>Welcome <?php echo $firstname ?>!<a id="header-logout" href="logout.php">(Sign Out)</a></h4>
			  <h2>Thank you for registering, <?php echo $firstname ?>!</h2>
            <?php } else { ?>
            <a href="register.php"><h4>Register</h4></a>
            <?php } ?>
      
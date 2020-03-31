<?php
	if (isset($_GET['firstname'])) {
		session_start();
		$firstname = htmlspecialchars(filter_input(INPUT_GET, 'firstname'));
		$_SESSION["firstname"] = $firstname;
	}
	include 'view/header.php'; 
?>

<link rel="stylesheet" type="text/css" href="view/main.css">

<main>
    <h1>Register</h1>
    <form method="get" action="" id="user_registration_form">
        <input type="hidden" name="action" value="register_customer">
        <label>Please enter your first name:</label><br>
        <input type="text" name="firstname" />
        <br><br>
        <input  id="button" type="submit" value="Register" class="button blue"/>
        <br>
    </form>
	<br>
        <a href="index.php?action=list_vehicles">Click here</a> to view our vehicle list.
	<br><br>	
</main>
<?php include 'view/footer.php'; ?>
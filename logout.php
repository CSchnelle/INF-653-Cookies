<?php
    session_start();
    if (isset($_SESSION['firstname'])) {
        $firstname = $_SESSION['firstname'];
        session_unset();
        session_destroy();
        $name = session_name();
        $expire = strtotime('-1 year');
        $params = session_get_cookie_params();
        $path = $params['path'];
        $domain = $params['domain'];
        $secure = $params['secure'];
        $httponly = $params['httponly'];
        setcookie($name, '', $expire, $path, $domain, $secure, $httponly);
    }
    include("./view/header.php");
?>
    <h2 class="text-center" id="logout-text">Thank you for signing out,<?php echo isset($firstname) ? " " . $firstname: ""?>!</h2>
    <br>
	<a href="index.php?action=list_vehicles">Click here</a> to view our vehicle list.
<?php include("./view/footer.php") ?>
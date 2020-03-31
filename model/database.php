<?php
    $dsn = 'mysql:host=zy4wtsaw3sjejnud.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=kzi9vdecvlvgv17f';
    $username = 'dg9aqktj30j1gcwb';
    $password = 've0htf4ekmzirmi3';
 
try {
  $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
  $error_message = $e->getMessage();
  include('database_error.php');
  exit();
}
?>

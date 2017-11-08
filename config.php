<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbdatabase = "go4shop";
$config_basedir = "https://localhost/go4shop/";
$config_sitename = "Online Shop";
$db = mysqli_connect($dbhost, $dbuser, $dbpassword) or die(mysqli_error($db));
mysqli_select_db($db, $dbdatabase) or die(mysqli_error($db));
?>
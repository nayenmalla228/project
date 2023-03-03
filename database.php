<?php

$hostName = "sql205.epizy.com";
$dbUser = "epiz_33704735";
$dbPassword = "bjRw2PzR81";
$dbName = "epiz_33704735_login";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>
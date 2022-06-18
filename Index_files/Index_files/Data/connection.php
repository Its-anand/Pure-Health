<?php
$server = "localhost";
$username = "id18749980_accountdb";
$password = "Anandchoudhary@7000162902";
$db = "id18749980_account";
$con = new mysqli($server, $username, $password, $db);
mysqli_set_charset($con, "utf8");
/*if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";*/
?>
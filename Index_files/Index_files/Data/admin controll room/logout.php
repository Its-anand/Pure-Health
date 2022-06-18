<?php
session_start();
session_unset();
session_destroy();
header("location: ../../Data/admin controll room/Admin Login.php");
?>
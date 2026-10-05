<?php
session_start();
session_unset();
session_destroy();

header("Location: /Toko%20flay/login.php");
?>
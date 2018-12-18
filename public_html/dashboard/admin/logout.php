<?php
session_start();
$_SESSION['dash_adm'] = null;

header("location: ../login.php");
?>
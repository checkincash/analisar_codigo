<?php
session_start();
$_SESSION['dash_contrato'] = null;

header("location: login.php");
?>
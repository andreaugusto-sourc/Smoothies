<?php
session_start();
unset($_SESSION['usuario']);
header("Location: http://localhost/smoothies/index.php");
?>
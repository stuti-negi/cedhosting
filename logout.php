<?php
session_start();

unset($_SESSION['userid']);
unset($_SESSION['usermail']);
unset($_SESSION['username']);
unset($_SESSION['isAdmin']);
header('Location: index.php');
?>
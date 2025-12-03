<?php
session_start();
$_SESSION['ism'] = "Islomboy";
$_SESSION['yosh'] = 19;
echo $_SESSION['ism']. "<br>";
echo $_SESSION['yosh'];
?>
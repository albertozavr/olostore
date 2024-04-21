<?php

ob_start();
require "bd.php";

unset($_SESSION['logged_user']);
header('Location:/OLO_Store/index.php');
?>
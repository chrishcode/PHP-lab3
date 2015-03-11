<?php

include 'template.php';

session_start();

$_SESSION['namn'] = "chris";




echo $_SESSION['namn'];

?>
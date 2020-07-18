<?php 

session_start();

if (!$_SESSION['user']) {
    header('location:./login.php');
}

$base = 'http://127.0.0.1/educa';
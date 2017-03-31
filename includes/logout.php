<?php
include_once 'functions.php';
sec_session_start();
 
 // Destroy session 
session_destroy();
header('Location: ../login.php');
?>
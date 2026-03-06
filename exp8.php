<?php
session_start();

// Check if 'counter' exists in session; if not, initialize it to 0
if(!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

// Increment the counter and display it
$_SESSION['counter']++;
echo "u have visited this page " . $_SESSION['counter'] . " times";

session_write_close();
?>

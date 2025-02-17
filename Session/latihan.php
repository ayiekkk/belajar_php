<?php
// Halaman welcome.php
session_start();

if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true) {
    echo 'Welcome, ' . $_SESSION['username'];
} else {
    echo 'Please log in first.';
}
?>

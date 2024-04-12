<?php
// Start a session if one is not already active
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include('../../connection.php');

$user = $_POST['user'];
$pass = $_POST['password'];

if ($user == 'admin' && $pass == '123456789') {
    // Set a session variable to indicate admin login
    $_SESSION['admin'] = true;
    // Redirect to admin.php upon successful login
    header("Location: ../../admin.php");
    exit(); // Ensure that subsequent code is not executed after redirection
} else {
    // Redirect back to index.php if login fails
    header("Location: ../../index.php");
    exit();
}
?>

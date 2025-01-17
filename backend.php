<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userid = $_POST['userid'] ?? '';
    $password = $_POST['password'] ?? '';

    // Sample hardcoded user credentials for validation
    $validUser = 'user1';
    $validPass = 'password123';

    if ($userid === $validUser && $password === $validPass) {
        echo 'success';
    } else {
        echo 'failure';
    }
}
?>

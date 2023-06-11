<?php
require_once 'header.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Oguz Fethi Demirel</title>
</head>
<body>
    <main>
        <?php
        if (isset($_SESSION['userId'])) {
            $message = 'You are logged in';
            echo "<script>alert('$message');</script>";
        } else {
            if (isset($_GET['loggedout'])) {
                $message = 'You are logged out!';
                echo "<script>alert('$message');</script>";
            }
        }
        ?>
    </main>
</body>
</html>

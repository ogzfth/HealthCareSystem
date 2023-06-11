<?php
require 'db.php';

if (isset($_POST['signup-submit'])) {
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwd-repeat'];

    // Check for empty fields
    if (empty($mail) || empty($pwd) || empty($pwdRepeat)) {
        header("Location: signup.php?error=emptyfields");
        exit();
    }
    
    // Validate email format
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: signup.php?error=invalidmail");
        exit();
    }
    
    // Check if passwords match
    if ($pwd !== $pwdRepeat) {
        header("Location: signup.php?error=passwordcheck");
        exit();
    }
    
    // Check password length
    if (strlen($pwd) < 4) {
        header("Location: signup.php?error=invalidpwd");
        exit();
    }
    
    // Check if user already exists
    $sql = "SELECT patientMail FROM patient_login WHERE patientMail=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: signup.php?error=sqlerror");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "s", $mail);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    
    if (mysqli_stmt_num_rows($stmt) > 0) {
        header("Location: signup.php?error=usertaken");
        exit();
    }
    
    // Insert new user into the database
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    $sql = "INSERT INTO patient_login (patientMail, pwdPatient) VALUES (?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: signup.php?error=sqlerror");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ss", $mail, $hashedPwd);
    mysqli_stmt_execute($stmt);
    header("Location: signup.php?signup=success");
    exit();
} else {
    header("Location: signup.php");
    exit();
}

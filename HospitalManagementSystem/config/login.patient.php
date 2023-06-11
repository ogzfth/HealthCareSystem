<?php
require_once 'db.php';
session_start();

if (isset($_POST['login-submit'])) {
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM pateint_login WHERE patientMail=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwdPatient']);
                if ($pwdCheck == false) {
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                } else if ($pwdCheck == true) {
                    $_SESSION['userId'] = $row['id']; // Set the session variable
                    mysqli_stmt_close($stmt);
                    mysqli_close($conn);
                    header("Location: ../patientPortal.php");
                    exit();
                } else {
                    header("Location: ../index.php?error=wrongpwd");
                    exit();
                }
            } else {
                header("Location: ../index.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}
?>

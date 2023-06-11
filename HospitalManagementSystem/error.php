<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == "emptyfields") {
        echo '<div class="mt-2 alert alert-warning alert-dismissible fade show" role="alert"><p class="signuperror">Fill in all fields!</p></div>';
    } elseif ($_GET['error'] == "invalidmail") {
        echo '<div class="mt-2 alert alert-warning alert-dismissible fade show" role="alert"><p class="signuperror">Invalid e-mail!</p></div>';
    } elseif ($_GET['error'] == "passwordcheck") {
        echo '<div class="mt-2 alert alert-warning alert-dismissible fade show" role="alert"><p class="signuperror">Passwords do not match!</p></div>';
    } elseif ($_GET['error'] == "invalidpwd") {
        echo '<div class="mt-2 alert alert-warning alert-dismissible fade show" role="alert"><p class="signuperror">Invalid Password!</p></div>';
        echo "<script type='text/javascript'>alert('Password must be at least 4 characters long and no symbols are allowed!');</script>";
    } elseif ($_GET['error'] == "usertaken") {
        echo '<div class="mt-2 alert alert-warning alert-dismissible fade show" role="alert"><p class="signuperror">Username is already taken!</p></div>';
    } elseif ($_GET['error'] == "sqlerror") {
        echo '<div class="mt-2 alert alert-warning alert-dismissible fade show" role="alert"><p class="signuperror">Database error!</p></div>';
    }
} elseif (isset($_GET['signup']) && $_GET['signup'] == "success") {
    echo '<div class="mt-2 alert alert-warning alert-dismissible fade show" role="alert"><p class="signupsuccess">Signed up successfully!</p></div>';
}
?>

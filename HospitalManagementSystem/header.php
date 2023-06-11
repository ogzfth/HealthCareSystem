<?php
require_once 'error.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$html = '';

if (isset($_SESSION['userId'])) {
    $html .= '
    <div class="container py-5">
        <div class="text-right mb-4">
            <a href="./index.php" class="btn btn-primary">Home</a>
        </div>
        <div class="card mx-auto" style="max-width: 500px; border-radius: 10px;">
            <div class="card-body">';
    if ($login_status == true) {
        $html .= '
                <a href="./stock.php" class="btn btn-primary mb-3">Stocks</a>';
    }
    $html .= '
                <form action="config/logout.php" method="get">
                    <div class="text-center mt-4">
                        <button type="submit" name="logout-submit" class="btn btn-danger">Logout</button>
                    </div>
                </form>
            </div>
        </div>
    </div>';
} else {
    if (isset($_GET['login']) && $_GET['login'] == "success") {
        echo "<script type='text/javascript'>alert('Login successful!');</script>";
    }
    $html .= '
    <section class="vh-100 d-flex align-items-center" style="background-color: #eee;">
        <div class="container py-5">        
            <div class="card mx-auto" style="max-width: 500px; border-radius: 10px;">
                <div class="card-body">
                    <form action="config/login.patient.php" method="post">
                        <h1 class="h3 mb-3">Hospital Management System</h1>
                        <h2 class="h4 mb-4">Login</h2>
                        <p>Please enter your login and password!</p>
                        <div class="form-group">
                            <input type="text" name="mailuid" placeholder="Email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="pwd" placeholder="Password" class="form-control" required>
                        </div>
                        <button type="submit" name="login-submit" class="btn btn-primary btn-block">Login</button>
                        <p class="mt-3">Don\'t have an account? <a href="./signup.php">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>';
}

?>

<html>
<head>
    <title>Hospital Management System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <?php echo $html; ?>
</body>
</html>

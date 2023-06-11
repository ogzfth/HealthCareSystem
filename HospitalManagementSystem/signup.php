<?php require 'error.php'; ?>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <title>Hospital Management System</title>
</head>
<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <p style="text-align:right">Are you a <a href="./header.php">Member</a></p>
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                    <form action="config/signup.patient.logic.php" method="post" class="mx-1 mx-md-4">
                                        <div class="form-group">
                                            <label for="form3Example3c">E-mail</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-envelope fa-lg"></i></span>
                                                </div>
                                                <input type="text" name="mail" id="form3Example3c" class="form-control" required>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label for="form3Example4c">Password</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-lock fa-lg"></i></span>
                                                </div>
                                                <input type="password" name="pwd" id="form3Example4c" class="form-control" required>
                                            </div>
                                        </div>    
                                        <div class="form-group">
                                            <label for="form3Example4c">Repeat Password</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-lock fa-lg"></i></span>
                                                </div>
                                                <input type="password" name="pwd-repeat" id="form3Example4c" class="form-control" required>
                                            </div>
                                        </div>  
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" name="signup-submit" class="btn btn-primary btn-lg">Signup</button>   
                                        </div>   
                                    </form>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="./assets/undraw_Notify_re_65on.svg" class="img-fluid" alt="Sample image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

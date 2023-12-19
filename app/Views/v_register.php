<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('template')?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('template')?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-9">
                    <?php
                                    // Session initialization should be done in the controller or a configuration file.
                                    $session = \Config\Services::session();

                                    if ($session->getFlashdata('warning')) {
                                        ?>
                                        <div class="alert alert-warning">
                                            <ul>
                                                <?php
                                                foreach ($session->getFlashdata('warning') as $val) {
                                                    ?>
                                                    <li><?php echo $val ?></li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                        <?php
                                    }
                                    if ($session->getFlashdata('success')){
                                        ?>
                                        <div class="alert alert-success"><?php echo
                                        $session->getFlashdata('success')?></div>
                                        <?php
                                    }
                                    ?>
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                 <a type="button" class="btn " href="<?php echo base_url("/puskesmas")?>"><i class="bi bi-box-arrow-in-left" style="color: black;"></i></a>
                                <div class="p-5">
                                    
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="POST" action="<?php echo site_url ("puskesmas/login")?>">                                        <div class="form-group">
                                        <div class="form-group">
                                            <input class="form-control form-control-user"
                                            id="inputUsername" type="text" 
                                                placeholder="Username..." value="<?php if($session->getFlashdata('username')) 
                                            echo $session->getFlashdata('username')?>" name="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                            name="password" id="inputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="inputRememberPassword" name="remember_me" 
                                                 value="1">
                                                <label class="custom-control-label" for="inputRememberPassword">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-primary btn-user btn-block" value="LOGIN">
                                           
                                        </input>
                                        <hr>
                                       
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                            <a class="small" href="<?php echo site_url ("/lupapassword")?>">Forgot Password?</a>
                                        </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
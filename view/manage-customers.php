<?php

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pricing - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Dynamic-Table.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Lista-Productos-Canito.css">
    <link rel="stylesheet" href="assets/css/MUSA_no-more-tables-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_no-more-tables.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2"><a class="navbar-brand" href="homepage.php">UrXfectTrip</a>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation">
                        <div class="container-fluid">
                            <nav class="navbar navbar-light navbar-expand-md sticky-top bg-white">
                                <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                                    <div class="collapse navbar-collapse" id="navcol-1">
                                        <ul class="nav navbar-nav">
                                            <li class="nav-item" role="presentation"><a class="nav-link active" href="homepage.php" style="color: rgba(0,0,0,0.9);">Home</a></li>
                                            <li class="nav-item" role="presentation"><a class="nav-link" style="color: rgba(0,0,0,0.7);" href="our-packages.php">our packages</a></li>
                                            <li class="nav-item" role="presentation"><a class="nav-link" href="packages-available.php" style="color: rgba(0,0,0,0.7);">packages available</a></li>
                                            <li class="nav-item" role="presentation"><a class="nav-link" href="booked-packages.php" style="color: rgba(0,0,0,0.7);">booked trips</a></li>
                                            <li class="nav-item" role="presentation"></li>
                                            <li class="nav-item" role="presentation"><a class="nav-link" href="login.php" style="color: rgba(0,0,0,0.9);">Login</a></li>
                                            <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php" style="background-color: #1793e0;color: rgba(0,0,0,0.9);">register</a></li>
                                            <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">Profile&nbsp;</a>
                                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="manage-profile.php">Edit Profile</a><a class="dropdown-item" role="presentation" href="#">Log out</a></div>
                                            </li>
                                            <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" style="color: rgba(0,0,0,0.7);">Administration&nbsp;</a>
                                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="customers.php">Customers</a><a class="dropdown-item" role="presentation" href="packages-available.php">Packages</a><a class="dropdown-item" role="presentation">Edit Profile</a>
                                                    <a
                                                        class="dropdown-item" role="presentation" href="#">Log out</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <div class="modal fade" role="dialog" tabindex="-1" id="signup">
                                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Sign In</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                        <div class="modal-body">
                                            <form class="form-inline">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" type="email" required="" placeholder="Email">
                                                        <div class="input-group-append"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="fa fa-lock"></i></span></div><input class="form-control" type="password" required="" placeholder="Password">
                                                        <div class="input-group-append"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group"><button class="btn btn-primary btn-lg text-white" style="width: 100%;" type="button">Log in</button></div>
                                            </form>
                                            <hr style="background-color: #bababa;">
                                            <p class="text-center">Or&nbsp;<a class="text-decoration-none" href="#">Forget password</a></p>
                                            <p class="text-center">Don't have an account? &nbsp;<a class="text-decoration-none" data-dismiss="modal" data-toggle="modal" data-target="#signin" href="#">Sign Up</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" role="dialog" tabindex="-1" id="signin">
                                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Sign Up Now</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                        <div class="modal-body">
                                            <div class="text-center"><button class="btn btn-primary text-left" style="width: 100%;" type="button"><i class="fa fa-facebook"></i>&nbsp; Continue with Facebook</button></div>
                                            <div class="text-center mt-2"><button class="btn btn-light text-left border-dark" style="width: 100%;" type="button"><i class="fa fa-google"></i>&nbsp; Continue with Google</button></div>
                                            <form class="form-inline mt-4">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="fa fa-user-o"></i></span></div><input class="form-control" type="text" required="" placeholder="Full Name">
                                                        <div class="input-group-append"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" type="email" required="" placeholder="Email">
                                                        <div class="input-group-append"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="fa fa-lock"></i></span></div><input class="form-control" type="password" required="" placeholder="Password">
                                                        <div class="input-group-append"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" required="" checked=""><label class="form-check-label" for="formCheck-1">I agree all the terms and conditions.</label></div>
                                                </div>
                                                <div class="form-group"><button class="btn btn-primary btn-lg text-white" style="width: 100%;" type="button">Sign Up</button></div>
                                            </form>
                                            <hr style="background-color: #bababa;">
                                            <p class="text-center">Already have an Account?&nbsp;<a class="text-decoration-none" data-dismiss="modal" data-toggle="modal" data-target="#signup" href="#">Log In</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page pricing-table-page">
        <section class="clean-block clean-pricing dark">
            <div class="container">
                <div class="block-heading"></div>
            </div>
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Edit or Create a Customer</h2>
                    <form>
                        <div class="form-group">
                            <div class="input-group" style="margin: 0px 0px 15px;">
                                <div class="input-group-prepend"><span class="input-group-text">Name</span></div><input class="form-control" type="text" id="name"></div>
                            <div class="input-group" style="margin: 0px 0px 15px;">
                                <div class="input-group-prepend"><span class="input-group-text">Surname</span></div><input class="form-control" type="text" id="surname"></div>
                            <div class="input-group" style="margin: 0px 0px 15px;">
                                <div class="input-group-prepend"><span class="input-group-text">Email</span></div><input class="form-control" type="text" id="email"></div>
                        </div>
                    </form>
                    <div class="btn-group float-left" role="group"><button class="btn btn-primary" type="button"><i class="fa fa-save"></i></button></div>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="login.php">Log in</a></li>
                        <li><a href="registration.php">Register</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>UrXfectTrip</h5>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="contact-us.php">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Company Section</h5>
                    <ul>
                        <li><a href="login.php">Admin Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2019 No Copyright</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/Dynamic-Table.js"></script>
</body>

</html>
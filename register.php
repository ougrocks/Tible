<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!doctype html>
<html class="no-js">
<head>
        <!-- Meta, title, CSS, favicons, etc. -->
                <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>TiBle &middot; Sign Up </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <!--<link rel="shortcut icon" href="/favicon.ico">-->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="dist/css/veneto-admin.min.css">
        <link rel="stylesheet" href="demo/css/demo.css">
        <link rel="stylesheet" href="dist/assets/font-awesome/css/font-awesome.css">
		<script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <!--[if lt IE 9]>
        <script src="dist/assets/libs/html5shiv/html5shiv.min.js"></script>
        <script src="dist/assets/libs/respond/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="body-sign-up">
    <div class="container">
        <div class="panel panel-default form-container">
            <div class="panel-body">
                <form role="form" <?php echo esc_url($_SERVER['PHP_SELF']); ?> method="post" name="registration_form">
                    <h3 class="text-center margin-xl-bottom">Sign up <span class="semi-bold">now</span></h3>
					<div class="form-group text-center">
                        <label class="sr-only" for="email">Username</label>
                        <input type="text" class="form-control input-lg" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="form-group text-center">
                        <label class="sr-only" for="email">Email Address</label>
                        <input type="email" class="form-control input-lg" id="email" name="email" placeholder="Email Address">
                    </div>
                    <div class="form-group text-center">
                        <label class="sr-only" for="password">Password</label>
                        <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password">
                    </div>
					<div class="form-group text-center">
                        <label class="sr-only" for="password">Confirm Password</label>
                        <input type="password" class="form-control input-lg" id="confirmpwd" name="confirmpwd" placeholder="Confirm Password">
                    </div>
					
                     <input type="button" value="Sign Up" onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" class="btn btn-primary btn-block btn-lg" />
					<h5 class="text-center margin-xl-bottom"></h5>
					<h5 class="text-center margin-xl-bottom"></h5>
					<?php
        if (!empty($error_msg)) {
            echo "<h4 class=\"text-center margin-xl-bottom\">$error_msg</h4>";
        }
        ?>
                </form>
            </div>
            <div class="panel-body text-center">
                <div>
                    Passwords must be at least 6 characters long.<br>Passwords must contain -<br> At least one uppercase letter (A..Z), <br>At least one lower case letter (a..z) and <br>At least one number (0..9)<br>
					</div>
					<div class="margin-bottom text-muted">
					By signing up, you agree to the <a class="text-muted text-underline" href="javascript:;">Terms of Service</a>
                </div>
                <div>
                    Already have an account? <a class="text-primary-dark" href="index.php">Sign in here</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

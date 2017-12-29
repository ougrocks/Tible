<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!doctype html>
<html class="no-js">
<head>
        <!-- Meta, title, CSS, favicons, etc. -->
                <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>TiBle &middot; Sign In </title>
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
    <body class="body-sign-in">
	
    <div class="container">
        <div class="panel panel-default form-container">
            <div class="panel-body">
                <form role="form" action="includes/process_login.php" method="post" name="login_form">
                   <center> <img class="img-circle" width="64" height="64" src="demo/images/logo.png"></center>
					<h3 class="text-center margin-xl-bottom">TiBle - Time Table Automation</h3>
					
                    <div class="form-group text-center">
                        <label class="sr-only" for="email">Email Address</label>
                        <input type="email" name="email" class="form-control input-lg" id="email" placeholder="Email Address">
                    </div>
                    <div class="form-group text-center">
                        <label class="sr-only" for="password">Password</label>
                        <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password">
                    </div>

                    <input type="button"  class="btn btn-primary btn-block btn-lg" value="Login" onclick="formhash(this.form, this.form.password);" />
					 
					<?php
        if (isset($_GET['error'])) {
            echo '<h3 class="text-center margin-xl-bottom"><p class="error">Error Logging In!</p></h3>';
        }
		
        ?> 
                </form>
            </div>
            <div class="panel-body text-center">
                <div class="margin-bottom">
                    <a class="text-muted text-underline" href="javascript:;">Forgot Password?</a>
                </div>
				<div>
				<?php
        if (login_check($mysqli) == true) {
                        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
 
            echo 'Dont have an account? <a class="text-primary-dark" href="register.php">Sign up here</a>.';
        } else {
                        echo '<p>Currently logged ' . $logged . '.</p>';
                        echo "<p>If you don't have a login, please <a href='register.php'>register</a></p>";
                }
?>     
                </div>
            </div>
        </div>
    </div>
</body>
</html>

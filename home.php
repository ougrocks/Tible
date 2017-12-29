<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();

				
if(login_check($mysqli) == true) {
	?>
	
<!doctype html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>TiBle &middot; Profile </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <!--<link rel="shortcut icon" href="/favicon.ico">-->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="dist/css/veneto-admin.min.css">
        <link rel="stylesheet" href="demo/css/demo.css">
        <link rel="stylesheet" href="dist/assets/font-awesome/css/font-awesome.css">

        <!--[if lt IE 9]>
        <script src="dist/assets/libs/html5shiv/html5shiv.min.js"></script>
        <script src="dist/assets/libs/respond/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="">
        <header>
            <nav class="navbar navbar-default navbar-static-top no-margin" role="navigation">
                <div class="navbar-brand-group">
                    <a class="navbar-sidebar-toggle navbar-link" data-sidebar-toggle>
                        <i class="fa fa-lg fa-fw fa-bars"></i>
                    </a>
                    <a class="navbar-brand hidden-xxs" href="home.php">
                        <span class="sc-visible">
                            T
                        </span>
                        <span class="sc-hidden">
                            <span class="bold">TiBle</span>
                            ADMIN
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-nav-expanded pull-right margin-md-right">
                    
                    
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle navbar-user" href="javascript:;">
                            <img class="img-circle" width="128" height="128" src="demo/images/profile.jpg">
                            <span class="hidden-xs"><?php echo $_SESSION['username']; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu pull-right-xs">
                            <li class="arrow"></li>
                            <li><a href="home.php">Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="includes/logout.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
                
            </nav>
        </header>
        <div class="page-wrapper">
            <aside class="sidebar sidebar-default">
                <div class="sidebar-profile">
                    <img class="img-circle profile-image" src="demo/images/profile.jpg">

                    <div class="profile-body">
                        <h4><?php echo $_SESSION['username']; ?></h4>

                        <div class="sidebar-user-links">
                            <a class="btn btn-link btn-xs" href="home.php" data-placement="bottom" data-toggle="tooltip" data-original-title="Profile"><i class="fa fa-user"></i></a>
                            
                            <a class="btn btn-link btn-xs" href="includes/logout.php" data-placement="bottom" data-toggle="tooltip" data-original-title="Logout"><i class="fa fa-sign-out"></i></a>
                        </div>
                    </div>
                </div>
                <nav>
				
                    <h5 class="sidebar-header"></h5>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="nav-dropdown">
                            <a href="#" title="Dashboards">
                                <i class="fa fa-lg fa-fw fa-home"></i> Dashboards
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="home.php" title="Dashboard">
                                        <i class="fa fa-fw fa-caret-right"></i> Home
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-dropdown active open">
                            <a href="#" title="Users">
                                <i class="fa fa-lg fa-fw fa-user"></i> Generate
                            </a>
                            <ul class="nav-sub">
                                
                                <li class="active">
                                    <a href="timetable.php" title="Profile">
                                        <i class="fa fa-fw fa-caret-right"></i> Time Table
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        
                        
                        
                        
                      
                    </ul>
                    
                   
                    <h5 class="sidebar-header">TiBle Developers</h5>
                    <ul class="sidebar-summary">
                        <li>
                            <div class="mini-chart mini-chart-block">
                                <div class="chart-details">
                                    <div class="chart-name">BTech CSE - 1103010180</div>
                                    <div class="chart-value">Vishu Kadiyan</div>
                                </div>
                                
                            </div>
                        </li>
                        <li>
                            <div class="mini-chart mini-chart-block">
                                <div class="chart-details">
                                    <div class="chart-name">BTech CSE - 1103010143</div>
                                    <div class="chart-value">Siddharth Kapoor</div>
                                </div>
                                
                            </div>
                        </li>
                        <li>
                            <div class="mini-chart mini-chart-block">
                                <div class="chart-details">
                                    <div class="chart-name">BTech CSE - 1103010XXX</div>
                                    <div class="chart-value">Priyanka Jain</div>
                                </div>
                                
                            </div>
                        </li>
						<li>
                            <div class="mini-chart mini-chart-block">
                                <div class="chart-details">
                                    <div class="chart-name">BTech CSE - 1103010136</div>
                                    <div class="chart-value">Shubham Gupta</div>
                                </div>
                                
                            </div>
                        </li>
                    </ul>
                </nav>
            </aside>

            <div class="page-content">
                <div class="page-subheading page-subheading-md">
    <ol class="breadcrumb">
        <li><a href="javascript:;"><?php echo getTime(); ?></a></li>
        
    </ol>
</div>
<div class="page-heading page-heading-md">
    <h2>Admin</h2>
</div>

<div class="container-fluid-md">
    <div class="row">
        <div class="col-md-7 col-lg-8">
            <div class="panel panel-default panel-profile-details">
                <div class="panel-body">
                    <div class="col-sm-5 text-center">
                        <img alt="image" width="128" height="128" class="img-circle img-profile" src="demo/images/avatars/5.jpg">
                    </div>
                    <div class="col-sm-7 profile-details">
                        <h3><?php echo strtoupper($_SESSION['username']); ?></h3>
                       
                        
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-sm-5">
                        <dl>
                            <dt>Email</dt>
                            <dd><?php echo $_SESSION['email']; ?></dd>
                        </dl>
                        
                    </div>
                    
                </div>
                
            </div>

            
            
        </div>

        <div class="col-md-5 col-lg-4">
            
            
           
            <div class="row">
                <div class="col-sm-6 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4 class="page-header no-margin semi-bold">TiBle - Time Table Automation</h4>
                            <h2 class="semi-bold text-primary-dark no-margin-bottom"><a href="timetable.php">Generate Timetable 1</a> </h2>
							<h2 class="semi-bold text-primary-dark no-margin-bottom"><a href="timetable2.php">Generate Timetable 2</a> </h2>
                        </div>
                    </div>
                </div>
            </div>
			
			
            
        </div>
    </div>
</div>

            </div>
        </div>
        <script src="dist/assets/libs/jquery/jquery.min.js"></script>
        <script src="dist/assets/bs3/js/bootstrap.min.js"></script>
        <script src="dist/assets/plugins/jquery-navgoco/jquery.navgoco.js"></script>
        <script src="dist/js/main.js"></script>

        <!--[if lt IE 9]>
        <script src="dist/assets/plugins/flot/excanvas.min.js"></script>
        <![endif]-->
        <script src="dist/assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>
        <script src="demo/js/demo.js"></script>

        <script src="dist/assets/plugins/flot/jquery.flot.js"></script>
        <script src="dist/assets/plugins/flot/jquery.flot.resize.js"></script>
        <script src="demo/js/pages-profile.js"></script>



    </body>
</html>
<?php
} else { 
?>
<!doctype html>
<html class="no-js">
<head>
        <!-- Meta, title, CSS, favicons, etc. -->
                <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>TiBle &middot; 500 </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <!--<link rel="shortcut icon" href="/favicon.ico">-->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="dist/css/veneto-admin.min.css">
        <link rel="stylesheet" href="demo/css/demo.css">
        <link rel="stylesheet" href="dist/assets/font-awesome/css/font-awesome.css">

        <!--[if lt IE 9]>
        <script src="dist/assets/libs/html5shiv/html5shiv.min.js"></script>
        <script src="dist/assets/libs/respond/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="body-error">
    <div class="container">
        <div class="error-container">
            <h1>500</h1>
            <h3 class="margin-lg-vertical">Authentication Failed.</h3>
            <h5 class="margin-lg-vertical">You need to login for this Page <a href="index.php"> Login</a>.</h5>
           
        </div>
    </div>
</body>

</html>
<?php
}?>
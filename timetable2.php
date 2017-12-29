<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
?>
<!doctype html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>TiBle &middot; TimeTable </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <!--<link rel="shortcut icon" href="/favicon.ico">-->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="dist/css/veneto-admin.min.css">
        <link rel="stylesheet" href="demo/css/demo.css">
        <link rel="stylesheet" href="dist/assets/font-awesome/css/font-awesome.css">

        <link rel="stylesheet" href="dist/css/plugins/jquery-select2.min.css">
        <link rel="stylesheet" href="dist/css/plugins/jquery-dataTables.min.css">
		<script type="text/JavaScript" src="js/print.js"></script>
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
                            <img class="img-circle" src="demo/images/profile.jpg">
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
                            <a href="#" title="Tables">
                                <i class="fa fa-lg fa-fw fa-th-list"></i> Generate
                            </a>
                            <ul class="nav-sub">
                                
                                <li class="active">
                                    <a href="timetable.php" title="Data Tables">
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
    <h2>TiBle - Time Table Automation</h2>
</div>

<div class="container-fluid-md">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
			<form action="" method="post">
		<label>Semester: </label>
		<select name = "sem">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		</select> &nbsp;&nbsp;&nbsp;
		<label>Section: </label>
		<select name = "section">
		<option value="CS A">CS A</option>
		<option value="CS B">CS B</option>
		<option value="CS C">CS C</option>
		<option value="CS D">CS D</option>
		</select>&nbsp;&nbsp;&nbsp;
        <input class="btn btn-primary" type="submit" name="submit" value="Generate" />
		<input class="btn btn-primary" type="button" onclick="location.href='unallot.php'" value="Un - Allocate" />
        <input class="btn btn-primary" type="button" onclick="location.href='timetable.php'" value="New Timetable" />
		<input class="btn btn-primary" type="button" onclick="window.print()" value="Print" />
		</form><br>
			
			
			
			<?php if(isset($_POST["section"])) {$sec = $_POST["section"]; $ssem = $_POST["sem"]; echo "Timetable for Semester - <b>$ssem</b> for Section - <b>$sec</b>"; } ?></h4>

            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
                <a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
                <a href="#" data-rel="close"><i class="fa fa-fw fa-times"></i></a>
            </div>
        </div>
		
		<div id="printtableArea>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <!--<th width="20%">PROJECT&nbsp;NAME</th>
                        <th width="50%">COMPANY</th>
                        <th width="10%">BUDGET</th>
                        <th width="20%">PROBABILITY</th>-->
						<th>Day/Time</th>
        <th>9.30-10.20</th>
        <th>10.20-11.10</th>
        <th>11.10-12.00</th>
        <th>12.00-12.50</th>
        <th>1.30-2.20</th>
		<th>2.20-3.10</th>
		<th>3.10-4.00</th>
		<th>4.00-4.50</th>
                    </tr>
                </thead>
                <tbody>
				<?php 
				$time2d = array(array());
		$subject = array();
        // put your code here
        require_once './dbinfo.php';
        if(isset($_POST['submit'])) {
        if(callConnect()) {
            $sem = trim($_POST['sem']);
            subject($sem);
        }
        }
        function subject($semester) {
            $i = 0;
            $j; $k=0;
            $query = "SELECT * FROM subject WHERE sid = $semester";
            $execute = mysql_query($query) or die("Error in $query ->".  mysql_error());
            while($row = mysql_fetch_assoc($execute,MYSQL_ASSOC)) {
                $subject[$i] = $row['sname'];
                faculty($row['subid']);
                $i++;
            }
            echo "<br>";
			$periods123 = [0,1,2,3,4,5,6,7];
            $periods = [0, 1, 2, 3];
            for($i = 0; $i < 5; $i++) {
                shuffle($periods);
				shuffle($periods123);
                /*echo " <tr>";
                if ($i == 0) {
            echo "<th>Monday</th>";
        }
        if ($i == 1) {
            echo "<th>Tuesday</th>";
        }
        if ($i == 2) {
            echo "<th>Wednesday</th>";
        }
        if($i == 3) {
echo "<th>Thursday</th>";
        }
        if ($i == 4) {
            echo "<th>Friday</th>";
        }
		*/
		if($semester >= 7) {
        for($j = 0; $j < 4; $j++) {
                    
                    //echo "<td>".$subject[$periods[$j]]."</td>";
					$time2d[$i][$j] = $subject[$periods[$j]];
                }
		} else {
			for($j = 0; $j < 8; $j++) {
                    //echo "<td>".$subject[$periods123[$j]]."</td>";
					if(empty($subject[$periods123[$j]])) {
					//$subject[$periods123[$j]]=0;
					$qu = "SELECT sname FROM subject WHERE sid = $semester";
					$exe = mysql_query($qu);
					$ll = 0;
					while($row = mysql_fetch_assoc($exe)) {
					$tempSub[$ll] = $row["sname"];
					
					}
					$gg = array_rand($tempSub);
					$time2d[$i][$j] = $tempSub[$gg];
					}
					else 
					$time2d[$i][$j] = $subject[$periods123[$j]];
                }
		}
                echo "</tr>";
            }
            //print_r($faculty);
            //faculty_alloted();
			//print_r($time2d);
			$labQuery = "SELECT * FROM sublab WHERE sem = $semester";
			$labResult = mysql_query($labQuery);
			$cc = 0;
			while($labRow = mysql_fetch_assoc($labResult)) {
				$labArray[$cc] = $labRow["labname"];
				$cc++;
			}
			$labCount = mysql_num_rows($labResult);
			$timeRan = array(2,4,6);
			for($c=0;$c<$labCount;$c++) {
				$dd = array_rand($timeRan);
				$vv = $timeRan[$dd];
				$dayRan = mt_rand(0,4);
				$time2d[$dayRan][$vv] = $labArray[$c];
				$time2d[$dayRan][$vv+1] = $labArray[$c];
			}
			//print_r($time2d);
			for($mm = 0;$mm < 5; $mm++) {
			echo " <tr>";
                if ($mm == 0) {
            echo "<th>Monday</th>";
        }
        if ($mm == 1) {
            echo "<th>Tuesday</th>";
        }
        if ($mm == 2) {
            echo "<th>Wednesday</th>";
        }
        if($mm == 3) {
echo "<th>Thursday</th>";
        }
        if ($mm == 4) {
            echo "<th>Friday</th>";
        }
		if($semester >= 7) {
        for($nn = 0; $nn < 4; $nn++) {
                    
                    echo "<td>".$time2d[$mm][$nn]."</td>";
					
                }
		} else {
			for($nn = 0; $nn < 8; $nn++) {
                    echo "<td>".$time2d[$mm][$nn]."</td>";
					
                }
		}
                echo "</tr>";
			}
        }
        function faculty($subid) {
            $i = 0;
            $query = "SELECT * FROM faculty WHERE subid = $subid and alloted = 0";
            $execute = mysql_query($query);
            $num_rows = mysql_num_rows($execute);
            //echo $num_rows;
            $faculty = array();
            while($row = mysql_fetch_assoc($execute,MYSQL_ASSOC)) {
                //if($row['alloted'] == 0) {
                $faculty[$subid][$i] = $row['id'];
                $i++;
                //$count++;
                //}
                
            }
            //UPDATE `tible`.`faculty` SET `alloted` = '1' WHERE `faculty`.`id` = 1;
            $faculty_select_index = mt_rand(0, $num_rows-1);
            $temp = $faculty[$subid][$faculty_select_index];
            $section = $_POST['section'];
            $insert_query = "INSERT INTO fixslot VALUES(NULL,'$section',$temp ,$subid)";
            $result = mysql_query($insert_query) or die("All Faculties are alloted ");
            $update_query = "UPDATE faculty SET alloted = 1 WHERE id = $temp";
            $execute_update = mysql_query($update_query) or die("Error -> ". mysql_error());
            
        }
        function faculty_alloted() {
            $section = $_POST['section'];
            $query = "SELECT * FROM faculty a, fixslot b, subject c WHERE b.section = '$section' and b.fid = a.id and b.subid = c.subid";
            $result = mysql_query($query) or die("Error -> " . mysql_error());
            while($row = mysql_fetch_assoc($result,MYSQL_ASSOC)) {
                $name = $row['name']; 
                $subject_id = $row['subid'];
                $subject_name = $row['sname'];
                echo "<tr>";
                echo "<td>$name</td>";
				echo "<td>$subject_id</td>";
				echo "<td>$subject_name</td>";
				echo "</tr>";
               // echo "Name : " . $name . "  Subject id : " . $subject_id . " Subject Name: " . $subject_name ."<br>";
            }
        }
		
        ?>
                    
                </tbody>
            </table>
        
		</div>
		</div>
    </div>

  <?php if(isset($_POST['submit'])) { ?>
  <div class="container-fluid-md">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">Faculty Alloted </h4>

            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
                <a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
                <a href="#" data-rel="close"><i class="fa fa-fw fa-times"></i></a>
            </div>
        </div>
		
		<div id="printtableArea>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <!--<th width="20%">PROJECT&nbsp;NAME</th>
                        <th width="50%">COMPANY</th>
                        <th width="10%">BUDGET</th>
                        <th width="20%">PROBABILITY</th>-->
						<th>Name</th>
        <th>Subject Id</th>
        <th>Subject Name</th>
                    </tr>
                </thead>
                <tbody>
				<?php 
		
       
      if(isset($_POST['submit'])) { faculty_alloted(); 
			
			
			}
		
        ?>
                    
                </tbody>
            </table>
        
		</div>
		</div>
    </div>
  
  
  <?php }?>
  
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

        <script src="dist/assets/plugins/jquery-datatables/js/jquery.dataTables.js"></script>
        <script src="dist/assets/plugins/jquery-datatables/js/dataTables.tableTools.js"></script>
        <script src="dist/assets/plugins/jquery-datatables/js/dataTables.bootstrap.js"></script>
        <script src="dist/assets/plugins/jquery-select2/select2.min.js"></script>
        <script src="demo/js/tables-data-tables.js"></script>



    </body>
</html>

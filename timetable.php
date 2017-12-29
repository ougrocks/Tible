<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
function unique_random($min,$max,$quantity) {
    $numbers = range($min,$max);
    shuffle($numbers);
    return array_slice($numbers,0,$quantity);
}
sec_session_start();
global $year, $semester, $section, $subject_rows, $subject_list;
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
                                    <div class="chart-name">BTech CSE - 1103010107</div>
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
                                    <label>Session Year: </label>
                                    <select name = "year">
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                    </select> &nbsp;&nbsp;
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
                                    </select> &nbsp;&nbsp;
                                    <label>Section: </label>
                                    <select name = "section">
                                        <option value="CS A">CS A</option>
                                        <option value="CS B">CS B</option>
                                        <option value="CS C">CS C</option>
                                        <option value="CS D">CS D</option>
                                    </select>&nbsp;&nbsp;
                                    <label>Add Number of Subjects: </label>
                                    <select name = "no_of_subject">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>&nbsp;&nbsp;
                                    <label>Add Number of Labs: </label>
                                    <select name = "no_of_labs">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>&nbsp;&nbsp;
                                    <input class="btn btn-primary" type="submit" name="subjects_labs" value="Add Subs/Labs" />

                                </form><br>
                                <form action="" method="post">
                                <?php
                                if(isset($_POST["subjects_labs"])) {
                                    $number_of_subjects = $_POST["no_of_subject"];
                                    $number_of_labs = $_POST["no_of_labs"];
                                    $year = $_POST["year"];
                                    $semester = $_POST["sem"];
                                    $section = $_POST["section"];
                                    ?>
                                <label>Subject / Faculty Name: </label><br/>
                                    <input type="hidden" name="year" value="<?=$year;?>">
                                    <input type="hidden" name="semester" value="<?=$semester;?>">
                                    <input type="hidden" name="section" value="<?=$section;?>">
                                <?php
                                    for($i=0;$i<$number_of_subjects;$i++) {
                                        ?>
                                        <input type="text" name="subject<?=$i;?>" placeholder="Subject Name">
                                        <input type="text" name="faculty<?=$i;?>" placeholder="Faculty Name"><br/>
                                        <input type="hidden" name="countSub" value="<?=$i;?>" >
                                    <?php
                                    }

                                    echo '<br/>';
                                    echo '<label>Labs / Faculty Name: </label><br/>';
                                    for($i=0;$i<$number_of_labs;$i++) {
                                        ?>
                                        <input type="text" name="labs<?=$i;?>" placeholder="Lab Name">
                                        <input type="text" name="facultys<?=$i;?>" placeholder="Faculty Name"><br/>
                                        <input type="hidden" name="countLab" value="<?=$i;?>" >
                                <?php
                                    }
                                    echo '<br/><input type="submit" class="btn btn-primary" name="add_subjects">';

                                }
                                ?>


                                <?php
                                require_once './dbinfo.php';
                                callConnect();

                                if(isset($_POST["add_subjects"])) {

                                    $countSub = $_POST["countSub"];
                                    $countLab = $_POST["countLab"];
                                    $year = $_POST["year"];
                                    $_SESSION["year"] = $year;
                                    $semester = $_POST["semester"];
                                    $_SESSION["semester"] = $semester;
                                    $section = $_POST["section"];
                                    $_SESSION["section"] = $section;

                                    $query_truncate = "TRUNCATE TABLE temp_labs";
                                    $result_truncate = mysql_query($query_truncate) or die(mysql_error());
                                    $query_truncate = "TRUNCATE TABLE temp_subjects";
                                    $result_truncate = mysql_query($query_truncate) or die(mysql_error());
                                    for ($i = 0; $i <= $countSub; $i++) {
                                        $tem = "subject" . $i;
                                        $subject_add = $_POST[$tem];
                                        $tem1 = "faculty" . $i;
                                        $faculty_add = $_POST[$tem1];
                                        $query_insert = "INSERT INTO temp_subjects VALUES(NULL,$year,$semester,'$section','$subject_add','$faculty_add')";
                                        $result_insert = mysql_query($query_insert) or die(mysql_error());

                                    }
                                    if ($result_insert)
                                        echo "<p>Subjects and Faculty Name Added.</p>";
                                    for ($i = 0; $i <= $countLab; $i++) {
                                        $tem = "labs" . $i;
                                        $subject_add = $_POST[$tem];
                                        $tem1 = "facultys" . $i;
                                        $faculty_add = $_POST[$tem1];
                                        $query_insert = "INSERT INTO temp_labs VALUES(NULL,$year,$semester,'$section','$subject_add','$faculty_add')";
                                        $result_insert = mysql_query($query_insert) or die(mysql_error());
                                        if ($result_insert) {
                                            echo "<p>Labs and Faculty Name Added.</p><br/>";

                                        }

                                    }
                                    echo '<input type="hidden" name="year" value="' . $year . '">';
                                    echo '<input type="hidden" name="semester" value="' . $semester . '">';
                                    echo '<input type="hidden" name="section" value="' . $section . '">';
                                    echo '<input type="hidden" name="subject_rows" value="' . $subject_rows . '">';
                                    echo '<input type="submit" class="btn btn-primary" name="generate_new" value="Generate">';
                                }
                                    echo '</form></div>';
                                    if(isset($_POST["generate_new"])) {
                                        $year = $_POST["year"];
                                        $semester = $_POST["semester"];
                                        $section = $_POST["section"];
                                        $subject_rows = $_POST["subject_rows"];
                                        $subject_faculty_query = "SELECT * FROM temp_subjects WHERE year = $year AND semester = $semester AND section = '$section'";
                                        $lab_faculty_query = "SELECT * FROM temp_labs WHERE year = $year AND semester = $semester AND section = '$section'";
                                        $subject_faculty_result = mysql_query($subject_faculty_query) or die(mysql_error());
                                        $lab_faculty_result = mysql_query($lab_faculty_query) or die(mysql_error());
                                        $subject_rows = mysql_num_rows($subject_faculty_result);
                                        $lab_rows = mysql_num_rows($lab_faculty_result);
                                        $subject_list = array();
                                        $lab_list = array();
                                        $faculty_list = array();
                                        $z = 0;
                                        while($row_subjects_faculty = mysql_fetch_assoc($subject_faculty_result)) {
                                            $subject_list[$z] = $row_subjects_faculty["subject"];
                                            $faculty_list[$z] = $row_subjects_faculty["faculty"];
                                            $z++;
                                        }
                                $m = 0;
                                while($row_labs_faculty = mysql_fetch_assoc($lab_faculty_result)) {
                                    $lab_list[$m] = $row_labs_faculty["lab"];
                                    //$faculty_list[$z] = $row_subjects_faculty["faculty"];
                                    $m++;
                                }

                                ?>



                        <div id="printtableArea">
        <div class="table-responsive">
            <?php

                $table_row_wise = array();
                //$semester = $_SESSION["semester"];
                //$year = $_SESSION["year"];
                //$section = $_SESSION["section"];

                if ($semester > 6) {
                    for ($days = 0; $days < 5; $days++) {
                        //shuffle($subject_list);

                        for ($lectures = 0; $lectures < 4; $lectures++) {
                            $random_subject_index = mt_rand(0, ($subject_rows - 1));
                            //echo $random_subject_index;
                            $table_row_wise[$lectures] = $subject_list[$random_subject_index];
                        }

                        //print_r($table_row_wise);
                        if ($days == 0) {

                            $table_day_wise_insert_query = "INSERT INTO mondey VALUES(NULL,'$year',$semester,'$section','$table_row_wise[0]','$table_row_wise[1]','$table_row_wise[2]','$table_row_wise[3]','','','','')";
                            $table_day_wise_insert_result = mysql_query($table_day_wise_insert_query) or die(mysql_error());
                        }
                        if ($days == 1) {
                            $table_day_wise_insert_query = "INSERT INTO tuesday VALUES(NULL,'$year',$semester,'$section','$table_row_wise[0]','$table_row_wise[1]','$table_row_wise[2]','$table_row_wise[3]','','','','')";
                            $table_day_wise_insert_result = mysql_query($table_day_wise_insert_query);
                        }
                        if ($days == 2) {
                            $table_day_wise_insert_query = "INSERT INTO wednesday VALUES(NULL,'$year',$semester,'$section','$table_row_wise[0]','$table_row_wise[1]','$table_row_wise[2]','$table_row_wise[3]','','','','')";
                            $table_day_wise_insert_result = mysql_query($table_day_wise_insert_query);
                        }
                        if ($days == 3) {
                            $table_day_wise_insert_query = "INSERT INTO thursday VALUES(NULL,'$year',$semester,'$section','$table_row_wise[0]','$table_row_wise[1]','$table_row_wise[2]','$table_row_wise[3]','','','','')";
                            $table_day_wise_insert_result = mysql_query($table_day_wise_insert_query);
                        }
                        if ($days == 4) {
                            $table_day_wise_insert_query = "INSERT INTO friday VALUES(NULL,'$year',$semester,'$section','$table_row_wise[0]','$table_row_wise[1]','$table_row_wise[2]','$table_row_wise[3]','','','','')";
                            $table_day_wise_insert_result = mysql_query($table_day_wise_insert_query);
                        }
                    }
                } else {
                    $lab_slot_lecture = array(3,5,7);
                    $table_row_wise = array();
                    $shuffle_array = array();
                    $remain_sub_list = array();
                    //$fill_value = 1;
                    for($fill=0;$fill<$subject_rows;$fill++) {
                        $shuffle_array[$fill] = $fill;
                      //  $fill_value++;
                    }

                    for ($days = 0; $days < 5; $days++) {
                        //shuffle($subject_list);
                       // $temp = $subject_rows;
                        $remaining_subject_count = 8 - $subject_rows;
                        $remain_sub_list = unique_random(0,$subject_rows-1,$remaining_subject_count);
                        $last_index = $subject_rows + $remaining_subject_count;
                        $xyz = 0;
                        for($filll = $subject_rows;$filll < $last_index; $filll++,$xyz++) {
                            $shuffle_array[$filll] = $remain_sub_list[$xyz];
                        }
                        shuffle($shuffle_array);
                        for ($lectures = 0; $lectures < 8; $lectures++) {
                            //$random_subject_index = mt_rand(0, ($subject_rows - 1));
                            $random_subject_index = $shuffle_array[$lectures];
                            //echo $random_subject_index;
                            $table_row_wise[$lectures] = $subject_list[$random_subject_index];
                        }

                        //print_r($table_row_wise);
                        if ($days == 0) {

                            $table_day_wise_insert_query = "INSERT INTO mondey VALUES(NULL,'$year',$semester,'$section','$table_row_wise[0]','$table_row_wise[1]','$table_row_wise[2]','$table_row_wise[3]','$table_row_wise[4]','$table_row_wise[5]','$table_row_wise[6]','$table_row_wise[7]')";
                            $table_day_wise_insert_result = mysql_query($table_day_wise_insert_query) or die(mysql_error());
                        }
                        if ($days == 1) {
                            $table_day_wise_insert_query = "INSERT INTO tuesday VALUES(NULL,'$year',$semester,'$section','$table_row_wise[0]','$table_row_wise[1]','$table_row_wise[2]','$table_row_wise[3]','$table_row_wise[4]','$table_row_wise[5]','$table_row_wise[6]','$table_row_wise[7]')";
                            $table_day_wise_insert_result = mysql_query($table_day_wise_insert_query);
                        }
                        if ($days == 2) {
                            $table_day_wise_insert_query = "INSERT INTO wednesday VALUES(NULL,'$year',$semester,'$section','$table_row_wise[0]','$table_row_wise[1]','$table_row_wise[2]','$table_row_wise[3]','$table_row_wise[4]','$table_row_wise[5]','$table_row_wise[6]','$table_row_wise[7]')";
                            $table_day_wise_insert_result = mysql_query($table_day_wise_insert_query);
                        }
                        if ($days == 3) {
                            $table_day_wise_insert_query = "INSERT INTO thursday VALUES(NULL,'$year',$semester,'$section','$table_row_wise[0]','$table_row_wise[1]','$table_row_wise[2]','$table_row_wise[3]','$table_row_wise[4]','$table_row_wise[5]','$table_row_wise[6]','$table_row_wise[7]')";
                            $table_day_wise_insert_result = mysql_query($table_day_wise_insert_query);
                        }
                        if ($days == 4) {
                            $table_day_wise_insert_query = "INSERT INTO friday VALUES(NULL,'$year',$semester,'$section','$table_row_wise[0]','$table_row_wise[1]','$table_row_wise[2]','$table_row_wise[3]','$table_row_wise[4]','$table_row_wise[5]','$table_row_wise[6]','$table_row_wise[7]')";
                            $table_day_wise_insert_result = mysql_query($table_day_wise_insert_query);
                        }
                    }
                    shuffle($lab_list);
                    $days_random_choices = unique_random(0,4,$lab_rows);

                    $day_array = array("mondey","tuesday","wednesday","thursday","friday");
                    $list_table_query = "SHOW TABLES";
                    $list_table_result = mysql_query($list_table_query);

                    for($labs_count=0;$labs_count<$lab_rows;$labs_count++) {
                        $day_choice = $days_random_choices[$labs_count];
                        $day_select = $day_array[$day_choice];

                        $lecture_index_random_choice = array_rand($lab_slot_lecture);
                        $lecture_slot_random_choice = $lab_slot_lecture[$lecture_index_random_choice];
                        $lecture_slot_random_choice_next = $lecture_slot_random_choice + 1;
                        $lab_name = $lab_list[$labs_count];


                                $lab_allot_query = "UPDATE `tible`.`$day_select` SET `$lecture_slot_random_choice` = '$lab_name' WHERE `$day_select`.`year` = '$year' AND `$day_select`.`semester` = $semester AND `$day_select`.`section` = '$section'";
                                $lab_allot_query1 = "UPDATE `tible`.`$day_select` SET `$lecture_slot_random_choice_next` = '$lab_name' WHERE `$day_select`.`year` = '$year' AND `$day_select`.`semester` = $semester AND `$day_select`.`section` = '$section'";
                                //$lab_allot_query = "UPDATE $day_select SET $lecture_slot_random_choice = '$lab_name' WHERE year = '$year' AND semester = $semester AND section = '$section'";
                                mysql_query($lab_allot_query) or die(mysql_error());
                                mysql_query($lab_allot_query1);




                    }

                }


            ?>
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
                $dayss = array("mondey","tuesday","wednesday","thursday","friday");
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
                        $day_se = $dayss[$mm];
                        $fetch_timetable_rows_query = "SELECT * FROM $day_se WHERE year = '$year' AND semester = $semester AND section = '$section'";
                        $fetch_timetable_rows_result = mysql_query($fetch_timetable_rows_query) or die(mysql_error());
                        $timetable_row_details = array();
                        $p = 0;
                        $k = 1;
                        while($timetable_rows = mysql_fetch_assoc($fetch_timetable_rows_result)) {
                            for($kk = 0;$kk < 8;$kk++) {
                                $timetable_row_details[$kk] = $timetable_rows[$k];
                                $k++;
                            }


                        }
                        for($nn = 0; $nn < 4; $nn++) {

                            echo "<td>$timetable_row_details[$nn]</td>";

                        }
                    } else {
                        $day_se = $dayss[$mm];
                        $fetch_timetable_rows_query = "SELECT * FROM $day_se WHERE year = '$year' AND semester = $semester AND section = '$section'";
                        $fetch_timetable_rows_result = mysql_query($fetch_timetable_rows_query) or die(mysql_error());
                        $timetable_row_details = array();
                        $p = 0;
                        $k = 1;
                        while($timetable_rows = mysql_fetch_assoc($fetch_timetable_rows_result)) {
                            for($kk = 0;$kk < 8;$kk++) {
                                $timetable_row_details[$kk] = $timetable_rows[$k];
                                $k++;
                            }


                        }
                        //print_r($timetable_row_details);
                        for($nn = 0; $nn < 8; $nn++) {
                            echo "<td>$timetable_row_details[$nn]</td>";

                        }
                    }
                    echo "</tr>";
                }
                ?>
                </tbody>
                </table>
            <?php  } ?>
                    </div>
                </div>
                        </div>
                    </div>


  <?php if(isset($_POST['generate_new'])) { ?>
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
        <th>Subject Name</th>
                    </tr>
                </thead>
                <tbody>
				<?php 
		
       
      if(isset($_POST['generate_new'])) {  
			$fac_query = "SELECT * FROM temp_subjects";
			$result_q = mysql_query($fac_query);
			while($roww = mysql_fetch_assoc($result_q)) {
			$subject_name = $roww["subject"];
			$faculty_name = $roww["faculty"];
			?>
			<tr>
			<td><?=$faculty_name;?></td>
			<td><?=$subject_name;?></td>
			</tr>
			
			<?php
			}
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

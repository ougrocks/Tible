<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Timetable</title>
    <style type="text/css">
    body
    {
        font-family: arial;
    }

    th,td
    {
        margin: 0;
        text-align: center;
        border-collapse: collapse;
        outline: 1px solid #e3e3e3;
    }

    td
    {
        padding: 5px 10px;
    }

    th
    {
        background: #666;
        color: white;
        padding: 5px 10px;
    }

    td:hover
    {
        cursor: pointer;
        background: #666;
        color: white;
    }
    </style>
    </head>
    <body>
    <center>

	<h2><pre>TiBle</pre></h2>
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
		</select>
		<label>Section: </label>
		<select name = "section">
		<option value="CS A">CS A</option>
		<option value="CS B">CS B</option>
		<option value="CS C">CS C</option>
		<option value="CS D">CS D</option>
		</select>
        <input type="submit" name="submit" value="Generate" />
        </form>
		<br/><br/>
        <a href="unallot.php">Click to Un - allot Faculty</a>
        <a href="empty.php">Truncate Fixslot Table</a> <br/><br/>
        <table width="80%" align="center" >
        <div id="head_nav">
        <tr>
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
</div>  
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
			echo "Faculty Allotted <br>";
            while($row = mysql_fetch_assoc($result,MYSQL_ASSOC)) {
                $name = $row['name']; 
                $subject_id = $row['subid'];
                $subject_name = $row['sname'];
                echo "<br>";
                
                echo "Name : " . $name . "  Subject id : " . $subject_id . " Subject Name: " . $subject_name ."<br>";
            }
        }
		
        ?>
            </table><br/><br/>
			<?php if(isset($_POST['submit'])) { faculty_alloted(); 
			
			echo "<br/><br/>";
			} ?>
    </body>
</html>

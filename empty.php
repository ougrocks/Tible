<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once './dbinfo.php';
callConnect();
$query = "TRUNCATE TABLE fixslot";
$result = mysql_query($query) or die(mysql_error());
if($result) {
    echo "Success";
}
else
{
    mysql_error();
}



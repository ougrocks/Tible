<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function connect($hostname, $username, $password, $database) {
    mysql_connect($hostname,$username,$password) or die(mysql_error());
    mysql_select_db($database) or die(mysql_error());
    //return TRUE;
    //echo "Connection Successfull";
}
function callConnect() {
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "tible";
    connect($hostname, $username, $password, $database);
    return TRUE;
}
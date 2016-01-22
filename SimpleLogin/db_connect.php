<?php

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "") or die(mysql_error());

// Selecting Database
$db = mysql_select_db("loginsystem", $connection) or die(mysql_error());

?>
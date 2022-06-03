<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "admin-db"; /* Database name */

$conn = mysqli_connect('localhost','root','') ;
$db_select = mysqli_select_db($conn,'admin-db');


?>
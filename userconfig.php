<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "user_db"; /* Database name */

$conn = mysqli_connect($host,$user,$password) ;
$db_select = mysqli_select_db($conn,$dbname);


?>
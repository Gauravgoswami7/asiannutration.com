<?php
$connection=mysqli_connect('localhost','root');

if($connection){
	echo("database connected");
}
else{
	echo("database not connected");
}
mysqli_select_db($connection,'contactinfo');

$name=$_POST['Name'];
$email=$_POST['Email'];
$mobile=$_POST['Mobile'];
$hometown=$_POST['Hometown'];

// echo("$name ,$email ,$mobile,$hometown");

$data = "INSERT INTO info(Name, Email, Mobile, Hometown) VALUES ('$name','$email','$mobile','$hometown')";
mysqli_query($connection,$data);
header('location:successful.html');


?>

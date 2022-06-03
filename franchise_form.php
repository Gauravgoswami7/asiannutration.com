<?php
$connection=mysqli_connect('localhost','root');

// if($connection){
// 	echo("database connected");
// }
// else{
// 	echo("database not connected");
// }
mysqli_select_db($connection,'franchise_info');

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$city=$_POST['city'];

// echo("$name ,$email ,$mobile,$hometown");

$data = "INSERT INTO info(Name, Email, Mobile, City) VALUES ('$name','$email','$mobile','$city')";
mysqli_query($connection,$data);
if($data){
    ?>
    <script>
        alert("THank you for applaing");
    </script>
    <?php
}
else{
    ?>
    <script>
        alert("your data can't store");
    </script>
    <?php
}
// header('location:franchise.html');
?>

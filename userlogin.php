<?php
include 'usermenu.php'
?>
<?php
  $login =false;
  $showError= false;

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $sql ="select * from user_signup where username= '$username' AND password='$password'";
  $result = mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);
   if($num ==1){
     $login=true;
     header('location:index.php');
     session_start();
     $_SESSION['username'] = $username;
     $_SESSION['loggedin']= true;
     
   }
   else{
     $showError="true";
   }
}
?>
<?php
if($login){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> Now You Are Logged in.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}

if($showError){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>duplicate user exist</strong> Something went wrong.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>
   
   <form class="login"method="POST" style="height:auto;">
<h1 class="text-center text-dark mb-5" style="font-weight: 600;">Login</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label ">Email address*</label>
    <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter Username" name="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password*</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="password" aria-describedby="passwordHelp">
    <div id="passwordHelp" class="form-text my-3" style="font-size:1.5rem;">We'll never share your details with anyone else.</div>
  </div>
  <button type="submit" name="submit"  style="width: 100%;" class="btn btn-primary">Submit</button> <br>
  <div class="my-4"><p>Don't Have Any Account?  <a href="usersignup.php">Signup</a></p></div>
</form>
   







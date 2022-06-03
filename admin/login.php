<?php
include 'menu.php'
?>

<?php
    $login =false;
    $showError= false;
  
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
     $password = md5($_POST['password']);
  
    $sql ="select * from tbl_admin where username= '$username' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
     if($num ==1){
       $login=true;
    //    header('location:index.php');
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
  echo '<div style="font-size:2rem;" class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> Now You Are Logged in.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}

if($showError){
  echo '<div style="font-size:2rem;" class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>duplicate user exist</strong> Something went wrong.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>
<style>
  .login-form{
      width: 30vw;
      height: 30vh;
      background: #EEEEEE;
      top: 50%;
      left: 50%;
      transform: translate(-50% , -50%);
      position: absolute;
      font-size: 1.8rem;
      text-align: center;
  }
  .login-form >input{
      padding: 0.4rem 1rem;
      border-radius: 5px;
  }
</style>


<div class="container" id="form_container">
    
<form action="" class="login-form my-3 " method="POST" style="background: #EEEEEE;">
<div>
        <img src="../images/delete-button.png" onclick="close1()" style="float:  right; margin:1rem; cursor:pointer;" width="30px" height="30px" alt="">
    </div>
<h1 class="text-center text-primary" style="font-weight: 700;"> Admin Login</h1> <br>
<label for="username">Username:-</label>
    <input type="username" name="username" id="username" required placeholder="Enter username"> <br> <br>
<label for="username">Password:-</label>
    <input type="password" name="password" id="password" required placeholder="Enter password"> <br> <br>
    <button class="btn btn-dark " value="submit" name="submit" type="submit" style=" font-weight: bold; ">Submit</button>
</form>
</div>

<script>
    function close1(){
        document.getElementById('form_container').style.display='none';
    }
</script>
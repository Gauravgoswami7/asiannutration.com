<?php
include 'usermenu.php'
?>
<?php
if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $username = $_POST['email'];
  $password = md5($_POST['password']);
  $cpassword = md5($_POST['cpassword']);
  
  if (empty($name) || empty($username) || empty($password) ||  empty($cpassword)) {
    $_SESSION['required'] = 'fill the all required details';

  } else {
    if ($password == $cpassword) {
      $sql = "INSERT INTO user_signup SET
        name='$name',
        username='$username',
        password='$password',
        cpassword='$cpassword'
    ";
      $res = mysqli_query($conn, $sql);

      if ($res == True) {
        $_SESSION['add'] = 'Signup Succesfully';
      } 
  }
  else {
    $_SESSION['mismatch'] = 'password does not match';
  }
}
}

?>


<form action="" class="login" method="POST">
  <h1 class="text-center text-dark mb-5" style="font-weight: 600;">Sign up</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label ">Enter Name*</label>
    <input type="name" class="form-control" id="exampleInputname" placeholder="Enter Name" id="name" name="name" aria-describedby="nameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label ">Email address*</label>
    <input type="email"style=" text-transform: lowercase;" class="form-control" id="exampleInputEmail1" placeholder="example@gmail.com" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password*</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="password" aria-describedby="passwordHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password*</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter again Password" name="cpassword" aria-describedby="passwordHelp">
    <div id="passwordHelp" class="form-text my-3" style="font-size:1.5rem;">We'll never share your details with anyone else.</div>
    <p class="text-danger"> <?php
                            if (isset($_SESSION['mismatch'])) {
                              echo $_SESSION['mismatch'];
                              unset($_SESSION['mismatch']);
                            }
                            ?></p>
  </div>
  <p class="text-success"> <?php
                            if (isset($_SESSION['add'])) {
                              echo $_SESSION['add'];
                              unset($_SESSION['add']);
                            }
                            ?></p>
                              <p class="text-success"> <?php
                            if (isset($_SESSION['required'])) {
                              echo $_SESSION['required'];
                              unset($_SESSION['required']);
                            }
                            ?></p>
  <button type="submit" onclick="submit1()" style="width: 100%;" name="submit" class="btn btn-primary ">Submit</button> <br>
 <div class="my-4"> <p>Already have any account? <a href="userlogin.php">Login</a></p></div>

</form>
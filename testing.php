<?php
include 'usermenu.php'
?>
       
    <div class="container login" style="display:  grid; grid-template-columns:1fr 1fr;">
      <div style="width:100%; "> <img src="images/login-theme.jpg" alt="login pages" width="100%" height="100%" style="padding: 0.5rem; text-align:center;"></div>
      <form  method="POST" style="height:auto;">
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
    </div>
  </body>
</html> 
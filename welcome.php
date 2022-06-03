<?php
include 'usermenu.php'
?>
<h1 class="text-center text-success"> Welcome <?php 
  if (isset($_SESSION['username'])) {
    echo $_SESSION['username'];
     
  }
?></h1>
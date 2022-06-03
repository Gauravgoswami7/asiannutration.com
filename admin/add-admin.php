<?php
include 'menu.php'
?>
<?php
if (isset($_POST['submit'])) {
    $full_name = $_POST['fullname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO tbl_admin SET
        full_name='$full_name',
        username='$username',
        password='$password'
    ";


    $res = mysqli_query($conn, $sql);

    if ($res == True) {
        $_SESSION['add'] = 'Admin Added Succesfully';
    } else {
        $_SESSION['add'] = 'Add Admin Failed ';
    }
}

?>

<section class="container">
    <h1 class="text-success" style="padding: 2rem;font-weight:700;">Admin List</h1>
    <a href="" id="add-admin" class="btn btn-primary">Add-Admin</a>
     <br>
      <br>
    <a href="login.php" id="Login" class="btn btn-dark"> Login</a>
    <br> <br>
    <?php
    if (isset($_SESSION['add'])) {
        echo $_SESSION['add'];
        unset($_SESSION['add']);
    }
    ?>

    <table class="contact-table">
        <tr>
            <th>S.no</th>
            <th>Full Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <br>
        <hr>
        <?php
        $sql = " SELECT * FROM tbl_admin";
        $res = mysqli_query($conn, $sql);
        $sn=1;

        if ($res == True) {
            $count = mysqli_num_rows($res);


            if ($count > 0) {
                while ($rows = mysqli_fetch_assoc($res)) {
                    $id = $rows['id'];
                    $full_name = $rows['full_name'];
                    $username = $rows['username'];
                    $password = $rows['password'];

        ?>  
                    <tr style="text-align: start;">
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $full_name; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $password; ?></td>
                        <td> <a href="" class="btn btn-danger">Delete</a> <a href="" class="btn btn-success">Edit</a></td>
                    </tr>
        <?php

                }
            } else {
            }
        }


        ?>


    </table>



    <div class="authirity" id="authirity">
        <div><img src="../images/delete-button.png" id="deleteimg" alt="delete btn" width="40px" height="40px" style="float:right; margin:1rem; cursor:pointer;"></div>
        <h1 class="text-center text-dark " style=" padding:1rem; font-weight:600;">Admin Signup</h1>
        <form action="" class="login-form" method="POST">
            <label for="name">FullName:-</label>
            <input type="text" name="fullname"> <br>
            <label for="name">Username:-</label>
            <input type="text" name="username"> <br>
            <label for="name">Password:-</label>
            <input type="text" name="password"> <br>
            <button name="submit" class="btn btn-primary my-3"> Submit</button>
        </form>
    </div>

    <script>
        let delete1 = document.getElementById('deleteimg');
        delete1.onclick = () => {
            document.getElementById('authirity').style.display = "none";
        }
        let add_admin = document.getElementById('add-admin');
        add_admin.onclick = () => {
            document.getElementById('authirity').style.display = "block";
        }
    </script>
</section>

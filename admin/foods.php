<?php
include 'menu.php'
?>

<section class="container">
    <h1 class="text-success" style="padding: 2rem;font-weight:700;">FOOD table</h1>
    <a href="" id="add-food"   class="btn btn-primary">Add-Dishes</a>

    <?php
    if (isset($_SESSION['add'])) {
        echo $_SESSION['add'];
        unset($_SESSION['add']);
    }
    ?>
    <table class="contact-table">
        <tr>
            <th>S.no</th>
            <th>Food Name</th>
            <th>Description</th>
            <th>Rate</th>
            <th>Disscount</th>
            <th>Food-img</th>
            <th>Action</th>
        </tr>
        <br>
        <hr>
        <?php
        $sql = " SELECT * FROM food_table";
        $res = mysqli_query($conn, $sql);
        $sn=1;

        if ($res == True) {
            $count = mysqli_num_rows($res);


            if ($count > 0) {
                while ($rows = mysqli_fetch_assoc($res)) {
                    $id = $rows['id'];
                    $food_name = $rows['food_name'];
                    $description = $rows['description'];
                    $rate = $rows['rate'];
                    $discount = $rows['discount'];
                    $img = $rows['img'];

        ?>
                    <tr style="text-align: start;">
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $food_name; ?></td>
                        <td><?php echo $description; ?></td>
                        <td><?php echo $rate; ?></td>
                        <td><?php echo $discount; ?></td>
                        <td><?php echo $img; ?></td>
                        <td> <a href="#" class="btn btn-danger">Delete</a> <a href="#" class="btn btn-success">Edit</a></td>
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
     <h1 class="text-center text-dark " style=" padding:1rem; font-weight:600;">Add-Dishes</h1>
     <form action="" class="login-form" method="POST">
         <label for="name">Food Name:-</label>
         <input type="text" name="food_name"> <br>
         <label for="name">Description:-</label>
         <input type="text" name="description"> <br>
         <label for="name">Rate:-</label>
         <input type="text" name="rate"> <br>
         <label for="name">Discount:-</label>
         <input type="text" name="discount"> <br>
         <label for="name">food-img:-</label>
         <input type="file" name="img"> <br>
         <button name="submit" class="btn btn-primary my-3"> Submit</button>
     </form>
 </div>
    
 <script>
     let delete1 = document.getElementById('deleteimg');
     delete1.onclick=()=>{
        document.getElementById('authirity').style.display="none";
     }
     let add_admin= document.getElementById('add-food'); 
     add_admin.onclick=()=>{
         document.getElementById('authirity').style.display="block";
     }
 
 </script>
</section>
<?php
if (isset($_POST['submit'])) {
    $food_name = $_POST['food_name'];
    $description = $_POST['description'];
    $rate = $_POST['rate'];
    $discount = $_POST['discount'];
    // $img = $_POST['img'];
    

    $sql = "INSERT INTO food_table SET
        food_name='$food_name',
        description='$description',
        rate='$rate',
        discount='$discount'
        -- img='LOAD_FILE('$img')'
         ";


    $res = mysqli_query($conn, $sql);

    if ($res == True) {
        $_SESSION['add'] = 'Admin Added Succesfully';
    } else {
        $_SESSION['add'] = 'Add Admin Failed ';
    }
}



?>

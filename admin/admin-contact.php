<?php
include 'menu.php'
?>

<section class="container">
    <h1 class="text-success" style="padding: 2rem;font-weight:700;">Contact Table</h1>
    <table class="contact-table">
        <tr>
            <th>S.no</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Hometown</th>
            <th>Action</th>
        </tr>
        <br>
        <hr>
        <?php
        $conn = mysqli_connect('localhost','root','') ;
        $db_select = mysqli_select_db($conn,'contactinfo');
        $sql = " SELECT * FROM info";
        $res = mysqli_query($conn, $sql);
        $sn = 1;

        if ($res == True) {
            $count = mysqli_num_rows($res);


            if ($count > 0) {
                while ($rows = mysqli_fetch_assoc($res)) {
                    $full_name = $rows['Name'];
                    $email = $rows['Email'];
                    $mobile = $rows['Mobile'];
                    $city = $rows['Hometown'];

        ?>
                    <tr style="text-align: start;">
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $full_name; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $mobile; ?></td>
                        <td><?php echo $city; ?></td>
                        <td> <a href="" class="btn btn-danger">Delete</a></td>
                    </tr>
        <?php

                }
            } 
        }


        ?>


    </table>
</section>
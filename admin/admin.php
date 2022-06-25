<html>
    <head>
        <title>Yummie Japanese Food || Home</title>
        <link rel="stylesheet" href="../css/admin-all.css">
    </head>

    <body>
<?php include ('partials/menu.php')?>

        <!-- Main Concent Section Start -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1>
                <br>

                <?php
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add']; //Diplay season message
                        unset($_SESSION['add']); //remove season message
                    }
                ?>

                <br><br>
                <!--button add admin-->
                <a href="add-admin.php" class="btn-primary">Add Admin</a>
                <br> <br> <br>

                <table class="tbl-full">
                    <tr>
                        <th>id</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>

                    <?php
                        //Query to get all admin
                        $sql = "SELECT * FROM admin";
                        //excute query
                        $res = mysqli_query($conn, $sql);

                        //check the query is executed successfully
                        if($res=TRUE)
                        {
                            //count row
                            $count = mysqli_num_rows($res); //to get all the rows

                            //check the num of rows returned
                            if($count>0)
                            {
                                //data in database
                                while($rows = mysqli_fetch_assoc($res));
                                {
                                    //using while loop to get all the data in database
                                    //will run as long have data in database

                                    //get individual data
                                    $id=$rows['id'];
                                    $full_name=$rows['full_name'];
                                    $user_id=$rows['username'];

                                    //display value on table
                    ?>
                                        <tr>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $full_name; ?></td>
                                            <td><?php echo $username; ?></td>
                                            <td>
                                            <a href="#"class="btn-secondary">Update</a> 
                                            <a href="#"class="btn-danger">Delete</a> 
                                            </td>
                                        </tr>                                         

                                    <?php 

                                    
                                }
                            }
                            else
                            {
                                //dont have data in database
                            }
                        }
                    ?>

                </table>


            </div>           

        </div>
        <!-- Main Concent Section End -->



<?php include('partials/footer.php')?>
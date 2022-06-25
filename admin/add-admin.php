<?php include('partials/menu.php');?>


<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br><br>
        <?php
            if(isset($_SESSION['add'])) //checking the season
            {
                echo $_SESSION['add'];//Diplay season message
                unset($_SESSION['add']);//Remove season message
            }
        
        ?>



        <form action="" method="POST" >
            <table class="tbl-30">
                <tr>
                    <td>Full Name</td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter Your Name">
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" placeholder="Your Username">
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" placeholder="Enter Your Password">
                    </td>
                </tr>
                
                <tr>
                    <td colspan ="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
                
            </table>
            

        </form>
    </div>
</div>

<?php include ('partials/footer.php');?>

<?php
    //Menambahkan value ke database

    //check jika button click or not
    if(isset($_POST['submit']))
    {
        //button click
        
        //1. get data dari form
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); //password encription dengan md5

        //2. insert data to database
        $sql = "INSERT INTO admin SET
            full_name = '$full_name',
            username = '$username',
            password = '$password'
        ";

        //3.Excute Query dan save ke database
        $res = mysqli_query($conn, $sql);

        //4, Mengecek data masuk atau tidak
        if($res==true)
        {
            //data masuk
            //a season variable to display message
            $_SESSION['add'] = "Admin Added Successfully";
            //redirect to admin page
            header("Location:".SITEURL. 'admin/admin.php');
            
        }
        else
        {
            //a season variable to display message
            $_SESSION['add'] = "Failed Added Successfully";
            //redirect to add-admin page
            header("Location:".SITEURL. 'admin/add-admin.php');
            
        }

    }

?>
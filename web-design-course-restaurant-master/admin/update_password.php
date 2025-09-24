<?php include("partials/navbar.php"); ?>

<style>
    body{
          background: #2e2748;

    }
    .main-content{
          color: white;
          background-color: #2e2748;
    }   
    .tbl-full{
        color: white;
    }
    
</style>
<div class="main-content">
    <div class="wrapper">
        <h1> Change password</h1>
        <br />
        <?php 
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
        }
        ?>
         <!--update form starts here-->
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Old Password: </td>
                    <td><input type="password" name="current_password" placeholder="Current Password"></td>
                </tr>
                <tr>
                    <td>New Password: </td>
                    <td><input type="password" name="new_password" placeholder="New Password"></td>
                </tr>
                <tr>
                    <td>Confirm Password: </td>
                    <td><input type="password" name="confirm_password" placeholder="Confirm Password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                        <input type="submit" name="submit" value="Change Password" class="btn-secondary">
                    </td>
                </tr>
            </table>
      </div>
  </div>   
  <?php 
        //check whether the submit button is clicked or not
        if(isset($_POST['submit']))
        {
            //echo "clicked";
            //1. get the data from form
            $id = $_POST['id'];
            $current_password = md5($_POST['current_password']);
            $new_password = md5($_POST['new_password']);
            $confirm_password = md5($_POST['confirm_password']);

            //2. check whether the user with current id and current password exists or not
            $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password'";

            //execute the query
            $res = mysqli_query($conn, $sql);

            if($res==true)
            {
                //check whether the data is available or not
                $count = mysqli_num_rows($res);
                if($count==1)
                {
                    //user exists and password can be changed
                    //echo "user found";
                    //check whether the new password and confirm match or not
                    if($new_password==$confirm_password)
                    {
                        //update the password
                        $sql2 = "UPDATE tbl_admin SET
                        password='$new_password'
                        WHERE id=$id
                        ";
                        //execute the query
                        $res2 = mysqli_query($conn, $sql2);
                        //check whether the query executed or not
                        if($res2==true)
                        {
                            //display success message
                            //redirect to manage admin page with success message
                            $_SESSION['update'] = "<div class='success'>Password changed successfully.</div>";
                            header('location:'.SITEURL.'admin/manage_admin.php');
                        }
                        else
                        {
                            //display error message
                            //redirect to manage admin page with error message
                            $_SESSION['update'] = "<div class='error'>Failed to change password.</div>";
                            header('location:'.SITEURL.'admin/manage_admin.php');
                        }
                    }
                    else
                    {
                        //redirect to manage admin page with error message
                        $_SESSION['pwd-not-match'] = "<div class='error'>Password  not match.</div>";
                        header('location:'.SITEURL.'admin/manage_admin.php');
                    }
                }
                else
                {
                    //user does not exist set message and redirect
                    $_SESSION['user-not-found'] = "<div class='error'>User not found.</div>";
                    header('location:'.SITEURL.'admin/manage_admin.php');
                }
            }
            //3. if user exists, check whether the new password and confirm password match or not   
            //4. change password if all above is true
        }
    ?>   
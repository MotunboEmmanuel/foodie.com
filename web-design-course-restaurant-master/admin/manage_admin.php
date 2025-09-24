<?php include('partials/navbar.php'); ?>
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
        <h1>Manage Admin</h1>
        <br />

          <?php
           if(isset($_SESSION['add'])) {
            echo $_SESSION['add']; //display session message
              unset($_SESSION['add']); //remove session message
            } 
              // b  
            
           if(isset($_SESSION['delete'])) {
              echo $_SESSION['delete']; //display session message
             unset($_SESSION['delete']); //remove session message
           }
              if(isset($_SESSION['update'])) {
                  echo $_SESSION['update']; //display session message
                 unset($_SESSION['update']); //remove session message
              }
              if(isset($_SESSION['user-not-found'])) {
                  echo $_SESSION['user-not-found']; //display session message
                 unset($_SESSION['user-not-found']); //remove session message
              }
                if(isset($_SESSION['pwd-not-match'])) {
                    echo $_SESSION['pwd-not-match']; //display session message
                     unset($_SESSION['pwd-not-match']); //remove session message
                }
                if(isset($_SESSION['change-pwd'])) {
                    echo $_SESSION['change-pwd']; //display session message
                     unset($_SESSION['change-pwd']); //remove session message
                }
                
            ?>
            <br><br>

        <a href="add_admin.php" class="btn-add">Add Admin</a>
        <br /><br /><br />

        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Fullname</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
            <?php 
                    

                // 1. Connect to DB
                $conn = mysqli_connect("localhost", "root", "root", "food-auth");
                if (!$conn) {
                    die("Database connection failed: " . mysqli_connect_error());
                }

                // 2. Get admins
                $sql = "SELECT * FROM tbl_admin";
                $res = mysqli_query($conn, $sql);

                if($res==TRUE)
                {
                    $count = mysqli_num_rows($res);
                    $sn = 1; // Serial number

                    if($count>0)
                    {
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $id = $row['id'];
                            $full_name = $row['full_name'];
                            $username = $row['username'];
            ?>
                            <tr>
                                <td><?php echo $sn; ?></td>
                                <td><?php echo $full_name; ?></td>
                                <td><?php echo $username; ?></td>
                                <td>
                                    <a href='<?php echo SITEURL; ?>admin/update_password.php?id=<?php echo $id;?>' class="btn-add">Change password</a>
                                    <a href='<?php echo SITEURL; ?>admin/update_admin.php?id=<?php echo $id;?>' class='btn-secondary'>Update Admin</a>
                                    <a href='<?php echo SITEURL; ?>admin/delete_admin.php?id=<?php echo $id;?>' class='btn-primary'>Delete Admin</a>
                                </td>
                            </tr>
            <?php
                            $sn++;
                        }
                    }
                    else
                    {
                        echo "<tr><td colspan='4'>No Admins Found</td></tr>";
                    }
                }
                mysqli_close($conn);
            ?>
        </table>
    </div>
</div>

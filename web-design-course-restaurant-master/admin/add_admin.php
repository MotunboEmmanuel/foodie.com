<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
<?php include("partials/navbar.php"); ?>
<style>
    body{
          background: #2e2748;

    }
    .main-content{
          color: white;
          background-color: #2e2748;
    }   
    {
        color: white;
    }
</style>

<div class="main-content">
    <div class="wrapper">   
        <h1>Add Admin</h1>
        <br /><br />

     

        <form action="" method="post">
            <table>
                <tr>
                    <td>Full Name</td>
                    <td><input type="text" name="fullname" placeholder="Enter your name"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" placeholder="Your username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" placeholder="Your password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include("partials/footer.php"); ?>

<?php
    
if (isset($_POST['submit'])) {
    // 1. Connect to DB
    $conn = mysqli_connect("localhost", "root", "root", "food-auth");
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // 2. Get the data from form
    $full_name = $_POST['fullname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // 3. SQL query to save the data into database
    $sql = "INSERT INTO tbl_admin SET
        full_name='$full_name',
        username='$username',
        password='$password'";

    // 4. Execute query
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo " connected to db !";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    // 5. Check whether the (query is executed) data is inserted or not and display appropriate message 
    if ($res == TRUE) {
        // Data inserted
        // Create a session variable to display message
        $_SESSION['add'] = "Admin added successfully.";
        // Redirect page to manage admin
        header("location:" . SITEURL . 'admin/manage_admin.php');
    } else {
        // Failed to insert data
        // Create a session variable to display message
        $_SESSION['add'] = "Failed to add Admin.";
        // Redirect page to add admin
        header("location:" . SITEURL . 'admin/add_admin.php');
     
 
}}
?>

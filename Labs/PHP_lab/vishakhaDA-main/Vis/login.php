<!DOCTYPE html>
<html lang="en">

<?php
include("templates/header.php");
?>

<?php
include("templates/nav-out.php");
?>

<?php
require('db.php');
session_start();
if (isset($_POST['uname'])) {
    // Removes backslashes
    $uname= stripslashes($_REQUEST['uname']);
    // Escapes special characters in a string
    $uname = mysqli_real_escape_string($con, $uname);
    $pass = stripslashes($_REQUEST['pass']);
    $pass = mysqli_real_escape_string($con, $pass);
    // Checking if user exists in the database or not
    $query = "SELECT * FROM `admin` WHERE uname='$uname' and pass='" . $pass . "'";
    $result = mysqli_query($con, $query);
    $rows = mysqli_num_rows($result);
    
    if ($rows == 1) {
        $_SESSION['uname'] = $uname;
        // Redirect user to index page
        echo "<script>window.location.href='index';</script>";
        
    } else {
        
        echo "<script>alert('Invalid Credentials');window.location.href='home';</script>";
    }
} else {
    ?>
    <!-- Main Content -->
    <div class="container">
        <!-- Login Form -->
        <div class="row mt-5 mb-5">
            <div class="w-100 w-md-50 mx-auto">
                <div class="card white card-top-lightblue">
                    <div class="card-content">
                        <span class="card-title black-text">Admin Login</span>
                        <form method="POST" action="" name="login">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="uname" name="uname" type="text" required>
                                    <label for="uname">Username</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">lock</i>
                                    <input id="pass" name="pass" type="password"  required>
                                    <label for="pass">Password</label>
                                </div>
                                <div class="center">
                                    <button name="loginStudBtn" class="btn btn-exc z-depth-0 waves-effect mb-n4" id="loginStudBtn" value="Login">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php
include("templates/footer.php");
?>


</body>

</html>
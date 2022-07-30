<!DOCTYPE html>
<html lang="en">

<?php
include("templates/header.php");
?>

<?php
include("templates/nav.php");
?>

<?php
require('db.php');
session_start();


if (isset($_POST['productID'])) {

    $productID= stripslashes($_REQUEST['productID']);
    $productID = mysqli_real_escape_string($con, $productID);
    
    $productName = stripslashes($_REQUEST['productName']);
    $productName = mysqli_real_escape_string($con, $productName);

    $price = stripslashes($_REQUEST['price']);
    $price = mysqli_real_escape_string($con, $price);


    $sql = "INSERT INTO products (productID,productName,price) VALUES ('$productID','$productName','$price')" ;
    $result = mysqli_query($con, $sql);
    
    if($result){
        echo "<script>alert('Product Added');window.location.href='update';</script>";
    }else{
        echo "<script>alert('OOPs Something went wrong');window.location.href='update';</script>";
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
                        <span class="card-title black-text">Add New Product</span>
                        <form method="POST" action="" name="update">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="productID" name="productID" type="number" required>
                                    <label for="productID">Product ID</label>
                                </div>

                                <div class="input-field col s12">
                                    <input id="productName" name="productName" type="text"  required>
                                    <label for="productName">Product Name</label>
                                </div>

                                <div class="input-field col s12">
                                    <input id="price" name="price" type="number" required>
                                    <label for="price">Price</label>
                                </div>
                                
                                <div class="center">
                                    <button name="loginStudBtn" class="btn btn-exc z-depth-0 waves-effect mb-n4" id="loginStudBtn" value="Login">Search</button>
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
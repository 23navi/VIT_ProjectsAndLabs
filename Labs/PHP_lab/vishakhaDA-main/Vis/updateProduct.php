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



if (isset($_POST['productName'])){
    $productID= stripslashes($_REQUEST['productID']);
    $productID = mysqli_real_escape_string($con, $productID);
    
    $productName = stripslashes($_REQUEST['productName']);
    $productName = mysqli_real_escape_string($con, $productName);

    $price = stripslashes($_REQUEST['price']);
    $price = mysqli_real_escape_string($con, $price);
    
    $query = "UPDATE products SET productName='$productName', price='$price' WHERE productID='$productID'";
    $result = mysqli_query($con, $query);
   
    if($result){
        echo "<script>alert('Product Updated');window.location.href='update';</script>";
    }else{
        echo "<script>alert('OOPs Something went wrong');window.location.href='update';</script>";
    }

}

else if (isset($_POST['productID'])) {
    // Removes backslashes
    $productID= stripslashes($_REQUEST['productID']);
    // Escapes special characters in a string
    $productID = mysqli_real_escape_string($con, $productID);


    $sql = "SELECT productID,productName,price FROM products WHERE productID='$productID'" ;
    $result = mysqli_query($con, $sql);
    
        
    $row = mysqli_fetch_row($result);
    $name=$row[1];
    $price=$row[2];
    
    
    
    ?>
    <!-- Main Content -->
    <div class="container">
        <!-- Login Form -->
        <div class="row mt-5 mb-5">
            <div class="w-100 w-md-50 mx-auto">
                <div class="card white card-top-lightblue">
                    <div class="card-content">
                        <span class="card-title black-text">Update Product</span>
                        <form method="POST" action="" name="update">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="productID" name="productID" type="number" placeholder="<?php echo $productID;?>" value="<?php echo $productID;?>" readonly >
                                    <label for="productID">Product ID</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="productName" name="productName" type="text"  placeholder= "Old Name: <?php echo $name ?>" required>
                                    <label for="productName">New Product Name</label>
                                </div>

                                <div class="input-field col s12">
                                    <input id="price" name="price" type="number" placeholder="Old Price: <?php echo $price?>"required>
                                    <label for="price">New Price</label>
                                </div>
                                
                                <div class="center">
                                    <button name="loginStudBtn" class="btn btn-exc z-depth-0 waves-effect mb-n4" id="loginStudBtn" value="Login">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
                            
 <?php                       

    

    // Checking if user exists in the database or not
    
    // $rows = mysqli_num_rows($result);
    
    if (1) {
        
        // Redirect user to index page
        //echo "<script>window.location.href='index';</script>";
        echo "<script>alert('Done')";
    } else {
        echo "<script>alert('Oops')";
        //echo "<script>alert('Invalid Credentials');window.location.href='home';</script>";
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
                        <span class="card-title black-text">Update Product</span>
                        <form method="POST" action="" name="update">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="productID" name="productID" type="number" required>
                                    <label for="productID">Product ID</label>
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
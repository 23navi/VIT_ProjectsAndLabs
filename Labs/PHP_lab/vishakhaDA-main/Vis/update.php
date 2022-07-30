<?php
require('db.php');
session_start();
if (!isset($_SESSION["uname"])) {
    header("Location: login");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<?php
include("templates/header.php");
?>

<?php
include("templates/nav.php");
?>

<div class="container">
    <!-- Notice -->
    <h2>Update Products </h2>
    <div class="row mt-5">
        <div class="col s12">
            <div class="card white card-top-orange">
                <div class="card-content">
                <span class="card-title black-text">Update Products</span>
                    <p class="text-colored">
                        Enter the product ID to update the Product
                    </p>
                <div class="card-action center">
                    <a href="updateProduct" class="btn btn-exc z-depth-0 waves-effect">Update Product</a>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Cards -->
    <div class="row mb-5">
        <div class="col s12 m6">
            <div class="card white card-top-green">
                <div class="card-content">
                    <span class="card-title black-text">Add New Product</span>
                    <p class="text-colored">Add Unique product ID</p>
                </div>
                <div class="card-action center">
                    <a href="addProduct" class="btn btn-exc-green z-depth-0 waves-effect">Add Product</a>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card white card-top-blue">
                <div class="card-content">
                    <span class="card-title black-text">Delete Product</span>
                    <p class="text-colored">Enter the product ID to Remove Product</p>
                </div>
                <div class="card-action center">
                    <a href="removeProduct" class="btn btn-exc z-depth-0 waves-effect">Delete Product</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include("templates/footer.php");
?>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="libs/js/coursesTable.js"></script>

<body>

</html>
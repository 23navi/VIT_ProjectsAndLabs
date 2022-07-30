<?php
require('db.php');
session_start();
if (!isset($_SESSION["uname"])) {
    header("Location: home");
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

<!-- Main Content -->
<div class="container">
    <!-- Heading -->
    <div class="row mt-5">
        <h4>Welcome, <?php echo $_SESSION["uname"]?></h4>
        
    </div>
    <!-- Cards -->
    <div class="row mb-5 mt-5">
        <div class="col s12">
            <a href="product">
                <div class="card white card-top-blue">
                    <div class="card-content">
                        <div class="center">
                            
                        </div>
                        <span class="card-title black-text center mt-2">View Products</span>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row mb-5 mt-5">
        <div class="col s12">
            <a href="update">
                <div class="card white card-top-blue">
                    <div class="card-content">
                        <div class="center">
                            
                        </div>
                        <span class="card-title black-text center mt-2">Update Products</span>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row mb-5 mt-5">
        <div class="col s12">
            <a href="update">
                <div class="card white card-top-blue">
                    <div class="card-content">
                        <div class="center">
                            
                        </div>
                        <span class="card-title black-text center mt-2">Resultant</span>
                    </div>
                </div>
            </a>
        </div>
    </div>

</div>

<?php
include("templates/footer.php");
?>

</body>

</html>
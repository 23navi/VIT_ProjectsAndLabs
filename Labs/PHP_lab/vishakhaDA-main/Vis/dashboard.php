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
        <h4>Faculty Dashboard</h4>
    </div>
    <!-- Cards -->
    <div class="row mb-5 mt-5">
        <div class="col s12">
            <a href="facultyCourses">
                <div class="card white card-top-blue">
                    <div class="card-content">
                        <div class="center">
                            <i class="material-icons small text-colored">visibility</i>
                        </div>
                        <span class="card-title black-text center mt-2">View Courses</span>
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
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

<!-- Main Content -->
<div class="container">
    <!-- Heading -->
    <div class="row mt-5">
        <h4>View and Search products</h4>
    </div>
    <!-- Table -->
    <div class="row">
        <div class="col s12">
            <div class="card material-table">
                <div class="table-header">
                    <span class="table-title">Available Products</span>
                    <div class="actions">
                        <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
                    </div>
                </div>
                <table id="2ccCourseTable" class="responsive-table highlight centered">
                    <thead>
                        <tr>
                            <th>CODE </th>
                            <th>PRODUCT NAME </th>
                            <th>PRICE </th>
                        </tr>
                    </thead>
                    <tbody id="2ccCourses">
                        <?php
                        // Make Query & Get Result
                        $sql = "SELECT productID,productName,price FROM products";
                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_row($result)) {
                            echo "<tr>";
                            echo "<td>$row[0]</td>";
                            echo "<td>$row[1]</td>";
                            echo "<td>$row[2]</td>";
                            echo "</tr>";
                        }
                        ?>
                        <?php
                        // Free result set
                        mysqli_free_result($result);
                        ?>
                    </tbody>
                </table>
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
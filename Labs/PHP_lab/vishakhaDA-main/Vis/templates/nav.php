<nav>
    <div class="nav-wrapper">
        <a href="#" data-target="sidenav-1" class="left sidenav-trigger show-on-large"><i class="material-icons white-text">menu</i></a>
        <a href="index" class="brand-logo heading center" style="font-size: 23px;">Theory DA</a>
    </div>
</nav>
<?php
$route = "";
if (isset($_SESSION["uname"])) {
    $route = "index";
} 
?>
<!-- Left Sidebar -->
<ul id="sidenav-1" class="sidenav">
    <a href="<?php echo $route; ?>" class="center-align">
        
    </a>
    <li><a href="<?php echo $route; ?>" class="waves-effect grey lighten-4 center-align">Dashboard</a></li>
    <li class="mt-3"><a href="product" class="waves-effect grey lighten-4 center-align">View Products</a></li>
    <li class="mt-3"><a href="update" class="waves-effect grey lighten-4 center-align">Update Product</a></li>
    <li class="mt-3"><a href="resultant" class="waves-effect grey lighten-4 center-align">Resultant</a></li>
    <li class="mt-5 mb-5"><a href="logout" class="waves-effect grey lighten-2 center-align"><i class="material-icons">exit_to_app</i>Logout</a></li>
</ul>
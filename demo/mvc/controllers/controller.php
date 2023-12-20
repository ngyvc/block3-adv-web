<?php
    if(!isset($_GET['controller']) || $_GET['controller'] == "home") {
        include("views/welcome.php");
    } else if($_GET['controller'] == "login") {
        include("views/login.php");
    } else if($_GET['controller'] == "dashboard") {
        include("views/dashboard.php");
    } else if($_GET['controller'] == "logout") {
        include("views/logout.php");
    } else {
        include("views/404.php");
    }
?>
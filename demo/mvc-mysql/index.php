<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MVC with mySQL</h1>
    <!-- add controller -->
    <?php
        include_once("controllers/controller.php");
        
        $connection1 = new connectionObject("localhost", "ngy_adv_web_user", "5zd5z42K~", "ngy_adv_web");
        $controller = new Controller($connection1);
        $controller->start();
        $connection2 = new connectionObject("localhost", "ngy_adv_web_user", "5zd5z42K~", "ngy_adv_web");
        $controller = new Controller($connection2);
        $controller->start();
    ?>
</body>
</html>
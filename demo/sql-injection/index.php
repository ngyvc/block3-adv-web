<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include_once('views/nav.php');
        include_once('controllers/controller.php');
    ?>
    <div>
        <p>inject.php line:39</p>
        <p>' or ''='</p>
        <p>' or 1=1; --&nbsp;</p>
        <p>' or 1=1; SELECT * FROM `sql_drop`; --&nbsp;</p>
        <p>only works if you have multi_query enable (which you should not by default)</p>
    </div>
</body>
</html>
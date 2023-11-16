<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>MySQL Example</h1>

<?php
    try {
        $mysqli = new mysqli("localhost", "USERNAME", "PASSWORD", "DATABASENAME");

        if($mysqli->connect_error) {
            // exit('Could not connect');
            // echo "failed!";
            throw new Exception('Could not connect');
        }
        // var_dump($mysqli);
        // echo "continue";
        $result = $mysqli->query("SELECT * FROM basic_demo");
        
        // echo "continue";
        while($row = $result->fetch_assoc()) {
            echo $row['ID'] . " " . $row['name'] . " " . $row['email'] . "<br>";
            // var_dump($row);
            // $results[] = $row;
        }
        // echo json_encode($results);

        $mysqli->close();

        $success = true;
    } catch(Exception $e) {
        // echo $e->getMessage();
        // echo "nothing found!";
        $success = false;
    } finally {
        echo $success ? "success!" : "failure!";
        // echo "finally";
        // echo "running finally regardless of success or failure";
    }
?>

<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis consequuntur modi maxime esse consequatur alias atque, qui corrupti ullam, ea praesentium fuga nisi sit magni ab cum, debitis itaque placeat.</p>
    
</body>
</html>
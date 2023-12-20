<style>
    .odd {
        background-color: #ddd;
    }
</style>
<p>
variables, data types, functions, arrays, loops, conditionals, outputting data
operators</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, expedita culpa? Aperiam, suscipit. Doloribus deserunt voluptatum autem asperiores repellendus, veritatis, deleniti tempora aliquid perspiciatis ipsa vitae aspernatur dolorum et sequi!</p>
<?php
    ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);

    $firstName = "peter";
    // echo "First Name: $firstName";
    $x = 14;
    $y = 2;
    
    // echo $x % $y;
    if ($x % $y) {
        echo "$x is Odd";
    } else {
        echo "$x is Even";
    }

    $sampleArray = array(1,2,3, "red", "yellow", "blue");
    print_r($sampleArray);
    echo "<br/>";

    for($i = 0; $i < 10; ++$i) {
        // $addOne = $i+1;
        // echo "index $i contains: $addOne<br/>";
    }
    
    $j = 0;
    while ($j < 10) {
        $addOne = ++$j;
        // echo "index $j contains: $addOne<br/>";
        // $j++;
    }

    for($i = 0; $i < count($sampleArray); $i++) {
        // echo "index $i contains: $sampleArray[$i]<br/>";
    }

    $balance = 10;

    function deposit($balance, $amount) {
        return $balance += $amount;
    }
    
    $balance = deposit($balance, 10);
    // echo $balance;

    function fname($param1, $param2) {
        return $param1 + $param2;
    }
    // echo $param1; - THIS IS BAD! No global access

    $ftest = fname(1,2);
    // echo $ftest;

    // for styling with %
    
?>

<?php
    $sampleArray = array(1,2,3, "red", "yellow", "blue");

    for($i = 0; $i < count($sampleArray); $i++) {
        $class = $i % 2 ? "even" : "odd";
        // echo $class;
        echo "<p class='$class'>index $i contains: $sampleArray[$i]</p>";
    }
?>

<?php
    $name = "peter";
    echo $name[2];
?>

<?php
    // create a function that checks if a word is a palindrome, using only basics
?>

<?php
    $expr = "jan";
    switch($expr) {
        case "jan":
            echo "january";
            break;
        case "dec":
            echo "december";
            break;
        default:
            echo "enjoy!";
            break;
    }
    for($i = 0; $i < 10; ++$i) {
        if($i % 2) {
            continue;
        }
        echo $i;
    }
?>

<?php
    // create a function that checks if a sentence is a palindrome, using only basics and continue and break, REMEMBER NO STRING FUNCTIONS!!
?>
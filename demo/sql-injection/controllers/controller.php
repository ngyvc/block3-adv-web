<?php
    if (isset($_GET['operation']) && ($_GET['operation'] == 'add')) {
        include_once('models/inject.php');
        $injection = new Injection($_POST['username'], $_POST['password']);
        $injection->add();
        echo '<div>' . $injection->getResults() . '</div>';
    } 
    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'signup') {
            include_once('views/signup.php');
        } else if ($_GET['page'] == 'results') {
            include_once('models/inject.php');
            $injection = new Injection($_POST['username'], $_POST['password']);
            echo '<div>' . $injection->getResults() . '</div>';
        } else if ($_GET['page'] == 'login') {
            include_once('views/login.php');
        } else {
            include_once('views/404.php');
        }
    } else {
        include_once('views/home.php');
    }
?>
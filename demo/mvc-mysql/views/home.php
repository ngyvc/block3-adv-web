<?php
if($users) {
    foreach($users as $user) {
        echo $user['ID'] . ' ' . $user['name'] . ' ' . $user['email'] . '<br>';
    }
} else {
    echo 'No users found';
}
?>
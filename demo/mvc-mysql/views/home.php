
    <form action="">
        <select name="" id="">
            <option value="">Select a user</option>
            
<?php
if($users) {
    foreach($users as $user) {
        echo "<option value=" .  $user['ID'] . ">" . $user['name'] . "</option>";
    }
} else {
    echo 'No users found';
}
?>
        </select>
    </form>
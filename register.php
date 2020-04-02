<?php
    $firstname = filter_input(INPUT_GET, 'firstname');

    if ($firstname != NULL) {
    session_start();
    $_SESSION["firstname"] = $firstname;
?>
Thank you for registering, <?php echo $firstname;?>!<br>
<a href="index.php">Click here</a> to view our vehicle list.
<?php
    } else {
?>
<form action="" method="GET">
    Please enter your first name:
    <input type="textarea" name="firstname">
    <input type="submit" value="Register">
</form>
<?php
    }
?>
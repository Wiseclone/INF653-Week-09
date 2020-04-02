<?php session_start() ?>
Thank you for signing out, <?php echo $_SESSION["firstname"]?>.<br>
<a href="index.php">Click here</a> to view our vehicle list.
<?php
    session_unset();
    session_destroy();
    setcookie("firstname","", time() - 100);
?>
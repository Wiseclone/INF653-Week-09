<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zippy Used Autos</title>
    <link rel="stylesheet" type="text/css" href="view/css/main.css" />
</head>

<!-- the body section -->
<body>
    <header>
        <?php session_start();
             if (isset($_SESSION["firstname"])) { ?>
            Welcome <?php echo $_SESSION["firstname"]; ?>! (<a href="logout.php">Sign Out</a>)
        <?php } else { ?>
            <a href='register.php'>Register</a>
        <?php } ?>
        <h1>Zippy Used Autos</h1>
    </header>
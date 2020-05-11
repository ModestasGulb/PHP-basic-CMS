<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/Style.css" rel="stylesheet">
    <title>PHP basic CMS</title>
</head>

<body>

    <?php
    
    require_once "cli-config.php";

    session_start();

    require_once "src/init.php";

    // Login, logout, back to admin forms
    require_once "includes/login_logout.php";

    // Navbar (menu)

    require_once "includes/navbar.php";



    // Page content

    require_once "includes/content.php";

    ?>



</body>

</html>
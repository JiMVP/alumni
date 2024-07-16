<?php
    include dirname(__DIR__)."/config.php";
    session_start();
    echo  $_SESSION['admin-branch'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/alumni/config.php" method="post">
        <input type="submit" name="admin-logout" value="Log Out">
    </form>
</body>
</html>
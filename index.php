<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="formInsert.php">Add</a>
    <a href="login.php">Login</a>
    <a href="formUpload.php">Upload</a>
    <form action="formEdit.php" method="post">
        <?php
        include_once "connect.php";
        $myconn = new Database();
        $myconn->connect();
        ?>
        <?php
        $myconn->show_information();
        ?>
    </form>
</body>

</html>
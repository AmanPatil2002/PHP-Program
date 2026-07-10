<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="7th.php" method="get">
    <label>username :</label><br>
    <input type="text" name="username"><br>
    <label>password :</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Log in">
    </form>
</body>
</html>
<?php
    echo $_GET["username"] . "<br>";
    echo "{$_GET["password"]} <br>";

    //$_GET, $_POST = special variables used to cllect data from an HTML fom
    //                data is sent to the file in the action attribute of <form>
    //                <form action="some_file.php" method="get">

    // $_GET = Data is appended to the url
    //         NOT Secure
    //         char limit
    //         Bookmark is possible w/ values
    //         GET requests can be cached
    //         Better for a search page
    
?>
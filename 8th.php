<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="8th.php" method="post">
    <label>username :</label><br>
    <input type="text" name="username"><br>
    <label>password :</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Log in">
    </form>
</body>
</html>
<?php
    echo $_POST["username"] . "<br>";
    echo "{$_POST["password"]} <br>";

    //$_GET, $_POST = special variables used to cllect data from an HTML fom
    //                data is sent to the file in the action attribute of <form>
    //                <form action="some_file.php" method="get">

    // $_POST = Data is packed inside the body of the HTML request
    //          MORE Secure
    //          No data limit
    //          Cannot bookmark
    //          GET requests are not cached
    //          Better for a submitting credentials

?>
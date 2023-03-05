<!DOCTYPE html>
<html>

<head>
    <title>Lab 7 Favorites</title>
    <h2>Session Variables</h2>
</head>

<?php
    session_start();
    echo "Full Name: " . $_SESSION["fullname"] . "<br>";
    echo "Course ID: " . $_SESSION["courseid"] . "<br>";
?>

<body>
    <h2>Cookies</h2>
</body>

<?php
    echo "Favorite Language: " . $_COOKIE["favlanguage"] . "<br>";
    echo "Favorite OS: " . $_COOKIE["favOS"];
?>

</html>
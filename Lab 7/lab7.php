<!DOCTYPE html>
<html>

<head>
    <title>Lab 7</title>
    <h1>Lab 7</h1>
</head>

<form action = "lab7favorites.php" method = "post">

<?php
    $sslangs = array("PHP", "ASP.NET", "Ruby", "Java", "Scala", "JavaScript", "Python");
    sort($sslangs);
    for ($x = 0; $x <= 6; $x++)
    {
        echo "$sslangs[$x] <br>";
    }

    echo nl2br("\n");

    $sslangUse['Python'] = "1.4";
    $sslangUse['ASP.NET'] = "8.3";
    $sslangUse['Ruby'] = "5.2";
    $sslangUse['PHP'] = "78.9";
    $sslangUse['Java'] = "3.6";
    $sslangUse['Scala'] = "2.0";
    arsort($sslangUse);
    foreach ($sslangUse as $y => $val)
    {
        echo "$y - $val% <br>";
    }

    session_start();
    $_SESSION["fullname"] = "Logan Gross";
    $_SESSION["courseid"] = "IT-2600";

    
    setcookie("favlanguage", "PHP", time() + (86400 * 30), "/");
    setcookie("favOS", "Windows", time() + (86400 * 30), "/");
?>

    <p>
        <input type = "submit" value = "See Session and Cookie Variables">
    </p>
</html>
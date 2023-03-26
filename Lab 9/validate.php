<?php
    $passw = $_POST['pwd'];
    echo "1. ";
    if (preg_match("/!/", $passw))
    {
        echo "Contains Invalid Character - !";
    }
    else if (preg_match("/^/", $passw))
    {
        echo "Contains Invalid Character - ^";
    }
    else
    {
        echo "Password Accepted";
    }

    echo "<br><br>";

    echo "2. ";
    $weatherdesc = $_POST['weather'];
    if (preg_match_all("/Snow/i", $weatherdesc))
    {
        echo "<i>Cold</i> - Wear a hat";
    }
    else if (preg_match_all("/Raining/i", $weatherdesc))
    {
        echo "<i>Raining</i> - Bring an umbrella";
    }
    else if (preg_match_all("/Sunny/i", $weatherdesc))
    {
        echo "<i>Sunny</i> - Wear sunscreen";
    }
    else
    {
        echo "Try Again!";
    }

    echo "<br><br>";

    echo "3. ";
    $seasonvote = $_POST['favseason'];
    $fallpattern = "/fall/i";
    $winterpattern = "/winter/i";
    $springpattern = "/spring/i";
    $summerpattern = "/summer/i";
    echo "Fall Votes: ";
    echo preg_match_all($fallpattern, $seasonvote);
    echo ", ";
    echo "Winter Votes: ";
    echo preg_match_all($winterpattern, $seasonvote);
    echo ", ";
    echo "Spring Votes: ";
    echo preg_match_all($springpattern, $seasonvote);
    echo ", and ";
    echo "Summer Votes: ";
    echo preg_match_all($summerpattern, $seasonvote);
    echo "<br><br>";

    echo "4. ";
    $numor = 20;
    $denom = 0;

    function divide($numor, $denom)
    {
        if ($denom == 0)
        {
            throw new Exception("Division by Zero");
        }
        return $numor / $denom;
    }

    try
    {
        echo divide($numor, $denom);
    }
    catch (Exception $e)
    {
        echo "Unable to Divide";
    }

?>  
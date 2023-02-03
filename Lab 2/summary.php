<?php
    $name = filter_input(INPUT_POST, 'name');
    $major = filter_input(INPUT_POST, 'major');
    $favLang = filter_input(INPUT_POST, 'fav_language');
    $othername = filter_input(INPUT_POST, 'othername');
?>

<!DOCTYPE html>
<html>

<head>
    <title> Summary </title>
</head>

<body>
    <main>
        <h1><u> Summary Information </u></h1>

        <h3><u> Name </u><br> <?php echo $name ?> </br></h3>

        <h3><u> Major </u><br> <?php echo $major ?> </br></h3>

        <h3><u> Favorite Web Language </u><br> <?php echo $favLang ?> </br></h3>

        <h3><u> Development Environment </u>
            <br>
            <?php
            if (isset($_POST['vscode']))
            {
                echo 'Visual Studio Code';
            }
            ?>

            <br>
            <?php       
            if (isset($_POST['brackets']))
            {
                echo 'Brackets';
            }
            ?>

            <br>
            <?php
            if (isset($_POST['other']))
            {
                echo $othername;
            }
            ?>

        </h3>
    </main>
</body>

</html>
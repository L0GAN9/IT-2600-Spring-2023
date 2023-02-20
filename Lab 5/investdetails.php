<!DOCTYPE html>
<html>
<head>
<title>Investment Calculator</title>
<style>
    td, th { text-align: right }
    td {padding:4px; width: 110px; }
    tr:nth-child(even) {background-color: #e5e5e5; }
    tr {border-bottom:1px solid #cccccc; }
    .year {width:30px;}
</style>
</head>

<body>
    <h1>Simple Investment Calculator</h1>
    <?php
    $answer = $_POST['addamount'];
    setlocale(LC_MONETARY,"en_US");
    $startamount = $_POST['amount'];

    // TODO: Study the following example reading in the value for the initial amount. Use this example to read in the other values in the next steps.
    $newamount = $_POST['amount'];

    // TODO: Read in the "rate" from the post. Assign it to $rate. 
    $rate = $_POST['rate'];

    // TODO: Read in the number of years "years". Create a new variable and assign the "years" value to it.
    $years = $_POST['years'];
    // TODO: Read in "extra" from the post. Create a new variable and assign the "extra" value to it.
    $extra = $_POST['extra'];
    // TODO: Read in "addamount" from the post. Create a new variable and assign the "addamount" value to it.
    $addamount = $_POST['addamount'];
    ?>

    <h3>Investment Details</h3>

    <?php
    // TODO: Display the values that you read in from above: amount, rate, years, addamount, and extra.
    echo "Amount: $startamount";
    ?><br>

    <?php
    echo ("Rate: $rate");
    ?><br>

    <?php
    echo ("Years: $years");
    ?><br>

    <?php
    echo ("Add Amount: $addamount");
    ?><br>

    <?php
    echo ("Extra: $extra");
    ?><br>

    <h3>Annual Schedule</h3>
        <table>
            <tr>
                <th>Year</th>
                <th>Start Amount</th>
                <th>Interest</th>
                <th>End Amount</th>
            
                <?php if ($answer == "Yes")
                { ?> 
                    <th>Extra</th>
                    <th>New Amount Plus Extra<th>
                <?php } ?>
            </tr>
            
    <?php
    // TODO: modify the loop, so it only loops for the number of years invested.
    for ($x=0; $x < $years; $x++)
    {   
        $interest = $newamount * ($rate/100);
        // TODO: if "addamount" is equal to "Yes", add the amount from "extra" to $newamount.
        if ($answer == 'Yes')
        {
        $newamount = $newamount + $extra;
        }
        $newamount = $newamount + $interest;
    }
    ?>

    <tr>
        <td class="year"><?php echo ($x); ?>
        <td><?php printf ( "$%.02f" , $startamount ); ?></td>
        <td><?php printf ( "$%.02f" , $interest ); ?></td>
        <td><?php printf ( "$%.02f" , $newamount ); ?></td>
        <!-- TODO: if "addamount is equal to "Yes", display two additional columns: the extra amount and the $newamount after adding the extra. -->
        <?php if ($answer == "Yes")
            { ?> 
                <td><?php printf ( "$%.02f" , $extra ); ?></td>
                <td><?php printf ( "$%.02f" , $newamount ); ?></td>
            <?php } ?>
    </tr>

    <?php
    // TODO: For 2 extra credit points: Add a summary that includes amount invested, total interest earned, total extra amount added, and the final amount.
    ?>
</body>
</html>
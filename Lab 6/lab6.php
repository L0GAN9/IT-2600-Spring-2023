<?php
$first = $_POST['first'];
$middle = $_POST['middle'];
$midInitial = substr($middle, 0, 1);
$last = $_POST['last'];
echo ucwords("$first $midInitial. $last");
echo nl2br("\n\n");

$str = $_POST['split'];
$output = explode('-', $str);
foreach ($output as $x)
{
    echo $x;
    echo '<br>';
}
echo nl2br("\n");

$shuffle = str_shuffle($_POST['shuffle']);
echo $shuffle;
echo nl2br("\n\n");

$tolower = strtolower($_POST['tolower']);
echo $tolower;
echo nl2br("\n\n");

$compare1 = $_POST['compare1'];
$compare2 = $_POST['compare2'];
echo strcmp($compare1, $compare2);
echo nl2br("\n");
echo strcasecmp($compare1, $compare2);
echo nl2br("\n\n");

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
echo max($num1, $num2);
echo nl2br("\n");
echo min($num1, $num2);
echo nl2br("\n");
$array = array($num1, $num2);
$average = array_sum($array) / count($array);
echo $average;
echo nl2br("\n\n");

echo rand(0, 100);
echo nl2br("\n\n");

$currency = $_POST['currency'];
$currOutput = sprintf('%0.2f', $currency);
echo "$$currOutput";
echo nl2br("\n\n");

$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];
$hour = $_POST['hour'];
$minute = $_POST['minute'];

echo date("$year-$month-$day | $hour:$minute");
echo nl2br("\n");
echo date("$month-$day-$year | $hour$minute");
echo nl2br("\n\n");

$date1 = date_create("2021-11-01");
$date2 = date_create("now");
$diff = date_diff($date1, $date2);
echo $diff->format("%H%a hours");
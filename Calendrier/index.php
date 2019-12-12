<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>"My Title"</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<?php
/*
 * Programme : Exo Php
 * Auteur : Thomas Grossmann
 * Date : 05.12.2019
 */
//$months = array("", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
$monthQS = $_GET['month'];
$yearQS = $_GET['year'];
$dateTab = array("Mo", "Tu", "We", "Th", "Fr", "Sa", "Su");
//$ts = date("Y-m-j", time());
//$date = date("n", $ts);
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    $ym = date('Y-m');
}
$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}
$today = date('Y-m-j', time());

$timestamp = strtotime($ym . '-01');
$prev = date('Y-m', strtotime('-1 month', $timestamp));
$next = date('Y-m', strtotime('+1 month', $timestamp));
$day_count = date('t', $timestamp);
$str = date('w', $timestamp);

switch ($monthQS){
    case 1:
        echo "<div class='month'><ul><li>Janvier<br>$yearQS</li></ul></div>";
        break;
    case 2:
        echo "<div class='month'><ul><li>Février<br>$yearQS</li></ul></div>";
        break;
    case 3:
        echo "<div class='month'><ul><li>Mars<br>$yearQS</li></ul></div>";
        break;
    case 4:
        echo "<div class='month'><ul><li>Avril<br>$yearQS</li></ul></div>";
        break;
    case 5:
        echo "<div class='month'><ul><li>Mai<br>$yearQS</li></ul></div>";
        break;
    case 6:
        echo "<div class='month'><ul><li>Juin<br>$yearQS</li></ul></div>";
        break;
    case 7:
        echo "<div class='month'><ul><li>Juillet<br>$yearQS</li></ul></div>";
        break;
    case 8:
        echo "<div class='month'><ul><li>Août<br>$yearQS</li></ul></div>";
        break;
    case 9:
        echo "<div class='month'><ul><li>Septembre<br>$yearQS</li></ul></div>";
        break;
    case 10:
        echo "<div class='month'><ul><li>Octobre<br>$yearQS</li></ul></div>";
        break;
    case 11:
        echo "<div class='month'><ul><li>Novembre<br>$yearQS</li></ul></div>";
        break;
    case 12:
        echo "<div class='month'><ul><li>Décembre<br>$yearQS</li></ul></div>";
        break;
}
//echo "<div class='month'><ul><li>$months[$monthQS]<br>$yearQS</li></ul></div>";
echo "<ul class='weekdays'>";
for ($i = 0; $i < 7; $i++){
    echo "<li>$dateTab[$i]</li>";
}
echo "</ul>";
echo "<ul class='days'>";
echo "<li>$next</li>";
for ($a = 1; $a <= $day_count; $str++){
    $date = $ym . '-' . $a;
    echo "<li>";
    if ($date == $today){
        echo "<span class='active'>";
    }
    echo "$a</li>";
    if ($str % 7 == 6 || $a == $day_count) {
        if ($a == $day_count) {
            echo "<li>$next</li>";
        }
    }
}
echo "</ul>";
?>
</body>
</html>

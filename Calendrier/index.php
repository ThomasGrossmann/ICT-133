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
$ts = time();
$date = date("N", $ts);

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
for ($a = 1; $a <= 31; $a++){
    echo "<li>";
    if ($date == $a){
        echo "<span class='active'>";
    }
    echo "$a</li>";
}
echo "</ul>";
?>
</body>
</html>
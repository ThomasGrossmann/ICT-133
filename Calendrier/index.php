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
$months = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
$monthQS = $_GET['months'];
$yearQS = $_GET['year'];
$dateTab = array("Mo", "Tu", "We", "Th", "Fr", "Sa", "Su");

echo "<div class='month'><ul><li>$monthQS<br>$yearQS</li></ul></div>";
echo "<ul class='weekdays'>";
for ($i = 0; $i < 7; $i++){
    echo "<li>$dateTab[$i]</li>";
}
echo "</ul>";
echo "<ul class='days'>";
for ($a = 1; $a < 12; $a++){
    echo "<li>$a</li>";
}
echo "</ul>";
?>
</body>
</html>

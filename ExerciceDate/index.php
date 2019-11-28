<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
/*
 * Programme : Exo Php
 * Auteur : Thomas Grossmann
 * Date : 21.11.2019
 */
date_default_timezone_set('Europe/Zurich');
$date = strtotime("Saturday Feb 18 2017 10:34:20");
echo "1) ".date("l d F Y")."<br>";
echo "2) ".date("M jS Y")."<br>";
echo "3) ".date("j/n/y G:i a")."<br>";
echo "4) ".date("j M Y, G:i:s")."<br>";
echo "5) ".date("r")."<br><br><br>";
echo "5Bis) ".date("D j M Y G:i:s", $date)."<br>";
?>

</body>
</html>

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
function PageCalendrier()
{
    $monthQS = $_GET["month"];
    $yearQS = $_GET["year"];
    $dateTab = array("Mo", "Tu", "We", "Th", "Fr", "Sa", "Su");
    $date = strtotime("$yearQS-$monthQS-1");
    $FirstDayCurrentMonth = date("N", strtotime("first day of this month", $date));
    $LastDayCurrentMonth = date("N", strtotime("last day of this month", $date));
    $prev = date("j", strtotime("last day of last month", $date));
    function getDaysBefore($prev, $FirstDayCurrentMonth)
    {
        for ($i = $prev - $FirstDayCurrentMonth + 2; $i <= $prev; $i++) {
            echo "<li><span class='prevnext'>$i</li>";
        }
    }
    function getDaysAfter($LastDayCurrentMonth)
    {
        for ($i = 1; $i <= 7 - $LastDayCurrentMonth; $i++) {
            echo "<li><span class='prevnext'>$i</li>";
        }
    }
    function Calendrier($date, $yearQS, $monthQS)
    {
        for ($a = 1; $a <= date("j", strtotime("last day of this month", $date)); $a++) {
            echo "<li>";
            if ($a == date("j", strtotime("now")) && $yearQS == date("Y",strtotime("now")) && $monthQS == date("m",strtotime("now"))) {
                echo "<span class='active'>";
            }
            echo "$a</li>";
        }
    }
    switch ($monthQS) {
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
    echo "<ul class='weekdays'>";
    for ($i = 0; $i < 7; $i++) {
        echo "<li>$dateTab[$i]</li>";
    }
    echo "</ul>";
    echo "<ul class='days'>";
    echo getDaysBefore($prev, $FirstDayCurrentMonth);
    echo Calendrier($date, $yearQS, $monthQS);
    echo getDaysAfter($LastDayCurrentMonth);
    echo "</ul>";
}
echo PageCalendrier();
?>
</body>
</html>

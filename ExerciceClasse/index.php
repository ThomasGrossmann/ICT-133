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
 * Date : 28.11.2019
 */
echo "<ul>";
for ($i = 1; $i < 9; $i++){
    switch ($i){
        case 1:
            echo "<li id=div$i>Fabien</li>";
            break;
        case 2:
            echo "<li id=div$i>David</li>";
            break;
        case 3:
            echo "<li id=div$i>Miguel</li>";
            break;
        case 4:
            echo "<li id=div$i>Benoît</li>";
            break;
        case 5:
            echo "<li id=div$i>Johnny</li>";
            break;
        case 6:
            echo "<li id=div$i>Kevin</li>";
            break;
        case 7:
            echo "<li id=div$i>Christopher</li>";
            break;
        case 8:
            echo "<li id=div$i>Dmitri</li>";
            break;
        case 9:
            echo "<li id=div$i>etc...</li>";
            break;
    }
}


echo "</ul>";
 ?>
</body>
</html>
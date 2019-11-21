<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
/*
 * Programme : Exercice Traduction
 * Auteur : Thomas Grossmann
 * Date : 21.11.2019
 */
//Partie 1
/*for ($i = 0; $i < 4; $i++){
    echo "nombre trop petit<br>";
}
$a = 29;
for ($i = 0; $i < 6; $i++){
    $a = $a + 3;
    echo "le nombre vaut $a<br>";
}*/

//Partie 2
$a = 5;
$c = 7;
$b = 32;
while($b != 50){
    if ($a != 1){
        echo "nombre trop petit<br>";
        $a--;
    } else {
        echo "le nombre vaut $b<br>";
        $b = $b + 3;
        $c--;
    }
}
?>

</body>
</html>



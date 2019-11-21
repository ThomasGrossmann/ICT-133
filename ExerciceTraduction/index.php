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
$a = 20;
$b = 3;
for ($i = 0; $i < 10; $i++){
    if ($a >= 30){
        echo "le nombre vaut $a<br>";
    } else {
        echo "nombre trop petit<br>";
    }
    $a = $a + $b;
}

//Partie 2
/*$a = 5;
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
}*/
?>

</body>
</html>



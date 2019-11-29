<HTML>
<HEAD>
    <link href="CSS\Puissance4.css" rel="stylesheet"/>
    <TITLE>Puissance 4</TITLE>
</HEAD>
<BODY style='background-color:#F0E0D0'>
<h1>Puissance 4</h1>
<table>
    <?php
    /*
     * Programme : Exo Php
     * Auteur : Thomas Grossmann
     * Date : 29.11.2019
     */
    for ($ligne = 0; $ligne < 8; $ligne++) {
        echo "<tr>";
        for ($col = 0; $col < 8; $col++) {
            if ($ligne == 7 && $col == 0) {
                echo "<td><img src='bleu.jpg'></td>";
            } else if ($ligne == 7 && $col == 6){
                echo "<td><img src='rouge.JPG'></td>";
            } else {
               echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
</BODY>
</HTML>


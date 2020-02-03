<?php
/*
 * Programme : Examen
 * Auteur : Thomas Grossmann
 * Date : 31.01.2020
 */

// tampon de flux stocké en mémoire
ob_start();
$title = "SchoolBook2Sell - Livres à disposition";

?>

    <div class="container">
        <div class="row">
            <div style="margin-top: 50px">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2>Livres à disposition</h2>
                        Voici les livres à vendre
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Quantité</th>
                                    <th>Titre</th>
                                    <th>Etat</th>
                                    <th>Prix à l'unité</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($books as $book)
                            {?>
                                <tr><td><?=$book['quantity']?></td><td><?=$book['title']?></td><td><?=$book['state']?></td><td><?=$book['price']?></td></tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
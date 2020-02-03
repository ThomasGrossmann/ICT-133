<?php
/*
 * Programme : Exo Php
 * Auteur : Thomas Grossmann
 * Date : 31.01.2020
 */

function getBooks()
{
    return json_decode(file_get_contents("model/data/books2sell.json"),true);
}
?>
<?php
/*
 * Programme : Examen
 * Auteur : Thomas Grossmann
 * Date : 31.01.2020
 */
session_start();
require "controler/controler.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $avatar = $_POST['avatar'];
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home':
            home();
            break;
        case 'books':
            books();
            break;
        case 'login':
            login();
            break;
        case 'connect':
            connect($username, $password, $avatar);      //Passe l'avatar, username et password en paramètres
            break;
        case 'deconnect':
            deconnect();
            break;
        default :
            home();
            break;
    }
}
else{
    home();
}
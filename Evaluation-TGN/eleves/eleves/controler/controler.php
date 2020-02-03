<?php
/*
 * Programme : Exo Php
 * Auteur : Thomas Grossmann
 * Date : 31.01.2020
 */
require_once 'model/model.php';

function home()
{
    require_once 'view/home.php';
}

function books()
{
    $books = getBooks();
    require_once 'view/books.php';
}

function login()
{
    require_once 'view/login.php';
}

function connect($username, $password, $avatar)
{
    if (isset($username) && isset($password)) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['avatar'] = $avatar;
        home();
    } else {
        login();
    }
}

function deconnect()
{
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['avatar']);
    login();
}
?>
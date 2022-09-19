<?php
function checkAuth(string $login, string $password)
{
    $users = require __DIR__ . '/usersArray.php';
    foreach ($users as $user) {
        if ($user['login'] === $login && $user["password"] === $password) {
            return true;
        }

    }
    return false;
}

function getUserLogin()
{
    $loginFromCookie = $_COOKIE['login'] ?? '';
    $passwordFromCookie = $_COOKIE['password'] ?? '';
    if (checkAuth($loginFromCookie, $passwordFromCookie)) {
        return $loginFromCookie;
    }
    return null;
}

function getRole(string $login)
{
    $users = require __DIR__ . '/usersArray.php';
    foreach ($users as $item) {
        if ($item['login'] === $login && $item["role"] === 'admin'){
            return 'admin';
        } else{
            return 'user';
        }
    }
}





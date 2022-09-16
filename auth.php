<?php
function login(string $username, string $password)
{
    $user = getUserByUsernameAndPassword($_POST['login'], $_POST['password']);
    if ($user === null) {
        return null;
    }
    $_SESSION['auth_user'] = $user;
    return $user;
}
function logout(): void
{
    $_SESSION['auth_user'] = null;
}
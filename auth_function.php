<?php
const USERS = [
    [
        'login' => 'user1',
        'password' => 'password123',
        'role' => 'admin',
        'personal_info' => [
            'phone' => '12423435',
            'email' => 'qqwqwq@mail.com'
        ]
    ],
    [
        'login' => 'user12',
        'password' => 'password123124234',
        'role' => 'user',
        'personal_info' => [
            'phone' => '000009999',
            'email' => 'qtttttt@mail.com'
        ]
    ],
];
function login($login, $password){
    foreach (USERS as $user) {
        if ($user['login'] == $login && $user['password'] == $password) {
//            session_start();
            $_SESSION['role'] = $user['role'];
            $_SESSION['auth'] = 1;
            return true;
        }

    }
}
function logout()
{
    if (isset($_SESSION['auth'])) {
        session_destroy();
    }
}
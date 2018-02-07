<form method="post">
    <input type="text" name="login" id="password" placeholder="login">
    <input type="password" name="password" id="password" placeholder="password">
    <input type="submit" value="Login">
</form>

<?php

$users = [
    'bart' => [
        'firstName' => 'Bart',
        'lastName' => 'Simpson',
        'password' => '12345'
    ],
    'homer' => [
        'firstName' => 'Homer',
        'lastName' => 'Simpson',
        'password' => 'donuts'
    ],
];

// check  if $_POST is not empty
if ($_POST) {
    // value of form login input
    $login = $_POST['login'];
    // value of form password input
    $password = $_POST['password'];

    // if $users[$login] exist
    if (
        isset($users[$login])
        && $users[$login]['password'] == $password
    ) {
        echo 'User found';
    } else {
        echo 'User not found or wrong password';
    }
}

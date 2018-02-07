<?php
session_start();

$user = [
  'john' => [
      'firstName' => 'blab',
      'lastName' => 'Dupont',
      'email' => 'email@gmail.com',
      'password' => 'azerty'
  ]
];

if (isset($_SESSION['user'])) {
    echo 'welcome '.$_SESSION['user']['firstName'];
    ?>
    <a href="logout.php">Logout</a>
<?php
} else {
    if ($_POST) {
        if (
            isset($user[$_POST['login']])
            && $_POST['password'] == $user[$_POST['login']]['password']
        ) {
            $_SESSION['user'] = $user[$_POST['login']];
        } else {
            echo 'wrong login or password';
        }
    }
    ?>
    <form method="post">
        <input type="text" name="login" id="password" placeholder="login">
        <input type="password" name="password" id="password" placeholder="password">
        <input type="submit" value="Login">
    </form>
<?php
}

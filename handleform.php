<?php 
session_start();

if (isset($_POST['submitBtn'])) {

    if (isset($_SESSION['firstName'])) {
        $_SESSION['loginWarning'] = $_SESSION['firstName'] . ' is already logged in. Wait for them to logout first.';
        unset($_SESSION['firstName']);
        unset($_SESSION['password']);
        header('Location: index.php');
        exit();
    }

    $firstName = $_POST['firstName'];
    $password = md5($_POST['password']); 

    $_SESSION['firstName'] = $firstName;
    $_SESSION['password'] = $password;
    $_SESSION['loginWarning'] = $loginWarning;

    header('Location: index.php');
}
?>
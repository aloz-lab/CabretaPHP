<?php
include('data.php');

// LOGIN METHOD
function login($form){
    if (!empty($form['password']) && !empty($form['username']) && $form['password'] === '1234') {
        $_SESSION['username'] = $form['username'];
        $_SESSION['isConnected'] = true;
        if ($_SESSION['isConnected'] === true) {
            header('Location: http://localhost:8000/pages/profile.php');
        }
    }
    if (!empty($form['password']) && $form['password'] !== '1234') {
        $errors['errorPassword'] = "** Votre mot de passe est incorrect **";
        echo $errors['errorPassword'];
        return $errors['errorPassword'];
    }
}

// LOGOUT METHOD
function logout(){
    unset($_SESSION['isConnected']);
    unset($_SESSION['username']);
    session_destroy();
}
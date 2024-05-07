<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/wise/app/controller/authenticationController.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['method']) && function_exists($_POST['method'])) {
    call_user_func($_POST['method']);
} else {
    echo 'Function not exists';
}

function login(){
    $auth = new authenticationController();
    echo $auth->login($_POST['email'], $_POST['password']);
}

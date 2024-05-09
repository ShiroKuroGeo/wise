<?php
session_start();

include('../../app/controller/admin/accountController.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['method']) && function_exists($_POST['method'])) {
    call_user_func($_POST['method']);
} else {
    echo 'Function not exists';
}

function getInformationOfAllUser()
{
    $admin = new accountController();
    echo $admin->getInformationOfAllUser();
}

function saveUser()
{
    $admin = new accountController();
    echo $admin->saveUser($_POST['fullname'], $_POST['email']);
}

function deleteAccount()
{
    $admin = new accountController();
    echo $admin->deleteAccount($_POST['id']);
}

function changeInformationAboutUser()
{
    $admin = new accountController();
    echo $admin->changeInformationAboutUser($_POST['upFullname'], $_POST['upUser_id'], $_POST['uppassword'],  $_POST['upEmail'], $_POST['upRole'], $_POST['upStatus']);
}
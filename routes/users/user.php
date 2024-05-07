<?php
session_start();

include('../../app/controller/usercontroller.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['method']) && function_exists($_POST['method'])) {
    call_user_func($_POST['method']);
} else {
    echo 'Function not exists';
}

function sendRequest()
{
    $admin = new usercontroller();
    $location = $_SERVER['DOCUMENT_ROOT'] . "/wise/assets/img/employeefiles/";
    $profiles = [];

    if (!empty($_FILES['pictures']['name'][0])) {
        foreach ($_FILES['pictures']['name'] as $key => $value) {
            $finalfile = $location . basename($_FILES['pictures']['name'][$key]);
            if (move_uploaded_file($_FILES['pictures']['tmp_name'][$key], $finalfile)) {
                $profiles[] = basename($_FILES['pictures']['name'][$key]);
            }
        }
    }

    echo $admin->sendRequest($_POST['department'], $_POST['name'], $_POST['email'], $_POST['concern'], $_POST['issue'], $_POST['assigned'], $_POST['priority'], $profiles);
}


function sendOrder()
{
    $admin = new usercontroller();
    $location = $_SERVER['DOCUMENT_ROOT'] . "/wise/assets/img/employeefiles/";
    $profiles = [];

    if (!empty($_FILES['pictures']['name'][0])) {
        foreach ($_FILES['pictures']['name'] as $key => $value) {
            $finalfile = $location . basename($_FILES['pictures']['name'][$key]);
            if (move_uploaded_file($_FILES['pictures']['tmp_name'][$key], $finalfile)) {
                $profiles[] = basename($_FILES['pictures']['name'][$key]);
            }
        }
    }
    echo $admin->sendOrder($_POST['department'], $_POST['name'], $_POST['email'], $_POST['deadline'], $_POST['message'], $_POST['assigned'], $_POST['priority'], $profiles);
}

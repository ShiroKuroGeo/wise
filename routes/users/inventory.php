<?php
session_start();

include('../../app/controller/inventoryController.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['method']) && function_exists($_POST['method'])) {
    call_user_func($_POST['method']);
} else {
    echo 'Function not exists';
}

function getAllInformationOfUser()
{
    $inv = new inventoryController();

    echo $inv->getAllInformationOfUser($_SESSION['user']);
}

function insertTask(){
    $inv = new inventoryController();

    echo $inv->insertTask($_POST['username'],$_POST['description'],$_POST['department'],$_POST['custodian'],$_POST['duedate'],$_POST['status']);
}

function getAllTask(){
    $inv = new inventoryController();

    echo $inv->getAllTask();
}

function updateStatus(){
    $inv = new inventoryController();

    echo $inv->updateStatus($_POST['id']);
}

function selectMonth(){
    $inv = new inventoryController();

    echo $inv->selectMonth($_POST['month'],$_POST['id']);
}

function getAllTaskForFive(){
    $inv = new inventoryController();

    echo $inv->getAllTaskForFive($_POST['user']);
}

<?php
session_start();

include('../../app/controller/admin/concernController.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['method']) && function_exists($_POST['method'])) {
    call_user_func($_POST['method']);
} else {
    echo 'Function not exists';
}

function getDepartmentOrder()
{
    $admin = new concernController();
    echo $admin->getDepartmentOrder($_POST['departmentId']);
}
function getDepartmentRequest()
{
    $admin = new concernController();
    echo $admin->getDepartmentRequest($_POST['departmentId']);
}
function pendingDoneRequest()
{
    $admin = new concernController();
    echo $admin->pendingDoneRequest($_POST['status'], $_POST['id']);
}
function pendingDoneOrder()
{
    $admin = new concernController();
    echo $admin->pendingDoneOrder($_POST['status'], $_POST['id']);
}
function getAllUserConcern()
{
    $admin = new concernController();
    echo $admin->getAllUserConcern($_POST['id']);
}
function getAllUserOrder()
{
    $admin = new concernController();
    echo $admin->getAllUserOrder($_POST['id']);
}

function getAllTheRequest()
{
    $admin = new concernController();
    echo $admin->getAllTheRequest($_POST['id']);
}
function getAllTheOrder()
{
    $admin = new concernController();
    echo $admin->getAllTheOrder($_POST['id']);
}

function getAllTotalRequest()
{
    $admin = new concernController();
    echo $admin->getAllTotalRequest();
}
function getAllTotalOrder()
{
    $admin = new concernController();
    echo $admin->getAllTotalOrder();
}
function getAllRequestPending()
{
    $admin = new concernController();
    echo $admin->getAllRequestPending();
}
function getAllOrderPending()
{
    $admin = new concernController();
    echo $admin->getAllOrderPending();
}
function getAllRequestDone()
{
    $admin = new concernController();
    echo $admin->getAllRequestDone();
}
function getAllOrderDone()
{
    $admin = new concernController();
    echo $admin->getAllOrderDone();
}

function getAllSearchedUserConcern()
{
    $admin = new concernController();
    echo $admin->getAllSearchedUserConcern($_POST['department'], $_POST['assigned'], $_POST['status'], $_POST['priority'], $_POST['month'], $_POST['year']);
}
function getAllSearchedUserJob()
{
    $admin = new concernController();
    echo $admin->getAllSearchedUserJob($_POST['department'], $_POST['assigned'], $_POST['status'], $_POST['priority'], $_POST['month'], $_POST['year']);
}
function addThisToAction()
{
    $admin = new concernController();
    echo $admin->addThisToAction($_POST['tableName'], $_POST['table_id'], $_POST['actionTaken'], $_POST['commentAction']);
}
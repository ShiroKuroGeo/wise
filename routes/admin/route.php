<?php
session_start();

include('../../app/controller/admin/dashboardController.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['method']) && function_exists($_POST['method'])) {
    call_user_func($_POST['method']);
} else {
    echo 'Function not exists';
}

function getAllOrders()
{
    $admin = new dashboardController();
    echo $admin->getAllOrders();
}

function getAllRequest()
{
    $admin = new dashboardController();
    echo $admin->getAllRequest();
}

function getTotalDailyPendingRequest()
{
    $admin = new dashboardController();
    echo $admin->getTotalDailyPendingRequest();
}

function getTotalDailyPendingOrder()
{
    $admin = new dashboardController();
    echo $admin->getTotalDailyPendingOrder();
}

function getTotalDailyDoneRequest()
{
    $admin = new dashboardController();
    echo $admin->getTotalDailyDoneRequest();
}

function getTotalDailyDoneOrder()
{
    $admin = new dashboardController();
    echo $admin->getTotalDailyDoneOrder();
}

function getTotalPendingAdmin()
{
    $admin = new dashboardController();
    echo $admin->getTotalPendingAdmin();
}

function getTotalPendingDocumentation()
{
    $admin = new dashboardController();
    echo $admin->getTotalPendingDocumentation();
}

function getTotalPendingHuman()
{
    $admin = new dashboardController();
    echo $admin->getTotalPendingHuman();
}

function getTotalPendingAccounting()
{
    $admin = new dashboardController();
    echo $admin->getTotalPendingAccounting();
}

function getTotalDoneAdmin()
{
    $admin = new dashboardController();
    echo $admin->getTotalDoneAdmin();
}

function getTotalDoneDocumentation()
{
    $admin = new dashboardController();
    echo $admin->getTotalDoneDocumentation();
}

function getTotalDoneHuman()
{
    $admin = new dashboardController();
    echo $admin->getTotalDoneHuman();
}

function getTotalDoneAccounting()
{
    $admin = new dashboardController();
    echo $admin->getTotalDoneAccounting();
}
function getTotalPendingAdminByMonth()
{
    $admin = new dashboardController();
    echo $admin->getTotalPendingAdminByMonth();
}
function getTotalPendingDocumentationByMonth()
{
    $admin = new dashboardController();
    echo $admin->getTotalPendingDocumentationByMonth();
}
function getTotalPendingHumanByMonth()
{
    $admin = new dashboardController();
    echo $admin->getTotalPendingHumanByMonth();
}
function getTotalPendingAccountingByMonth()
{
    $admin = new dashboardController();
    echo $admin->getTotalPendingAccountingByMonth();
}
function getTotalDoneAdminByMonth()
{
    $admin = new dashboardController();
    echo $admin->getTotalDoneAdminByMonth();
}
function getTotalDoneDocumentationByMonth()
{
    $admin = new dashboardController();
    echo $admin->getTotalDoneDocumentationByMonth();
}
function getTotalDoneHumanByMonth()
{
    $admin = new dashboardController();
    echo $admin->getTotalDoneHumanByMonth();
}
function getTotalDoneAccountingByMonth()
{
    $admin = new dashboardController();
    echo $admin->getTotalDoneAccountingByMonth();
}
function getTotalToChart()
{
    $admin = new dashboardController();
    echo $admin->getTotalToChart();
}
function resetSystem()
{
    $admin = new dashboardController();
    echo $admin->resetSystem();
}
function getAllToResetRequests(){
    $admin = new dashboardController();
    echo $admin->getAllToResetRequests();
}
function getAllToResetOrders(){
    $admin = new dashboardController();
    echo $admin->getAllToResetOrders();
}
function getAllToResetUsers(){
    $admin = new dashboardController();
    echo $admin->getAllToResetUsers();
}

function getTotalPendingSalesByDay(){
    $admin = new dashboardController();
    echo $admin->getTotalPendingSalesByDay();
}
function getTotalDoneSalesByDay(){
    $admin = new dashboardController();
    echo $admin->getTotalDoneSalesByDay();
}
function getTotalDoneSalesByMonth(){
    $admin = new dashboardController();
    echo $admin->getTotalDoneSalesByMonth();
}
function getTotalPendingSalesByMonth(){
    $admin = new dashboardController();
    echo $admin->getTotalPendingSalesByMonth();
}
function getAllYearLevel(){
    $admin = new dashboardController();
    echo $admin->getAllYearLevel();
}
function getAllDepartment(){
    $admin = new dashboardController();
    echo $admin->getAllDepartment();
}
function getAllAssigned(){
    $admin = new dashboardController();
    echo $admin->getAllAssigned();
}
function getAllPriority(){
    $admin = new dashboardController();
    echo $admin->getAllPriority();
}
function getAllMonth(){
    $admin = new dashboardController();
    echo $admin->getAllMonth();
}
function getTotalPendingMarketingByDay(){
    $admin = new dashboardController();
    echo $admin->getTotalPendingMarketingByDay();
}
function getTotalDoneMarketingByDay(){
    $admin = new dashboardController();
    echo $admin->getTotalDoneMarketingByDay();
}
function getTotalDoneMarketingByMonth(){
    $admin = new dashboardController();
    echo $admin->getTotalDoneMarketingByMonth();
}
function getTotalPendingMarketingByMonth(){
    $admin = new dashboardController();
    echo $admin->getTotalPendingMarketingByMonth();
}

function getRequestDelete(){
    $admin = new dashboardController();
    echo $admin->getRequestDelete($_POST['id']);
}
function getOrderDelete(){
    $admin = new dashboardController();
    echo $admin->getOrderDelete($_POST['id']);
}
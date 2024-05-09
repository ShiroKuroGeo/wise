<?php
class concern
{
    public function getDepartmentOrder()
    {
        return $this->getDepartmentOrderQuery();
    }
    public function getDepartmentRequest()
    {
        return $this->getDepartmentRequestQuery();
    }
    public function pendingDoneRequest()
    {
        return $this->pendingDoneRequestQuery();
    }
    public function pendingDoneOrder()
    {
        return $this->pendingDoneOrderQuery();
    }
    public function getAllUserConcern()
    {
        return $this->getAllUserConcernQuery();
    }
    public function getAllUserOrder()
    {
        return $this->getAllUserOrderQuery();
    }
    public function addThisToAction()
    {
        return $this->addThisToActionQuery();
    }
    public function getAllSearchedUserConcern()
    {
        return $this->getAllSearchedUserConcernQuery();
    }
    public function getAllSearchedUserJob()
    {
        return $this->getAllSearchedUserJobQuery();
    }
    public function getAllTheRequest()
    {
        return $this->getAllTheRequestQuery();
    }
    public function getAllTheOrder()
    {
        return $this->getAllTheOrderQuery();
    }

    public function getAllTotalRequest()
    {
        return $this->getAllTotalRequestQuery();
    }
    public function getAllTotalOrder()
    {
        return $this->getAllTotalOrderQuery();
    }

    private function getDepartmentOrderQuery()
    {
        return "SELECT * FROM `order` WHERE department = ? AND DAY(created_at) = DAY(CURRENT_DATE())";
    }

    private function getDepartmentRequestQuery()
    {
        return "SELECT * FROM `request` WHERE department = ? AND DAY(created_at) = DAY(CURRENT_DATE())";
    }//

    private function pendingDoneRequestQuery()
    {
        return "UPDATE `request` SET `status` = ? WHERE `request_id` = ?";
    }

    private function pendingDoneOrderQuery()
    {
        return "UPDATE `order` SET `status` = ? WHERE `order_id` = ?";
    }

    private function getAllUserConcernQuery(){
        return "SELECT * FROM `request` WHERE `request_id` = ?";
    }

    private function getAllUserOrderQuery(){
        return "SELECT * FROM `order` WHERE `order_id` = ?";
    }

    private function getAllSearchedUserConcernQuery(){
        return "SELECT * FROM `request` WHERE `department` = ? AND `assigned` = ? AND `status` = ? AND `priority` = ? AND MONTH(`created_at`) = ? AND YEAR(`created_at`) = ?";
    }
    private function getAllSearchedUserJobQuery(){
        return "SELECT * FROM `order` WHERE `department` = ? AND `assigned` = ? AND `status` = ? AND `priority` = ? AND MONTH(`created_at`) = ? AND YEAR(`created_at`) = ?";
    }
    private function addThisToActionQuery(){
        return "INSERT INTO `action`(`table_name`, `table_id`, `action_taken`, `comment_taken`) VALUES (?,?,?,?)";
    }
    private function getAllTheRequestQuery(){
        return "SELECT * FROM `action` WHERE `table_name` = 'Request' AND `table_id` = ?";
    }
    private function getAllTheOrderQuery(){
        return "SELECT * FROM `action` WHERE `table_name` = 'Order' AND `table_id` = ?";
    }

    private function getAllTotalRequestQuery(){
        return "SELECT * FROM `request` ORDER BY `created_at` ASC";
    }
    private function getAllTotalOrderQuery(){
        return "SELECT * FROM `order` ORDER BY `created_at` ASC";
    }
    
    public function returnValue($result){
        if($result > 0){
            return 200;
        }else{
            return 400;
        }
    }
}

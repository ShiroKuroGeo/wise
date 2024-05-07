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

    private function getDepartmentOrderQuery()
    {
        return "SELECT * FROM `order` WHERE department = ?";
    }

    private function getDepartmentRequestQuery()
    {
        return "SELECT * FROM `request` WHERE department = ?";
    }

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
    
    public function returnValue($result){
        if($result > 0){
            return 200;
        }else{
            return 400;
        }
    }
}

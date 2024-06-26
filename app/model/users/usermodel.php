<?php
class usermodel{
    public function sendRequest(){
        return $this->sendRequestQuery();
    }
    
    public function sendOrder(){
        return $this->sendOrderQuery();
    }
    
    public function verifyEmail(){
        return $this->verifyEmailQuery();
    }

    private function sendRequestQuery(){
        return "INSERT INTO `request`(`department`, `name`, `email`, `concern`, `issue`, `assigned`, `priority`, `attachment`) VALUES (?,?,?,?,?,?,?,?)";
    }

    private function sendOrderQuery(){
        return "INSERT INTO `order`(`department`, `name`, `email`, `deadline`, `description`, `assigned`, `priority`, `attachment`) VALUES (?,?,?,?,?,?,?,?)";
    }

    private function verifyEmailQuery(){
        return "SELECT * FROM `users` WHERE `email` = ?";
    }

    public function returnValue($result){
        if($result > 0){
            return 200;
        }else{
            return 400;
        }
    }
}
?>
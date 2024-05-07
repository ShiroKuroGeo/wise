<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/wise/database/configuration.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/wise/app/model/admin/account.php');
class accountController
{
    public function getInformationOfAllUser()
    {
       return $this->getInformationOfAllUserFunction();
    }
    
    public function saveUser($fullname, $email)
    {
       return $this->saveUserFunction($fullname, $email);
    }
    
    public function changeInformationAboutUser($upFullname, $upUser_id, $uppassword, $upEmail, $upRole, $upStatus)
    {
       return $this->changeInformationAboutUserFunction($upFullname, $upUser_id, $uppassword, $upEmail, $upRole, $upStatus);
    }
    
    private function getInformationOfAllUserFunction()
    {
        try {
            $database = new configuration();
            if($database->getStatus()){
                $getAllUser = new account();
                $stmt = $database->getConnection()->prepare($getAllUser->getInformationOfAllUser());
                $stmt->execute();

                $result = $stmt->fetchAll();

                return json_encode($result);
            }else{
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }
    
    private function saveUserFunction($fullname, $email)
    {
        try {
            $database = new configuration();
            if($database->getStatus()){
                $getAllUser = new account();
                $stmt = $database->getConnection()->prepare($getAllUser->saveUser());
                $stmt->execute(array($fullname, $email, md5('P@ssw0rd')));

                return $getAllUser->returnValue($stmt->rowCount());
            }else{
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }
    
    private function changeInformationAboutUserFunction($upFullname, $upUser_id, $uppassword, $upEmail, $upRole, $upStatus)
    {
        try {
            $database = new configuration();
            if($database->getStatus()){
                $getAllUser = new account();
                $stmt = $database->getConnection()->prepare($getAllUser->changeInformationAboutUser());
                $stmt->execute(array($upFullname, $upEmail, MD5($uppassword), $upRole, $upStatus, $upUser_id));

                return $getAllUser->returnValue($stmt->rowCount());
            }else{
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }
    
}

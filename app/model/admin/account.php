<?php

class account
{
    public function getInformationOfAllUser()
    {
        return $this->getInformationOfAllUserQuery();
    }

    public function saveUser()
    {
        return $this->saveUserQuery();
    }

    public function deleteAccount()
    {
        return $this->deleteAccountQuery();
    }

    public function changeInformationAboutUser()
    {
        return $this->changeInformationAboutUserQuery();
    }

    //Private
    private function getInformationOfAllUserQuery()
    {
        return "SELECT * FROM `users` ORDER BY `created_at` ASC ";
    }
    private function saveUserQuery()
    {
        return "INSERT INTO `users`(`fullname`, `email`, `password`) VALUES (?,?, ?)";
    }
    private function changeInformationAboutUserQuery()
    {
        return "UPDATE `users` SET `fullname`= ? ,`email`= ? ,`password`= ? ,`role`= ? ,`status`= ? WHERE `user_id` = ?";
    }
    private function deleteAccountQuery()
    {
        return "DELETE FROM `users` WHERE `user_id` = ?";
    }

    
    public function returnValue($result){
        if($result > 0){
            return 200;
        }else{
            return 400;
        }
    }

}
    
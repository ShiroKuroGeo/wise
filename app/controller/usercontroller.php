<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/wise/database/configuration.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/wise/app/model/users/usermodel.php');
class usercontroller
{
    public function sendRequest($department, $name, $email, $concern, $issue, $assigned, $priority, $attachment)
    {
       return $this->sendRequestFunction($department, $name, $email, $concern, $issue, $assigned, $priority, $attachment);
    }
    public function sendOrder($department, $name, $email, $deadline, $description, $assigned, $priority, $attachment)
    {
       return $this->sendOrderFunction($department, $name, $email, $deadline, $description, $assigned, $priority, $attachment);
    }
    public function verifyEmail($email){
        return $this->verifyEmailFunction($email);
    }

    private function sendRequestFunction($department, $name, $email, $concern, $issue, $assigned, $priority, $attachment)
    {
        try {
            $database = new configuration();
            if($database->getStatus()){
                $getAllUser = new usermodel();
                // $attachmentString = implode(',', $attachment);
                $attachmentJson = json_encode($attachment);
                $stmt = $database->getConnection()->prepare($getAllUser->sendRequest());
                $stmt->execute(array($department, $name, $email, $concern, $issue, $assigned, $priority, $attachmentJson));
                return $getAllUser->returnValue($stmt->rowCount());
            }else{
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }
    private function sendOrderFunction($department, $name, $email, $deadline, $description, $assigned, $priority, $attachment)
    {
        try {
            $database = new configuration();
            if($database->getStatus()){
                $getAllUser = new usermodel();
                $attachmentJson = json_encode($attachment);
                $stmt = $database->getConnection()->prepare($getAllUser->sendOrder());
                $stmt->execute(array($department, $name, $email, $deadline, $description, $assigned, $priority, $attachmentJson));
                return $getAllUser->returnValue($stmt->rowCount());
            }else{
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }

    private function verifyEmailFunction($email)
    {
        try {
            $database = new configuration();
            if($database->getStatus()){
                $getAllUser = new usermodel();
                $stmt = $database->getConnection()->prepare($getAllUser->verifyEmail());
                $stmt->execute(array($email));
                return $getAllUser->returnValue($stmt->rowCount());
            }else{
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }

}

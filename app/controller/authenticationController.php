<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/wise/database/configuration.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/wise/app/model/authentication.php');
class authenticationController
{

    public function login($username, $password)
    {
       return $this->loginFunction($username, $password);
    }

    private function loginFunction($username, $password)
    {
        try {
            $database = new configuration();
            if($database->getStatus()){
                $getAllUser = new authentication();
                $stmt = $database->getConnection()->prepare($getAllUser->login());
                $stmt->execute(array($username, md5($password)));
                $role = null;
                $status = null;
                
                while($row = $stmt->fetch()){
                    $role = $row['role'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['user'] = $row['user_id'];
                    $status = $row['status'];
                }

                if($status == 1){
                    return $role;
                }else{
                    return 201;
                }

            }else{
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }
}

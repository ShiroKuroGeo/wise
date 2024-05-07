<?php
include($_SERVER['DOCUMENT_ROOT'] . '/wise/database/configuration.php');
include($_SERVER['DOCUMENT_ROOT'] . '/wise/app/model/users/inventory.php');
class inventoryController
{
    public function getAllInformationOfUser($user_id)
    {
        return $this->getAllInformationOfUserFunction($user_id);
    }
    public function getAllTask()
    {
        return $this->getAllTaskFunction();
    }
    public function selectMonth($month, $id)
    {
        return $this->selectMonthFunction($month, $id);
    }
    public function updateStatus($id)
    {
        return $this->updateStatusFunction($id);
    }
    public function getAllTaskForFive($username)
    {
        return $this->getAllTaskForFiveFunction($username);
    }

    public function insertTask($username, $description, $department, $custodian, $duedate, $status)
    {
        return $this->insertTaskFunction($username, $description, $department, $custodian, $duedate, $status);
    }

    private function getAllInformationOfUserFunction($user_id)
    {
        try {
            $db = new configuration();
            if ($db->getStatus()) {
                $userInventory = new inventory();
                $stmt = $db->getConnection()->prepare($userInventory->getAllInformationOfUser());
                $stmt->execute(array($user_id));
                return json_encode($stmt->fetchAll());
            } else {
                return 501;
            }
        } catch (PDOException $th) {
            throw $th;
        }
    }

    private function getAllTaskForFiveFunction($username)
    {
        try {
            $db = new configuration();
            if ($db->getStatus()) {
                $userInventory = new inventory();
                $stmt = $db->getConnection()->prepare($userInventory->getAllTaskForFive());
                $stmt->execute(array($username));
                return json_encode($stmt->fetchAll());
            } else {
                return 501;
            }
        } catch (PDOException $th) {
            throw $th;
        }
    }

    private function insertTaskFunction($username, $description, $department, $custodian, $duedate, $status)
    {
        try {
            $db = new configuration();
            if ($db->getStatus()) {
                $userInventory = new inventory();
                $stmt = $db->getConnection()->prepare($userInventory->insertTask());
                $stmt->execute(array($username, $description, $department, $custodian, $duedate, $status));
                return $userInventory->returnValue($stmt->rowCount());
            } else {
                return 501;
            }
        } catch (PDOException $th) {
            throw $th;
        }
    }

    private function updateStatusFunction($id)
    {
        try {
            $db = new configuration();
            if ($db->getStatus()) {
                $userInventory = new inventory();
                $stmt = $db->getConnection()->prepare($userInventory->updateStatus());
                $stmt->execute(array($id));
                return $userInventory->returnValue($stmt->rowCount());
            } else {
                return 501;
            }
        } catch (PDOException $th) {
            throw $th;
        }
    }

    private function getAllTaskFunction()
    {
        try {
            $db = new configuration();
            if ($db->getStatus()) {
                $userInventory = new inventory();
                $stmt = $db->getConnection()->prepare($userInventory->getAllTask());
                $stmt->execute();
                return json_encode($stmt->fetchAll());
            } else {
                return 501;
            }
        } catch (PDOException $th) {
            throw $th;
        }
    }

    private function selectMonthFunction($month, $id)
    {
        try {
            $db = new configuration();
            if ($db->getStatus()) {
                $userInventory = new inventory();
                $stmt = $db->getConnection()->prepare($userInventory->selectMonth());
                $stmt->execute(array($month, $id));
                return json_encode($stmt->fetchAll());
            } else {
                return 501;
            }
        } catch (PDOException $th) {
            throw $th;
        }
    }
}

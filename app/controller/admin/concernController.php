<?php
include($_SERVER['DOCUMENT_ROOT'] . '/wise/database/configuration.php');
include($_SERVER['DOCUMENT_ROOT'] . '/wise/app/model/admin/concern.php');
class concernController
{
    public function getDepartmentOrder($departmentId)
    {
        return $this->getDepartmentOrderFunction($departmentId);
    }

    public function getDepartmentRequest($departmentId)
    {
        return $this->getDepartmentRequestFunction($departmentId);
    }

    public function pendingDoneRequest($status, $id)
    {
        return $this->pendingDoneRequestFunction($status, $id);
    }

    public function pendingDoneOrder($status, $id)
    {
        return $this->pendingDoneOrderFunction($status, $id);
    }

    public function getAllUserConcern($id)
    {
        return $this->getAllUserConcernFunction($id);
    }

    public function getAllUserOrder($id)
    {
        return $this->getAllUserOrderFunction($id);
    }

    public function getAllSearchedUserConcern($department, $assigned, $status, $priority, $month, $year)
    {
        return $this->getAllSearchedUserConcernFunction($department, $assigned, $status, $priority, $month, $year);
    }

    public function getAllSearchedUserJob($department, $assigned, $status, $priority, $month, $year)
    {
        return $this->getAllSearchedUserJobFunction($department, $assigned, $status, $priority, $month, $year);
    }

    private function getDepartmentOrderFunction($departmentId)
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new concern();
                $stmt = $database->getConnection()->prepare($getAllUser->getDepartmentOrder());
                $stmt->execute(array($departmentId));

                $result = $stmt->fetchAll();

                return json_encode($result);
            } else {
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }

    private function pendingDoneRequestFunction($status, $id)
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new concern();
                $stmt = $database->getConnection()->prepare($getAllUser->pendingDoneRequest());
                $stmt->execute(array($status, $id));
                return $getAllUser->returnValue($stmt->fetchAll());
            } else {
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }

    private function pendingDoneOrderFunction($status, $id)
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new concern();
                $stmt = $database->getConnection()->prepare($getAllUser->pendingDoneOrder());
                $stmt->execute(array($status, $id));
                return $getAllUser->returnValue($stmt->fetchAll());
            } else {
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }

    private function getDepartmentRequestFunction($departmentId)
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new concern();
                $stmt = $database->getConnection()->prepare($getAllUser->getDepartmentRequest());
                $stmt->execute(array($departmentId));

                $result = $stmt->fetchAll();

                return json_encode($result);
            } else {
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }

    private function getAllUserConcernFunction($id)
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new concern();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllUserConcern());
                $stmt->execute(array($id));

                $result = $stmt->fetchAll();

                return json_encode($result);
            } else {
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }

    private function getAllUserOrderFunction($id)
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new concern();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllUserOrder());
                $stmt->execute(array($id));

                $result = $stmt->fetchAll();

                return json_encode($result);
            } else {
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }
    
    private function getAllSearchedUserConcernFunction($department, $assigned, $status, $priority, $month, $year)
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new concern();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllSearchedUserConcern());
                $stmt->execute(array($department, $assigned, $status, $priority, $month, $year));

                $result = $stmt->fetchAll();

                return json_encode($result);
            } else {
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }

    private function getAllSearchedUserJobFunction($department, $assigned, $status, $priority, $month, $year)
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new concern();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllSearchedUserJob());
                $stmt->execute(array($department, $assigned, $status, $priority, $month, $year));

                $result = $stmt->fetchAll();

                return json_encode($result);
            } else {
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }
}

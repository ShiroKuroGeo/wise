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

    public function addThisToAction($tableName, $table_id, $actionTaken, $commentAction)
    {
        return $this->addThisToActionFunction($tableName, $table_id, $actionTaken, $commentAction);
    }

    public function getAllUserConcern($id)
    {
        return $this->getAllUserConcernFunction($id);
    }

    public function getAllUserOrder($id)
    {
        return $this->getAllUserOrderFunction($id);
    }

    public function getAllTheRequest($id)
    {
        return $this->getAllTheRequestFunction($id);
    }

    public function getAllTheOrder($id)
    {
        return $this->getAllTheOrderFunction($id);
    }

    public function getAllTotalRequest()
    {
        return $this->getAllTotalRequestFunction();
    }

    public function getAllTotalOrder()
    {
        return $this->getAllTotalOrderFunction();
    }

    public function getAllRequestPending()
    {
        return $this->getAllRequestPendingFunction();
    }

    public function getAllOrderPending()
    {
        return $this->getAllOrderPendingFunction();
    }

    public function getAllRequestDone()
    {
        return $this->getAllRequestDoneFunction();
    }

    public function getAllOrderDone()
    {
        return $this->getAllOrderDoneFunction();
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
    
    private function getAllTheRequestFunction($id)
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new concern();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllTheRequest());
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

    private function getAllTheOrderFunction($id)
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new concern();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllTheOrder());
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

    private function getAllTotalRequestFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new concern();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllTotalRequest());
                $stmt->execute();

                $result = $stmt->fetchAll();

                return json_encode($result);
            } else {
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }

    private function getAllTotalOrderFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new concern();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllTotalOrder());
                $stmt->execute();

                $result = $stmt->fetchAll();

                return json_encode($result);
            } else {
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }

    private function getAllRequestPendingFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new concern();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllRequestPending());
                $stmt->execute();

                $result = $stmt->fetchAll();

                return json_encode($result);
            } else {
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }

    private function getAllOrderPendingFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new concern();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllOrderPending());
                $stmt->execute();

                $result = $stmt->fetchAll();

                return json_encode($result);
            } else {
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }

    private function getAllRequestDoneFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new concern();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllRequestDone());
                $stmt->execute();

                $result = $stmt->fetchAll();

                return json_encode($result);
            } else {
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }

    private function getAllOrderDoneFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new concern();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllOrderDone());
                $stmt->execute();

                $result = $stmt->fetchAll();

                return json_encode($result);
            } else {
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }

    private function addThisToActionFunction($tableName, $table_id, $actionTaken, $commentAction)
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new concern();
                $stmt = $database->getConnection()->prepare($getAllUser->addThisToAction());
                $stmt->execute(array($tableName, $table_id, $actionTaken, $commentAction));
                return $getAllUser->returnValue($stmt->rowCount());
            } else {
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }
}

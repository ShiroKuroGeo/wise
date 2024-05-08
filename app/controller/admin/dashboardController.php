<?php
include($_SERVER['DOCUMENT_ROOT'] . '/wise/database/configuration.php');
include($_SERVER['DOCUMENT_ROOT'] . '/wise/app/model/admin/dashboard.php');
class dashboardController
{
    public function getTotalPendingAdminByMonth()
    {
        return $this->getTotalPendingAdminByMonthFunction();
    }
    public function getAllYearLevel(){
        return $this->getAllYearLevelFunction();
    }
    public function getTotalPendingDocumentationByMonth()
    {
        return $this->getTotalPendingDocumentationByMonthFunction();
    }
    public function getTotalPendingHumanByMonth()
    {
        return $this->getTotalPendingHumanByMonthFunction();
    }
    public function getTotalPendingAccountingByMonth()
    {
        return $this->getTotalPendingAccountingByMonthFunction();
    }
    public function getTotalDoneAdminByMonth()
    {
        return $this->getTotalDoneAdminByMonthFunction();
    }
    public function getTotalDoneDocumentationByMonth()
    {
        return $this->getTotalDoneDocumentationByMonthFunction();
    }
    public function getTotalDoneHumanByMonth()
    {
        return $this->getTotalDoneHumanByMonthFunction();
    }
    public function getTotalDoneAccountingByMonth()
    {
        return $this->getTotalDoneAccountingByMonthFunction();
    }
    public function getAllOrders()
    {
        return $this->getAllOrdersFunction();
    }
    public function getAllRequest()
    {
        return $this->getAllRequestFunction();
    }
    public function getTotalDailyPendingRequest()
    {
        return $this->getTotalDailyPendingRequestFunction();
    }
    public function getTotalDailyPendingOrder()
    {
        return $this->getTotalDailyPendingOrderFunction();
    }
    public function getTotalDailyDoneRequest()
    {
        return $this->getTotalDailyDoneRequestFunction();
    }
    public function getTotalPendingAdmin()
    {
        return $this->getTotalPendingAdminFunction();
    }
    public function getTotalPendingDocumentation()
    {
        return $this->getTotalPendingDocumentationFunction();
    }
    public function getTotalPendingHuman()
    {
        return $this->getTotalPendingHumanFunction();
    }
    public function getTotalPendingAccounting()
    {
        return $this->getTotalPendingAccountingFunction();
    }
    public function getTotalDoneAdmin()
    {
        return $this->getTotalDoneAdminFunction();
    }
    public function getTotalDoneDocumentation()
    {
        return $this->getTotalDoneDocumentationFunction();
    }
    public function getTotalDoneHuman()
    {
        return $this->getTotalDoneHumanFunction();
    }
    public function getTotalDoneAccounting()
    {
        return $this->getTotalDoneAccountingFunction();
    }
    public function getTotalDailyDoneOrder()
    {
        return $this->getTotalDailyDoneOrderFunction();
    }
    public function getTotalToChart()
    {
        return $this->getTotalToChartFunction();
    }
    public function resetSystem()
    {
        return $this->resetSystemFunction();
    }
    public function getAllToResetRequests()
    {
        return $this->getAllToResetRequestsFunction();
    }
    public function getAllToResetOrders()
    {
        return $this->getAllToResetOrdersFunction();
    }
    public function getAllToResetUsers()
    {
        return $this->getAllToResetUsersFunction();
    }
    public function getTotalPendingSalesByDay()
    {
        return $this->getTotalPendingSalesByDayFunction();
    }
    public function getTotalDoneSalesByDay()
    {
        return $this->getTotalDoneSalesByDayFunction();
    }
    public function getTotalDoneSalesByMonth()
    {
        return $this->getTotalDoneSalesByMonthFunction();
    }
    public function getTotalPendingSalesByMonth()
    {
        return $this->getTotalPendingSalesByMonthFunction();
    }
    public function getAllDepartment()
    {
        return $this->getAllDepartmentFunction();
    }
    public function getAllAssigned()
    {
        return $this->getAllAssignedFunction();
    }
    public function getAllPriority()
    {
        return $this->getAllPriorityFunction();
    }
    public function getAllMonth()
    {
        return $this->getAllMonthFunction();
    }



    private function getAllOrdersFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllOrders());
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

    private function getAllYearLevelFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllYearLevel());
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

    private function getAllDepartmentFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllDepartment());
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

    private function getAllRequestFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllRequest());
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

    private function getTotalDailyPendingRequestFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalDailyPendingRequest());
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

    private function getTotalDailyPendingOrderFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalDailyPendingOrder());
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

    private function getTotalDailyDoneRequestFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalDailyDoneRequest());
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

    private function getTotalDailyDoneOrderFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalDailyDoneOrder());
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

    //Start of Model
    private function getTotalPendingAdminFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalPendingAdmin());
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
    private function getTotalPendingDocumentationFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalPendingDocumentation());
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
    private function getTotalPendingHumanFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalPendingHuman());
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
    private function getTotalPendingAccountingFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalPendingAccounting());
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
    private function getTotalDoneAdminFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalDoneAdmin());
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
    private function getTotalDoneDocumentationFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalDoneDocumentation());
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
    private function getTotalDoneHumanFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalDoneHuman());
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
    private function getTotalDoneAccountingFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalDoneAccounting());
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

    private function getTotalPendingAdminByMonthFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalPendingAdminByMonth());
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
    private function getTotalPendingDocumentationByMonthFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalPendingDocumentationByMonth());
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
    private function getTotalPendingHumanByMonthFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalPendingHumanByMonth());
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
    private function getTotalPendingAccountingByMonthFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalPendingAccountingByMonth());
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
    private function getTotalDoneAdminByMonthFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalDoneAdminByMonth());
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
    private function getTotalDoneDocumentationByMonthFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalDoneDocumentationByMonth());
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
    private function getTotalDoneHumanByMonthFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalDoneHumanByMonth());
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
    private function getTotalDoneAccountingByMonthFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalDoneAccountingByMonth());
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

    private function getTotalToChartFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalToChart());
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

    private function getAllToResetRequestsFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllToResetRequests());
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

    private function getAllToResetOrdersFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllToResetOrders());
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

    private function getAllToResetUsersFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllToResetUsers());
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

    private function resetSystemFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->resetSystem());
                $stmt->execute();

                $result = $stmt->fetchAll();

                if (!$result) {
                    return 200;
                } else {
                    return 400;
                }
            } else {
                return 400;
            }
        } catch (PDOException $th) {
            echo $th;
        }
    }

    private function getTotalPendingSalesByDayFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalPendingSalesByDay());
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

    private function getTotalDoneSalesByDayFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalDoneSalesByDay());
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

    private function getTotalDoneSalesByMonthFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalDoneSalesByMonth());
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

    private function getTotalPendingSalesByMonthFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getTotalPendingSalesByMonth());
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

    private function getAllAssignedFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllAssigned());
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

    private function getAllPriorityFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllPriority());
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

    private function getAllMonthFunction()
    {
        try {
            $database = new configuration();
            if ($database->getStatus()) {
                $getAllUser = new dashboard();
                $stmt = $database->getConnection()->prepare($getAllUser->getAllMonth());
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
}

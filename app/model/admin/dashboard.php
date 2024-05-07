<?php

class dashboard
{
    public function getAllOrders()
    {
        return $this->getAllOrdersQuery();
    }

    public function getTotalDailyPendingRequest()
    {
        return $this->getTotalDailyPendingRequestQuery();
    }

    public function getTotalDailyPendingOrder()
    {
        return $this->getTotalDailyPendingOrderQuery();
    }

    public function getTotalDailyDoneRequest()
    {
        return $this->getTotalDailyDoneRequestQuery();
    }

    public function getTotalDailyDoneOrder()
    {
        return $this->getTotalDailyDoneOrderQuery();
    }

    public function getAllRequest()
    {
        return $this->getAllRequestQuery();
    }

    public function getTotalPendingAdmin()
    {
        return $this->getTotalPendingAdminByDayQuery();
    }

    public function getTotalPendingDocumentation()
    {
        return $this->getTotalPendingDocumentationByDayQuery();
    }

    public function getTotalPendingHuman()
    {
        return $this->getTotalPendingHumanByDayQuery();
    }

    public function getTotalPendingAccounting()
    {
        return $this->getTotalPendingAccountingByDayQuery();
    }

    public function getTotalDoneAdmin()
    {
        return $this->getTotalDoneAdminByDayQuery();
    }

    public function getTotalDoneDocumentation()
    {
        return $this->getTotalDoneDocumentationByDayQuery();
    }

    public function getTotalDoneHuman()
    {
        return $this->getTotalDoneHumanByDayQuery();
    }

    public function getTotalDoneAccounting()
    {
        return $this->getTotalDoneAccountingByDayQuery();
    }

    public function getTotalPendingAdminByMonth()
    {
        return $this->getTotalPendingAdminByMonthQuery();
    }

    public function getTotalPendingDocumentationByMonth()
    {
        return $this->getTotalPendingDocumentationByMonthQuery();
    }

    public function getTotalPendingHumanByMonth()
    {
        return $this->getTotalPendingHumanByMonthQuery();
    }

    public function getTotalPendingAccountingByMonth()
    {
        return $this->getTotalPendingAccountingByMonthQuery();
    }

    public function getTotalDoneAdminByMonth()
    {
        return $this->getTotalDoneAdminByMonthQuery();
    }

    public function getTotalDoneDocumentationByMonth()
    {
        return $this->getTotalDoneDocumentationByMonthQuery();
    }

    public function getTotalDoneHumanByMonth()
    {
        return $this->getTotalDoneHumanByMonthQuery();
    }

    public function getTotalDoneAccountingByMonth()
    {
        return $this->getTotalDoneAccountingByMonthQuery();
    }

    public function getTotalToChart()
    {
        return $this->getTotalToChartQuery();
    }

    public function resetSystem()
    {
        return $this->resetSystemQuery();
    }

    public function getAllToResetRequests()
    {
        return $this->getAllToResetRequestsQuery();
    }

    public function getAllToResetOrders()
    {
        return $this->getAllToResetOrdersQuery();
    }

    public function getAllToResetUsers()
    {
        return $this->getAllToResetUsersQuery();
    }

    public function getTotalPendingSalesByDay()
    {
        return $this->getTotalPendingSalesByDayQuery();
    }

    public function getTotalDoneSalesByDay()
    {
        return $this->getTotalDoneSalesByDayQuery();
    }

    public function getTotalDoneSalesByMonth()
    {
        return $this->getTotalDoneSalesByMonthQuery();
    }

    public function getTotalPendingSalesByMonth()
    {
        return $this->getTotalPendingSalesByMonthQuery();
    }

    //Private
    private function getAllOrdersQuery()
    {
        return "SELECT * FROM `order`";
    }

    private function getAllRequestQuery()
    {
        return "SELECT * FROM `request`";
    }


    private function getTotalDailyPendingRequestQuery()
    {
        return "SELECT * FROM `request` WHERE `status` = 0 AND MONTH(created_at) = MONTH(CURRENT_DATE());";
    }

    private function getTotalDailyPendingOrderQuery()
    {
        return "SELECT * FROM `order` WHERE `status` = 0 AND MONTH(created_at) = MONTH(CURRENT_DATE());";
    }

    private function getTotalDailyDoneRequestQuery()
    {
        return "SELECT * FROM `request` WHERE `status` = 1 AND MONTH(created_at) = MONTH(CURRENT_DATE());";
    }

    private function getTotalDailyDoneOrderQuery()
    {
        return "SELECT * FROM `order` WHERE `status` = 1 AND MONTH(created_at) = MONTH(CURRENT_DATE());";
    }

    private function getTotalPendingAdminByDayQuery()
    {
        return "SELECT SUM(pendingStatus) as pendingStatus 
        FROM (
            SELECT COUNT(*) AS pendingStatus FROM request WHERE status = 0 AND department = 'Admin Department' AND DAY(created_at) = DAY(CURRENT_DATE())
            UNION ALL
            SELECT COUNT(*) FROM `order` WHERE status = 0 AND department = 'Admin Department' AND DAY(created_at) = DAY(CURRENT_DATE())
        ) AS addedStatus;";
    }

    private function getTotalPendingDocumentationByDayQuery()
    {
        return "SELECT SUM(pendingStatus) as pendingStatus 
        FROM (
            SELECT COUNT(*) AS pendingStatus FROM request WHERE status = 0 AND department = 'Documents Department' AND DAY(created_at) = DAY(CURRENT_DATE())
            UNION ALL
            SELECT COUNT(*) FROM `order` WHERE status = 0 AND department = 'Documents Department' AND DAY(created_at) = DAY(CURRENT_DATE())
        ) AS addedStatus;";
    }

    private function getTotalPendingHumanByDayQuery()
    {
        return "SELECT SUM(pendingStatus) as pendingStatus 
        FROM (
            SELECT COUNT(*) AS pendingStatus FROM request WHERE status = 0 AND department = 'Human Resource Department' AND DAY(created_at) = DAY(CURRENT_DATE())
            UNION ALL
            SELECT COUNT(*) FROM `order` WHERE status = 0 AND department = 'Human Resource Department' AND DAY(created_at) = DAY(CURRENT_DATE())
        ) AS addedStatus;";
    }

    private function getTotalPendingAccountingByDayQuery()
    {
        return "SELECT SUM(pendingStatus) as pendingStatus 
        FROM (
            SELECT COUNT(*) AS pendingStatus FROM request WHERE status = 0 AND department = 'Accounting Department' AND DAY(created_at) = DAY(CURRENT_DATE())
            UNION ALL
            SELECT COUNT(*) FROM `order` WHERE status = 0 AND department = 'Accounting Department' AND DAY(created_at) = DAY(CURRENT_DATE())
        ) AS addedStatus;";
    }

    private function getTotalDoneAdminByDayQuery()
    {
        return "SELECT SUM(pendingStatus) as pendingStatus 
        FROM (
            SELECT COUNT(*) AS pendingStatus FROM request WHERE status = 1 AND department = 'Admin Department' AND DAY(created_at) = DAY(CURRENT_DATE())
            UNION ALL
            SELECT COUNT(*) FROM `order` WHERE status = 1 AND department = 'Admin Department' AND DAY(created_at) = DAY(CURRENT_DATE())
        ) AS addedStatus;";
    }

    private function getTotalDoneDocumentationByDayQuery()
    {
        return "SELECT SUM(pendingStatus) as pendingStatus 
        FROM (
            SELECT COUNT(*) AS pendingStatus FROM request WHERE status = 1 AND department = 'Documents Department' AND DAY(created_at) = DAY(CURRENT_DATE())
            UNION ALL
            SELECT COUNT(*) FROM `order` WHERE status = 1 AND department = 'Documents Department' AND DAY(created_at) = DAY(CURRENT_DATE())
        ) AS addedStatus;";
    }

    private function getTotalDoneHumanByDayQuery()
    {
        return "SELECT SUM(pendingStatus) as pendingStatus 
        FROM (
            SELECT COUNT(*) AS pendingStatus FROM request WHERE status = 1 AND department = 'Human Resource Department' AND DAY(created_at) = DAY(CURRENT_DATE())
            UNION ALL
            SELECT COUNT(*) FROM `order` WHERE status = 1 AND department = 'Human Resource Department' AND DAY(created_at) = DAY(CURRENT_DATE())
        ) AS addedStatus;";
    }

    private function getTotalDoneAccountingByDayQuery()
    {
        return "SELECT SUM(pendingStatus) as pendingStatus 
        FROM (
            SELECT COUNT(*) AS pendingStatus FROM request WHERE status = 1 AND department = 'Accounting Department' AND DAY(created_at) = DAY(CURRENT_DATE())
            UNION ALL
            SELECT COUNT(*) FROM `order` WHERE status = 1 AND department = 'Accounting Department' AND DAY(created_at) = DAY(CURRENT_DATE())
        ) AS addedStatus;";
    }

    private function getTotalPendingAdminByMonthQuery()
    {
        return "SELECT SUM(pendingStatus) as pendingStatus 
        FROM (
            SELECT COUNT(*) AS pendingStatus FROM request WHERE status = 0 AND department = 'Admin Department' AND MONTH(created_at) = MONTH(CURRENT_DATE())
            UNION ALL
            SELECT COUNT(*) FROM `order` WHERE status = 0 AND department = 'Admin Department' AND MONTH(created_at) = MONTH(CURRENT_DATE())
        ) AS addedStatus;";
    }

    private function getTotalPendingDocumentationByMonthQuery()
    {
        return "SELECT SUM(pendingStatus) as pendingStatus 
        FROM (
            SELECT COUNT(*) AS pendingStatus FROM request WHERE status = 0 AND department = 'Documents Department' AND MONTH(created_at) = MONTH(CURRENT_DATE())
            UNION ALL
            SELECT COUNT(*) FROM `order` WHERE status = 0 AND department = 'Documents Department' AND MONTH(created_at) = MONTH(CURRENT_DATE())
        ) AS addedStatus;";
    }

    private function getTotalPendingHumanByMonthQuery()
    {
        return "SELECT SUM(pendingStatus) as pendingStatus 
        FROM (
            SELECT COUNT(*) AS pendingStatus FROM request WHERE status = 0 AND department = 'Human Resource Department' AND MONTH(created_at) = MONTH(CURRENT_DATE())
            UNION ALL
            SELECT COUNT(*) FROM `order` WHERE status = 0 AND department = 'Human Resource Department' AND MONTH(created_at) = MONTH(CURRENT_DATE())
        ) AS addedStatus;";
    }

    private function getTotalPendingAccountingByMonthQuery()
    {
        return "SELECT SUM(pendingStatus) as pendingStatus 
        FROM (
            SELECT COUNT(*) AS pendingStatus FROM request WHERE status = 0 AND department = 'Accounting Department' AND MONTH(created_at) = MONTH(CURRENT_DATE())
            UNION ALL
            SELECT COUNT(*) FROM `order` WHERE status = 0 AND department = 'Accounting Department' AND MONTH(created_at) = MONTH(CURRENT_DATE())
        ) AS addedStatus;";
    }

    private function getTotalDoneAdminByMonthQuery()
    {
        return "SELECT SUM(pendingStatus) as pendingStatus 
        FROM (
            SELECT COUNT(*) AS pendingStatus FROM request WHERE status = 1 AND department = 'Admin Department' AND MONTH(created_at) = MONTH(CURRENT_DATE())
            UNION ALL
            SELECT COUNT(*) FROM `order` WHERE status = 1 AND department = 'Admin Department' AND MONTH(created_at) = MONTH(CURRENT_DATE())
        ) AS addedStatus;";
    }

    private function getTotalDoneDocumentationByMonthQuery()
    {
        return "SELECT SUM(pendingStatus) as pendingStatus 
        FROM (
            SELECT COUNT(*) AS pendingStatus FROM request WHERE status = 1 AND department = 'Documents Department' AND MONTH(created_at) = MONTH(CURRENT_DATE())
            UNION ALL
            SELECT COUNT(*) FROM `order` WHERE status = 1 AND department = 'Documents Department' AND MONTH(created_at) = MONTH(CURRENT_DATE())
        ) AS addedStatus;";
    }

    private function getTotalDoneHumanByMonthQuery()
    {
        return "SELECT SUM(pendingStatus) as pendingStatus 
        FROM (
            SELECT COUNT(*) AS pendingStatus FROM request WHERE status = 1 AND department = 'Human Resource Department' AND MONTH(created_at) = MONTH(CURRENT_DATE())
            UNION ALL
            SELECT COUNT(*) FROM `order` WHERE status = 1 AND department = 'Human Resource Department' AND MONTH(created_at) = MONTH(CURRENT_DATE())
        ) AS addedStatus;";
    }

    private function getTotalDoneAccountingByMonthQuery()
    {
        return "SELECT SUM(pendingStatus) as pendingStatus 
        FROM (
            SELECT COUNT(*) AS pendingStatus FROM request WHERE status = 1 AND department = 'Accounting Department' AND MONTH(created_at) = MONTH(CURRENT_DATE())
            UNION ALL
            SELECT COUNT(*) FROM `order` WHERE status = 1 AND department = 'Accounting Department' AND MONTH(created_at) = MONTH(CURRENT_DATE())
        ) AS addedStatus;";
    }

    private function getTotalToChartQuery()
    {
        return "SELECT 'Pending' as label, COUNT(*) as count 
        FROM ( 
            SELECT * FROM `request` 
            UNION ALL
            SELECT * FROM `order` 
        ) AS combined_requests_order WHERE DAY(`created_at`) = DAY(CURRENT_DATE()) AND `status` = 0 
            UNION ALL
            SELECT 'Done' as label, COUNT(*) as count 
        FROM ( 
            SELECT * FROM `request` 
            UNION ALL
            SELECT * FROM `order` 
        ) AS combined_request_order WHERE DAY(`created_at`) = DAY(CURRENT_DATE()) AND status = 1;";
    }

    private function resetSystemQuery()
    {
        return "TRUNCATE `users`;
        TRUNCATE `request`;
        TRUNCATE `order`;
        INSERT INTO `users`(`fullname`,`email`,`password`,`role`) VALUES('Administrator','admin@wise.com','161ebd7d45089b3446ee4e0d86dbcf92', 1);";
    }

    private function getTotalPendingSalesByDayQuery()
    {
        return "SELECT SUM(pendingStatus) as pendingStatus 
        FROM (
            SELECT COUNT(*) AS pendingStatus FROM request WHERE status = 0 AND department = 'Sales Department' AND DAY(created_at) = DAY(CURRENT_DATE())
            UNION ALL
            SELECT COUNT(*) FROM `order` WHERE status = 0 AND department = 'Sales Department' AND DAY(created_at) = DAY(CURRENT_DATE())
        ) AS addedStatus;";
    }

    private function getTotalDoneSalesByDayQuery()
    {
        return "SELECT SUM(pendingStatus) as pendingStatus 
        FROM (
            SELECT COUNT(*) AS pendingStatus FROM request WHERE status = 1 AND department = 'Sales Department' AND DAY(created_at) = DAY(CURRENT_DATE())
            UNION ALL
            SELECT COUNT(*) FROM `order` WHERE status = 1 AND department = 'Sales Department' AND DAY(created_at) = DAY(CURRENT_DATE())
        ) AS addedStatus;";
    }

    private function getTotalDoneSalesByMonthQuery()
    {
        return "SELECT SUM(pendingStatus) as pendingStatus 
        FROM (
            SELECT COUNT(*) AS pendingStatus FROM request WHERE status = 1 AND department = 'Sales Department' AND MONTH(created_at) = MONTH(CURRENT_DATE())
            UNION ALL
            SELECT COUNT(*) FROM `order` WHERE status = 1 AND department = 'Sales Department' AND MONTH(created_at) = MONTH(CURRENT_DATE())
        ) AS addedStatus;";
    }

    private function getTotalPendingSalesByMonthQuery()
    {
        return "SELECT SUM(pendingStatus) as pendingStatus 
        FROM (
            SELECT COUNT(*) AS pendingStatus FROM request WHERE status = 0 AND department = 'Sales Department' AND MONTH(created_at) = MONTH(CURRENT_DATE())
            UNION ALL
            SELECT COUNT(*) FROM `order` WHERE status = 0 AND department = 'Sales Department' AND MONTH(created_at) = MONTH(CURRENT_DATE())
        ) AS addedStatus;";
    }
    
    private function getAllToResetRequestsQuery()
    {
        return "SELECT * FROM `request`";
    }
    private function getAllToResetOrdersQuery()
    {
        return "SELECT * FROM `order`";
    }
    private function getAllToResetUsersQuery()
    {
        return "SELECT * FROM `users`";
    }
}
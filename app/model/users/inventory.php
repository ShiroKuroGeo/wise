<?php
    class inventory{
        public function getAllInformationOfUser(){
            return $this->getAllInformationOfUserQuery();
        }

        public function insertTask(){
            return $this->insertTaskQuery();
        }

        public function updateStatus(){
            return $this->updateStatusQuery();
        }

        public function selectMonth(){
            return $this->selectMonthQuery();
        }

        public function getAllTaskForFive(){
            return $this->getAllTaskForFiveQuery();
        }

        public function getAllTask(){
            return $this->getAllTaskQuery();
        }

        private function getAllInformationOfUserQuery(){
            return "SELECT * FROM `users` WHERE `user_id` = ?";
        }

        private function insertTaskQuery(){
            return "INSERT INTO `task`(`username`, `description`, `department`, `custodian`, `duedate`, `status`) VALUES (?,?,?,?,?,?)";
        }

        private function getAllTaskQuery(){
            return 'SELECT * FROM `task` ORDER BY `created_at` desc';
        }
        
        private function updateStatusQuery(){
            return 'UPDATE `task` SET `status`= 1 WHERE `task_id` = ?';
        }
        
        private function selectMonthQuery(){
            return 'SELECT * FROM `task` WHERE MONTH(`created_at`) = ? AND `username` = ? ORDER BY `created_at` DESC';
        }
        
        private function getAllTaskForFiveQuery(){
            return 'SELECT * FROM `task` WHERE `username` = ? ORDER BY `created_at` DESC LIMIT 5';
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
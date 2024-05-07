<?php

class authentication
{
    public function login(){
        return $this->loginFunction();
    }

    private function loginFunction(){
        return "SELECT * FROM `users` WHERE `email` = ? AND `password` = ?";
    }
}

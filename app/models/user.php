<?php 
namespace app\models;
use app\core\model;

class user extends model 
{
    public function getAllUsers() 
    {
        return $this->db()->rows("SELECT * FROM mvc_users");
    }
}
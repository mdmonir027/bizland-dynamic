<?php


namespace App\Admin;


use App\Config\Config;

class Ability extends Config
{

    public function all_skills()
    {
        return $this->connect->query("SELECT * FROM `skills` ORDER BY `id` DESC ");
    }

//     add skill from form
    public function skill_add($name, $percentage, $status, $create_by)
    {
        return $this->connect->query("Insert into `skills` (`name` , `percentage` , `status` , `create_by`) values ('$name' , '$percentage' , '$status' , '$create_by')");
    }

    public function skill_status($status, $id)
    {
        return $this->connect->query("Update `skills` Set `status` = '$status' Where `id` = '$id' ");
    }

//    skill find with id
    public function skill_find($id)
    {
        return $this->connect->query("Select * From `skills`  where `id` = '$id'");
    }

// skill delete
    public function skill_delete($id)
    {
        return $this->connect->query("Delete From `skills` where `id` = '$id'");
    }

    public function skill_update($name, $percentage, $status, $auth_id, $id)
    {
        return $this->connect->query("Update `skills` Set `name` = '$name' ,`percentage` = '$percentage' ,`status` = '$status' ,`create_by` = '$auth_id'  Where `id` = '$id' ");
    }

    public function counter_add($name, $number, $icon, $status, $auth_id)
    {
        return $this->connect->query("Insert into `counters` (`name` , `number` , `icon` ,`status` , `create_by`) values ('$name' , '$number' , '$icon' , '$status' , '$auth_id')");
    }

//    all counter
    public function all_counter()
    {
        return $this->connect->query("Select * From `counters` order by `id` desc ");
    }

//    counter status
    public function counter_status($status, $id)
    {
        return $this->connect->query("Update `counters` Set `status` = '$status' Where `id` = '$id' ");
    }

//    counter find
    public function counter_find($id)
    {
        return $this->connect->query("Select * From `counters`  where `id` = '$id'");
    }

//    counter update
    public function counter_update($name, $number, $icon, $status, $auth_id, $id)
    {
        return $this->connect->query("Update `counters` Set `name` = '$name' , `number` = '$number' , `icon` = '$icon' ,`status` = '$status' , `create_by` = '$auth_id' Where `id` = '$id' ");
    }

    public function counter_delete($id)
    {
        return $this->connect->query("Delete From `counters` where `id` = '$id'");
    }


}
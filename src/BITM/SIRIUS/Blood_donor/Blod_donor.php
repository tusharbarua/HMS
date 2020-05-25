<?php
/**
 * Created by PhpStorm.
 * User: durjoy
 * Date: 20-Feb-17
 * Time: 10:21 PM
 */

namespace App\Blood_donor;

use App\Message\Message;
use App\Utility\Utility;
use App\Model\Database as DB;
use PDO;

class Blod_donor extends DB
{
    private $id;
    private $name;
    private $blood_group;
    private $sex;
    private $age;
    private $phone;
    private $email;
    private $address;
    private $last_donation_timestamp;
    private $success;
    private $error;
    private $filename;
    private $tempLocation;


    private function setData($postdata = null){

         if(array_key_exists('id', $postdata)){
             $this->id=$postdata['id'];
         }
        if(array_key_exists('name', $postdata)){
            $this->name=$postdata['name'];
        }
        if(array_key_exists('blood_group', $postdata)){
            $this->blood_group=$postdata['blood_group'];
        }
        if(array_key_exists('sex', $postdata)){
            $this->sex=$postdata['sex'];
        }
        if(array_key_exists('age', $postdata)){
            $this->age=$postdata['age'];
        }
        if(array_key_exists('phone', $postdata)){
            $this->phone=$postdata['phone'];
        }
        if(array_key_exists('email', $postdata)){
            $this->email=$postdata['email'];
        }
        if(array_key_exists('address', $postdata)){
            $this->address=$postdata['address'];
        }
        if(array_key_exists('lastime', $postdata)){
            $this->last_donation_timestamp=$postdata['lastime'];
        }


    }
}
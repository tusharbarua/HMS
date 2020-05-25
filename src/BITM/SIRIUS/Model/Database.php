<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 1/25/2017
 * Time: 2:30 PM
 */

namespace App\Model;
use PDO, PDOException;


class Database
{

    public $DBH;


    public function __construct()
    {

        try{

            $this->DBH = new PDO('mysql:host=localhost;dbname=hms_sirius', "root", "");
            $this->DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        }

        catch(PDOException $error){


        }

    }

}
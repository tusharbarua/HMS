<?php
/**
 * Created by PhpStorm.
 * User: durjoy
 * Date: 20-Feb-17
 * Time: 12:49 AM
 */

namespace App\Admin;

if(!isset($_SESSION) )  session_start();

use App\Message\Message;
use App\Utility\Utility;
use App\Model\Database as DB;
use PDO;


class Admin extends DB
{
    private $email;
    private $password;
}
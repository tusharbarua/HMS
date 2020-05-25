<?php
/**
 * Created by PhpStorm.
 * User: durjoy
 * Date: 20-Feb-17
 * Time: 11:34 PM
 */

namespace App\Department;

use App\Message\Message;
use App\Utility\Utility;
use App\Model\Database as DB;
use PDO;

class Department extends DB
{
    private $department_id;
    private $name;
    private $description;
}
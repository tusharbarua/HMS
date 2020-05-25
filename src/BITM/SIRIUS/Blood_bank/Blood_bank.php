<?php
/**
 * Created by PhpStorm.
 * User: durjoy
 * Date: 20-Feb-17
 * Time: 10:17 PM
 */

namespace App\Blood_bank;

use App\Message\Message;
use App\Utility\Utility;
use App\Model\Database as DB;
use PDO;


class Blood_bank extends DB
{
    private $blood_group_id;
    private $blood_group;
    private $status;
}
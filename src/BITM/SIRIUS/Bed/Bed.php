<?php
/**
 * Created by PhpStorm.
 * User: durjoy
 * Date: 20-Feb-17
 * Time: 1:26 AM
 */

namespace App\Bed;

use App\Message\Message;
use App\Utility\Utility;
use App\Model\Database as DB;
use PDO;


class Bed extends DB
{
    private $bed_id;
    private $bed_number;
    private $type;
    private $status;
    private $description;
}
<?php
/**
 * Created by PhpStorm.
 * User: durjoy
 * Date: 20-Feb-17
 * Time: 10:11 PM
 */

namespace App\Bed_allotment;

use App\Message\Message;
use App\Utility\Utility;
use App\Model\Database as DB;
use PDO;


class Bed_allotment extends DB
{
    private $bed_allotment_id;
    private $patient_id;
    private $doctor_id;
    private $allotment_timestamp;
    private $discharge_timestamp;
}
<?php
require_once("../../vendor/autoload.php");

$objAppoint = new App\Appointment\Appointment();

$objAppoint->setData($_POST);
$objAppoint->store();
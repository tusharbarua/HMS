<?php
require_once ("../../../vendor/autoload.php");

$objNurse = new App\Nurse\Nurse();

$objNurse->setData($_POST);
$objNurse->setPropic($_FILES);
$objNurse->store();
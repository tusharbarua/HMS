<?php
require_once ("../../../vendor/autoload.php");

$objPharmacist = new App\Pharmacist\Pharmacist();

$objPharmacist->setData($_POST);
$objPharmacist->setData($_FILES);

$objPharmacist->store();
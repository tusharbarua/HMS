<?php
include_once ("../../../vendor/autoload.php");

$objDoctor = new App\Doctor\Doctor();

$objDoctor->setData($_POST);
$objDoctor->setPropic($_FILES);

$objDoctor->store();
<?php
require_once("../../../vendor/autoload.php");

$objLab = new App\Laboratorist\Laboratorist();

$objLab->setData($_POST);
$objLab->setPropic($_FILES);

$objLab->store();
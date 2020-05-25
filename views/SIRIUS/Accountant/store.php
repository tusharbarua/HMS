<?php
require_once("../../../vendor/autoload.php");

$objAcc = new App\Accountant\Accountant();

$objAcc->setData($_POST);
$objAcc->setPropic($_FILES);

$objAcc->store();
<?php
require_once ("../../../vendor/autoload.php");

$objReceptionist = new App\Recieptionist\Recieptionist();

$objReceptionist->setData($_POST);
$objReceptionist->setPropic($_FILES);

$objReceptionist->store();
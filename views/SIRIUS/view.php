<?php
require_once("../../vendor/autoload.php");

$objAppoint = new \App\Appointment\Appointment();
$allData = $objAppoint->view();

if(isset($_REQUEST['depts']) )$someData =  $objAppoint->search($_REQUEST);
$availableKeywords=$objAppoint->getAllKeywords();
$comma_separated_keywords= '"'.implode('","',$availableKeywords).'"';

if(isset($_REQUEST['depts']) ) {
    $someData = $objAppoint->search($_REQUEST);
    $serial = 1;
}


?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>View Appointment</title>
</head>
<body>

<form class="p-d-40" action="view.php" method="post">
    <div class="form-group aboutus_select consult_dept">
        <select class="form-control select2 dept_select2 select2-hidden-accessible" style="width: 100%" name="depts" required="" tabindex="-1" aria-hidden="true">
            <option selected="selected" value="" disabled="disabled">Choose</option>
            <option value="cardiology">Cardiology</option>
            <option value="radiology">Radiology</option>
            <option value="neurology">Neurology</option>
            <option value="pediatric">Pediatric Clinic</option>
            <option value="laryngological">Laryngological</option>
        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-depts-8k-container"><span class="select2-selection__rendered" id="select2-depts-8k-container" title="Choose">Choose</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
        <input type="submit" class="btn-primary" value="depts">
    </div>
    </form>

<table class="table table-striped">

    <tr class="bg-3">
        <th>Department</th>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Dates</th>
        <th>Hours</th>
    </tr>
    <?php
    $serial=1;
    foreach ($allData as $oneData) {

        if($serial%2){
            $bgColor = "#1b6d85";
        }else{
            $bgColor = "#555555";
        }
        echo "
            <tr style='background-color: $bgColor' class='bg-4'>
                <td>$oneData->depts</td>
                <td>$oneData->id</td>
                <td>$oneData->fname</td>
                <td>$oneData->lastname</td>
                <td>$oneData->emails</td>
                <td>$oneData->num</td>
                <td>$oneData->dates</td>
                <td>$oneData->hours</td>
            </tr>
        ";
        $serial++;
    }

    ?>

</table>

</body>
</html>

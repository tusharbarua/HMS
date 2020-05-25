
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Patient</title>
    <link href="../cjs/bootstrap.min.css" rel="stylesheet">
    <link href="../cjs/style.css" rel="stylesheet">
    <script src="../cjs/jquery.min.js"></script>
    <script src="../cjs/jquery-1.9.1.min.js"></script>
    <script src="../cjs/bootstrap.min.js"></script>
</head>
<body>
<div class="col-md-12">






    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".patient-modal">Add Patient</button>

    <div class="modal fade patient-modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                        <div class="panel-body">

                            <form role="form" class="form-horizontal form-groups-bordered" action="store.php" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label">Name</label>

                                    <div class="col-sm-8">
                                        <input name="name" class="form-control" id="field-1" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label">Email</label>

                                    <div class="col-sm-8">
                                        <input name="email" class="form-control" id="field-1" type="email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label">Password</label>

                                    <div class="col-sm-8">
                                        <input name="password" class="form-control" id="field-1" type="password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-ta" class="col-sm-3 control-label">Address</label>

                                    <div class="col-sm-8">
                                        <textarea name="address" class="form-control" id="field-ta"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label">Phone</label>

                                    <div class="col-sm-8">
                                        <input name="phone" class="form-control" id="field-1" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-ta" class="col-sm-3 control-label">Sex</label>

                                    <div class="col-sm-8">
                                        <select name="sex" class="form-control">
                                            <option value="">Select Sex</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label">Birth Date</label>

                                    <div class="col-sm-8">
                                        <input name="birth_date" class="form-control datepicker" id="field-1" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label">Age</label>

                                    <div class="col-sm-8">
                                        <input name="age" class="form-control" id="field-1" type="number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-ta" class="col-sm-3 control-label">Blood Group</label>

                                    <div class="col-sm-8">
                                        <select name="blood_group" class="form-control">
                                            <option value="">Select Blood Group</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Image</label>

                                    <div class="col-sm-8">

                                        <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                                                <img src="http://placehold.it/200x150" alt="...">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 6px;"></div>
                                            <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input name="image" accept="image/*" type="file">
                                    </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-3 control-label col-sm-offset-2">
                                    <input class="btn btn-success" value="Submit" type="submit">
                                </div>
                            </form>
                        </div><!--panel body end-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
</body>
</html>






















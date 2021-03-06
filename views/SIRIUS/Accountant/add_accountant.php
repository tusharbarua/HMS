<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Accountant</title>
    <link href="../cjs/bootstrap.min.css" rel="stylesheet">
    <link href="../cjs/style.css" rel="stylesheet">
    <script src="../cjs/jquery.min.js"></script>
    <script src="../cjs/jquery-1.9.1.min.js"></script>
    <script src="../cjs/bootstrap.min.js"></script>
</head>

<body>
<div class="col-md-12">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".accountant-modal">Add Accountant</button>


    <div class="modal fade accountant-modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h2 class="modal-title" id="gridSystemModalLabel">Modal title</h2>
                    </div>
                    <div class="modal-body">


                            <div class="panel-body">

                                <form id="acc" role="form" class="form-horizontal form-groups-bordered go-bottom" action="store.php" method="post" enctype="multipart/form-data">
                                    <br/>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-3 control-label"><i class="fa fa-user-circle" aria-hidden="true"></i>Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="name" class="form-control" id="field-1">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-3 control-label">Email</label>

                                        <div class="col-sm-8">
                                            <input type="email" name="email" class="form-control" id="field-1">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-3 control-label">Password</label>

                                        <div class="col-sm-8">
                                            <input type="password" name="password" class="form-control" id="field-1">
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
                                            <input type="text" name="phone" class="form-control" id="field-1">
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
                                                <input type="file" name="image" accept="image/*">
                                            </span>
                                                    <a href="#" class="btn fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-sm-3 control-label col-sm-offset-2">
                                        <input type="submit" class="btn btn-success" value="Submit">
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
</body>
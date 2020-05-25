
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Notice</title>
    <link href="../cjs/bootstrap.min.css" rel="stylesheet">
    <link href="../cjs/style.css" rel="stylesheet">
    <script src="../cjs/jquery.min.js"></script>
    <script src="../cjs/jquery-1.9.1.min.js"></script>
    <script src="../cjs/bootstrap.min.js"></script>
</head>
<body>
<div class="col-md-12">






    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".notice-modal">Add Notice</button>

    <div class="modal fade notice-modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                        <div class="panel-body">

                            <form role="form" class="form-horizontal form-groups-bordered" method="post" action="http://www.teamsirius.org/HMS/index.php?admin/notice/create" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label">Title</label>

                                    <div class="col-sm-8">
                                        <input name="title" class="form-control" id="field-1" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-ta" class="col-sm-3 control-label">Description</label>

                                    <div class="col-sm-8">
                                        <textarea name="description" class="form-control" id="field-ta"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label">Start Date</label>

                                    <div class="col-sm-8">
                                        <div class="date-and-time">
                                            <input name="start_timestamp" class="form-control datepicker" data-format="D, dd MM yyyy" placeholder="date here" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label">End Date</label>

                                    <div class="col-sm-8">
                                        <div class="date-and-time">
                                            <input name="end_timestamp" class="form-control datepicker" data-format="D, dd MM yyyy" placeholder="date here" type="text">
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


















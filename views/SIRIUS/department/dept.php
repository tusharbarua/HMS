    <div class="modal fade dept-modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">


                        <div class="panel-body">

                            <form id="acc" role="form" class="form-horizontal form-groups-bordered" action="http://teamsirius.org/HMS/index.php?admin/department/create" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label">Name</label>

                                    <div class="col-sm-8">
                                        <input name="name" class="form-control" id="field-1" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-ta" class="col-sm-3 control-label">Description</label>

                                    <div class="col-sm-8">
                                        <textarea name="description" class="form-control" id="field-ta"></textarea>
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













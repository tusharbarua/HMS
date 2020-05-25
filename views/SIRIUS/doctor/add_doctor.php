<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Doctor</title>
    <link href="../cjs/bootstrap.min.css" rel="stylesheet">
    <link href="../cjs/style.css" rel="stylesheet">
    <script src="../cjs/jquery.min.js"></script>
    <script src="../cjs/jquery-1.9.1.min.js"></script>
    <script src="../cjs/bootstrap.min.js"></script>
</head>
<body>
<div class="col-md-12">






    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".doctor-modal">Add Doctor</button>

    <div class="modal fade doctor-modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
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

                                    <div class="col-sm-5">
                                        <input name="name" class="form-control" id="field-1" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label">Email</label>

                                    <div class="col-sm-5">
                                        <input name="email" class="form-control" id="field-1" type="email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label">Password</label>

                                    <div class="col-sm-5">
                                        <input name="password" class="form-control" id="field-1" type="password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-ta" class="col-sm-3 control-label">Address</label>

                                    <div class="col-sm-9">
                                        <textarea name="address" class="form-control" id="field-ta"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label">Phone</label>

                                    <div class="col-sm-5">
                                        <input name="phone" class="form-control" id="field-1" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-ta" class="col-sm-3 control-label">Department</label>

                                    <div class="col-sm-5">
                                        <select name="department_id" class="form-control">
                                            <option value="">Select Department</option>
                                            <option value="1">Cardilogy</option>
                                            <option value="2">Pathology</option>
                                            <option value="3">Neurology</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-ta" class="col-sm-3 control-label">Profile</label>

                                    <div class="col-sm-9">
                                        <ul class="wysihtml5-toolbar" style=""><li class="dropdown"><a class="btn btn-white dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-font"></i>&nbsp;<span class="current-font">Normal text</span>&nbsp;<b class="caret"></b></a><ul class="dropdown-menu"><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="div" tabindex="-1" href="javascript:;" unselectable="on">Normal text</a></li><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" tabindex="-1" href="javascript:;" unselectable="on">Heading 1</a></li><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" tabindex="-1" href="javascript:;" unselectable="on">Heading 2</a></li><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h3" tabindex="-1" href="javascript:;" unselectable="on">Heading 3</a></li><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h4" href="javascript:;" unselectable="on">Heading 4</a></li><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h5" href="javascript:;" unselectable="on">Heading 5</a></li><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h6" href="javascript:;" unselectable="on">Heading 6</a></li></ul></li><li class="dropdown"><a class="btn btn-white dropdown-toggle" data-toggle="dropdown" href="#" tabindex="-1"><span class="current-color">Black</span>&nbsp;<b class="caret"></b></a><ul class="dropdown-menu"><li><div class="wysihtml5-colors" data-wysihtml5-command-value="black"></div><a class="wysihtml5-colors-title" data-wysihtml5-command="foreColor" data-wysihtml5-command-value="black" href="javascript:;" unselectable="on">Black</a></li><li><div class="wysihtml5-colors" data-wysihtml5-command-value="silver"></div><a class="wysihtml5-colors-title" data-wysihtml5-command="foreColor" data-wysihtml5-command-value="silver" href="javascript:;" unselectable="on">Silver</a></li><li><div class="wysihtml5-colors" data-wysihtml5-command-value="gray"></div><a class="wysihtml5-colors-title" data-wysihtml5-command="foreColor" data-wysihtml5-command-value="gray" href="javascript:;" unselectable="on">Grey</a></li><li><div class="wysihtml5-colors" data-wysihtml5-command-value="maroon"></div><a class="wysihtml5-colors-title" data-wysihtml5-command="foreColor" data-wysihtml5-command-value="maroon" href="javascript:;" unselectable="on">Maroon</a></li><li><div class="wysihtml5-colors" data-wysihtml5-command-value="red"></div><a class="wysihtml5-colors-title" data-wysihtml5-command="foreColor" data-wysihtml5-command-value="red" href="javascript:;" unselectable="on">Red</a></li><li><div class="wysihtml5-colors" data-wysihtml5-command-value="purple"></div><a class="wysihtml5-colors-title" data-wysihtml5-command="foreColor" data-wysihtml5-command-value="purple" href="javascript:;" unselectable="on">Purple</a></li><li><div class="wysihtml5-colors" data-wysihtml5-command-value="green"></div><a class="wysihtml5-colors-title" data-wysihtml5-command="foreColor" data-wysihtml5-command-value="green" href="javascript:;" unselectable="on">Green</a></li><li><div class="wysihtml5-colors" data-wysihtml5-command-value="olive"></div><a class="wysihtml5-colors-title" data-wysihtml5-command="foreColor" data-wysihtml5-command-value="olive" href="javascript:;" unselectable="on">Olive</a></li><li><div class="wysihtml5-colors" data-wysihtml5-command-value="navy"></div><a class="wysihtml5-colors-title" data-wysihtml5-command="foreColor" data-wysihtml5-command-value="navy" href="javascript:;" unselectable="on">Navy</a></li><li><div class="wysihtml5-colors" data-wysihtml5-command-value="blue"></div><a class="wysihtml5-colors-title" data-wysihtml5-command="foreColor" data-wysihtml5-command-value="blue" href="javascript:;" unselectable="on">Blue</a></li><li><div class="wysihtml5-colors" data-wysihtml5-command-value="orange"></div><a class="wysihtml5-colors-title" data-wysihtml5-command="foreColor" data-wysihtml5-command-value="orange" href="javascript:;" unselectable="on">Orange</a></li></ul></li><li><div class="btn-group"><a class="btn btn-white" data-wysihtml5-command="bold" title="CTRL+B" tabindex="-1" href="javascript:;" unselectable="on">Bold</a><a class="btn btn-white" data-wysihtml5-command="italic" title="CTRL+I" tabindex="-1" href="javascript:;" unselectable="on">Italic</a><a class="btn btn-white" data-wysihtml5-command="underline" title="CTRL+U" tabindex="-1" href="javascript:;" unselectable="on">Underline</a></div></li><li><div class="btn-group"><a class="btn btn-white" data-wysihtml5-command="insertUnorderedList" title="Unordered list" tabindex="-1" href="javascript:;" unselectable="on"><i class="glyphicon glyphicon-list"></i></a><a class="btn btn-white" data-wysihtml5-command="insertOrderedList" title="Ordered list" tabindex="-1" href="javascript:;" unselectable="on"><i class="glyphicon glyphicon-th-list"></i></a><a class="btn btn-white" data-wysihtml5-command="Outdent" title="Outdent" tabindex="-1" href="javascript:;" unselectable="on"><i class="glyphicon glyphicon-indent-right"></i></a><a class="btn btn-white" data-wysihtml5-command="Indent" title="Indent" tabindex="-1" href="javascript:;" unselectable="on"><i class="glyphicon glyphicon-indent-left"></i></a></div></li><li class="pull-right"><div class="btn-group"><a class="btn btn-white" data-wysihtml5-action="change_view" title="Edit HTML" tabindex="-1" href="javascript:;" unselectable="on"><i class="entypo-code"></i></a></div></li><li><div class="bootstrap-wysihtml5-insert-link-modal modal fade"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><a class="close" data-dismiss="modal">×</a><h4 class="modal-title">Insert link</h4></div><div class="modal-body"><input value="http://" class="bootstrap-wysihtml5-insert-link-url form-control"><label class="checkbox"><input class="bootstrap-wysihtml5-insert-link-target" checked="" type="checkbox">Open link in new window</label></div><div class="modal-footer"><a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a><a href="#" class="btn btn-primary" data-dismiss="modal">Insert link</a></div></div></div></div><a class="btn btn-white" data-wysihtml5-command="createLink" title="Insert link" tabindex="-1" href="javascript:;" unselectable="on"><i class="entypo-link"></i></a></li><li><div class="bootstrap-wysihtml5-insert-image-modal modal fade"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><a class="close" data-dismiss="modal">×</a><h3>Insert image</h3></div><div class="modal-body"><input value="http://" class="bootstrap-wysihtml5-insert-image-url form-control"></div><div class="modal-footer"><a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a><a href="#" class="btn btn-primary" data-dismiss="modal">Insert image</a></div></div></div></div><a class="btn btn-white" data-wysihtml5-command="insertImage" title="Insert image" tabindex="-1" href="javascript:;" unselectable="on"><i class="entypo-picture"></i></a></li></ul><textarea name="profile" class="form-control html5editor" id="field-ta" data-stylesheet-url="assets/css/wysihtml5-color.css" style="display: none;"></textarea><input name="_wysihtml5_mode" value="1" type="hidden"><iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" marginwidth="0" marginheight="0" style="display: block; background-color: rgb(255, 255, 255); border-collapse: separate; border-color: rgb(235, 235, 235); border-style: solid; border-width: 1px; clear: none; float: none; margin: 0px; outline: 0px none rgb(85, 85, 85); outline-offset: 0px; padding: 6px 12px; position: static; top: auto; left: auto; right: auto; bottom: auto; z-index: auto; vertical-align: text-bottom; text-align: start; box-sizing: border-box; box-shadow: none; border-radius: 3px; width: 100%; height: auto;" height="0" frameborder="0" width="0"></iframe>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Image</label>

                                    <div class="col-sm-5">

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










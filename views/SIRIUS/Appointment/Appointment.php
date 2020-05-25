<form class="p-d-40" action="#" method="post">
    <div class="form-group aboutus_select consult_dept">
        <select class="form-control select2 dept_select2 select2-hidden-accessible" style="width: 100%" name="depts" required="" tabindex="-1" aria-hidden="true">
            <option selected="selected" value="" disabled="disabled">Choose</option>
            <option value="cardiology">Cardiology</option>
            <option value="radiology">Radiology</option>
            <option value="neurology">Neurology</option>
            <option value="pediatric">Pediatric Clinic</option>
            <option value="laryngological">Laryngological</option>
        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-depts-8k-container"><span class="select2-selection__rendered" id="select2-depts-8k-container" title="Choose">Choose</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </div>
    <div class="form-group">
        <label>First Name</label>
        <br>
        <input class="form-control input_name" name="fname" placeholder="First Name" required="" type="text">
    </div>
    <div class="form-group">
        <label>Last Name</label>
        <br>
        <input class="form-control input_name" name="lastname" placeholder="Last Name" type="text">
    </div>
    <div class="form-group">
        <label>Phone Number</label>
        <br>
        <input class="form-control input_name" name="num" placeholder="Phone Number" required="" type="text">
    </div>
    <div class="form-group">
        <label>Email Address</label>
        <br>
        <input class="form-control input_name" name="emails" placeholder="Email Address" required="" type="email">
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <label>Date</label>
                <br>
                <div class="input-group date datetimepicker_single datetimepicker_res">
                    <input class="form-control" placeholder="MM/DD/YYYY" name="dates" required="" type="text">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                </div>
            </div>
            <div class="clearfix visible-xs-block"></div>
            <div class="col-md-6 col-xs-12">
                <label>Time</label>
                <div class="input-group date datetimepicker_single2 datetimepicker_res">
                    <input class="form-control" placeholder="HH:MM" name="hours" required="" type="text">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center m-t-20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
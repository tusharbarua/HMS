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
<div class="row">
          <div class="col-md-6 p-d-25">
                <div class="">
                    <fieldset class="field_form">
                        <h4 class="text-center head_center">Login</h4>
                        <form action="#">
                            <div class="row form-group m-t-30">
                                <div class="col-sm-4">
                                    <label for="username" class="control-label">User
                                        Name</label>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" id="username" placeholder="User Name" type="text">
                                </div>
                            </div>
                            <div class="row form-group m-t-15">
                                <div class="col-sm-4">
                                    <label for="pwd" class="control-label">Password</label>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" id="pwd" placeholder="Password" type="password">
                                </div>
                            </div>
                            <div class="row form-group m-t-25">
                                <div class="col-sm-6">
                                    <div class="icheckbox_minimal-blue" style="position: relative;"><input class="form-control appointment_check" id="check" style="position: absolute; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div>
                                    <span class="m-l-10">Remember me</span>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="#" class="text-primary">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center m-t-10">
                                <button class="btn btn-primary btn-lg">
                                    Login
                                </button>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 m-t-20 text-center header_modal_icons">
                                    <ul class="tp-banner_social_icons list-inline login_icons">
                                        <li><span>Login With</span></li>
                                        <li class="facebook_hvr">
                                            <a href="#">
                                                <i class="fa fa-facebook text-center"></i>
                                            </a>
                                        </li>
                                        <li class="twitter_hvr">
                                            <a href="#">
                                                <i class="fa fa-twitter text-center"></i>
                                            </a>
                                        </li>
                                        <li class="gplus_hvr">
                                            <a href="#">
                                                <i class="fa fa-google-plus text-center"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </fieldset>
                </div>
            </div>
            <div class="col-md-6 p-d-25">
                <fieldset>
                    <h4 class="text-center head_center">Sign Up</h4>
                    <form action="#">
                        <div class="row form-group m-t-30">
                            <div class="col-sm-4">
                                <label for="firstname" class="control-label">First Name:</label>
                            </div>
                            <div class="col-sm-8">
                                <input class="form-control" id="firstname" type="text"></div>
                        </div>
                        <div class="row form-group m-t-15">
                            <div class="col-sm-4">
                                <label for="lastname" class="control-label">Last Name:</label>
                            </div>
                            <div class="col-sm-8">
                                <input class="form-control" id="lastname" type="text"></div>
                        </div>
                        <div class="row form-group m-t-15">
                            <div class="col-sm-4">
                                <label for="email" class="control-label">Email:</label></div>
                            <div class="col-sm-8">
                                <input class="form-control" id="email_1" type="email"></div>
                        </div>
                        <div class="row form-group m-t-15">
                            <div class="col-sm-4">
                                <label for="password" class="control-label">Password:</label>
                            </div>
                            <div class="col-sm-8">
                                <input class="form-control" id="password" type="password"></div>
                        </div>
                        <div class="row form-group m-t-15">
                            <div class="col-sm-4">
                                <label for="password_reenter" class="control-label">Confirm Password:</label>
                            </div>
                            <div class="col-sm-8">
                                <input class="form-control" id="password_reenter" type="password"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <button class="btn btn-primary btn-lg">
                                    Sign Up
                                </button>
                            </div>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</body>
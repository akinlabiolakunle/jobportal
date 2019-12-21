@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container-fluid" style="background-color: #eeee">
        <div class="col-md-8 col-md-offset-2" style="margin-top: 50px">
            <form action="" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="panel panel-primary">
                    <div class="panel-heading">Personal Information</div>
                    <div class="panel-body">
                        <div class="reset-to-row main-form register-page">
                            <div class="row">
                                <div class="form-group clearfix">
                                    <div class="col-xs-12 col-sm-3">
                                        <label class="form-label" for="firstname">First name:</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <input type="text" id="firstname" name="firstname" class="form-control input-lg" placeholder="First name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group clearfix">
                                    <div class="col-xs-12 col-sm-3">
                                        <label class="form-label" for="surname">Surname:</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <input type="text" id="surname" name="surname" class="form-control input-lg" placeholder="Surname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group clearfix">
                                    <div class="col-xs-12 col-sm-3">
                                        <label class="form-label" for="surname">Phone:</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <input type="number" id="phone" name="phone" class="form-control input-lg" placeholder="Phone Contact">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group clearfix">
                                    <div class="col-xs-12 col-sm-3">
                                        <label class="form-label" for="surname">Gender:</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <select name="gender" id="gender" class="form-control">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group clearfix">
                                    <div class="col-xs-12 col-sm-3">
                                        <label class="form-label" for="surname">Date of Birth</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group clearfix">
                                    <div class="col-xs-12 col-sm-3">
                                        <label class="form-label" for="email">Email address:</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <input type="email" id="email" name="email" class="form-control input-lg" data-invalid-domain="false">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group clearfix">
                                    <div class="col-xs-12 col-sm-3">
                                        <label class="form-label" for="password">Create a password:</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <input type="password" id="password" name="password" class="form-control input-lg" data-pattern="(?=^.{6,32}$)(?=.*\d+)(.*)">
                                        <small class="help-text">Must contain at least 6 characters and a number.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group clearfix">
                                    <div class="col-xs-12 col-sm-3">
                                        <label class="form-label" for="confirmpassword">Confirm password:</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <input type="password" id="confirmpassword" name="confirmpassword" class="form-control input-lg">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="panel panel-primary">
                    <div class="panel-heading">Qualification Information</div>
                    <div class="panel-body">

                        <div class="row">
                            <div class="form-group clearfix">
                                <div class="col-xs-12 col-sm-3">
                                    <label class="form-label" for="">CV:</label>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <input type="file" name="localCv" id="localCv" class="form-control">
                                    <small class="help-text">We accept MS Word, PDF &amp; Richtext formats. Maximum file size 1MB.</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group clearfix">
                                <div class="col-xs-12 col-sm-3">
                                    <label for="ddlEducation" class="form-label label-btn-row">Highest level of education:</label>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <select id="ddlEducation" name="educationId" class="form-control input-lg">
                                        <option value="">- Please select -</option>
                                        <option value="0">None of these</option>
                                        <option value="532">A levels /advanced GNVQ</option>
                                        <option value="536">BTEC</option>
                                        <option value="537">City &amp; Guilds</option>
                                        <option value="538">Diploma</option>
                                        <option value="531">GCSE/GNVQ/O levels</option>
                                        <option value="533">HND/HNC</option>
                                        <option value="535">Masters degree or higher</option>
                                        <option value="540">PhD</option>
                                        <option value="539">Senior business or technical qualification</option>
                                        <option value="534">University degree</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group clearfix">
                                <div class="col-xs-12 col-sm-3">
                                    <label class="form-label" for="currentJobTitle">Current/most recent job title:</label>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <input class="form-control input-lg ui-autocomplete-input" type="search" name="currentJobTitle" id="currentJobTitle" placeholder="E.g. Regional Manager, Student" spellcheck="false" autocorrect="off" autocapitalize="off" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group clearfix">
                                <div class="col-xs-12 col-sm-3">
                                    <label for="ddlSalaryRange" class="form-label label-btn-row">Years of Experience:</label>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <select class="form-control" required="" id="years_experience" name="years_experience">
                                        <option value="" selected="selected">Select</option>
                                        <option value="1">No Experience/Less than 1 year</option>
                                        <option value="2">1 year</option>
                                        <option value="3">2 years</option>
                                        <option value="4">3 years</option>
                                        <option value="5">4 years</option>
                                        <option value="6">5 years</option>
                                        <option value="7">6 years</option>
                                        <option value="8">7 years</option>
                                        <option value="9">8 years</option>
                                        <option value="10">9 years</option>
                                        <option value="11">10 years</option>
                                        <option value="12"> More than 10 years</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group clearfix">
                                <div class="col-xs-12 col-sm-offset-3 col-sm-6">
                                    <div class="ts-and-cs">
                                        <div id="ts-and-cs-header" class="alert-info-icon">
                                            <div class="small">
                                                <input checked="checked" id="cvdbOptIn" name="cvdbOptIn" type="checkbox" value="true">
                                                By clicking submit, you will sign up to the Totaljobs service.
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group clearfix">
                                <div class="col-xs-12 col-sm-offset-3 col-sm-6">
                                    <button id="register" name="register" class="btn btn-exlg btn-primary btn-block btn-default">Submit</button>
                                </div>
                                <div class="col-xs-12 col-sm-offset-3 col-sm-6 site-announcement">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
@endsection

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
                                        <input type="text" id="firstname" name="fname" class="form-control input-lg" placeholder="First name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group clearfix">
                                    <div class="col-xs-12 col-sm-3">
                                        <label class="form-label" for="surname">Last Name:</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <input type="text" id="surname" name="lname" class="form-control input-lg" placeholder="Last name">
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
                                        <label class="form-label" for="email">Employer Email:</label>
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
                                        <input type="password" id="password" name="password" class="form-control input-lg">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">Employer Information</div>
                    <div class="panel-body">
                            <div class="row">
                                <div class="form-group clearfix">
                                    <div class="col-xs-12 col-sm-12">
                                        <label class="form-label" for="companyname">Company Name</label>
                                        <input type="text" id="c_name" name="companyname" class="form-control input-lg" placeholder="Company Name">
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="col-xs-12 col-sm-6">
                                        <label class="form-label" for="companyname">Sector</label>
                                        <select name="sector" id="sector" class="form-control">

                                            <option value="" selected="selected">Select Sector</option>
                                            <option value="15">Advertising &amp; Marketing</option>
                                            <option value="1">Agriculture, Fishing &amp; Forestry</option>
                                            <option value="2">Art &amp; Design</option>
                                            <option value="23">Automotive &amp; Aviation</option>
                                            <option value="4">Banking, Finance &amp; Insurance</option>
                                            <option value="3">Construction</option>
                                            <option value="16">Digital, Media &amp; Communications</option>
                                            <option value="5">Education &amp; Training</option>
                                            <option value="6">Energy &amp; Utilities</option>
                                            <option value="24">Entertainment &amp; Events</option>
                                            <option value="7">Government</option>
                                            <option value="8">Healthcare</option>
                                            <option value="9">Hospitality &amp; Hotel</option>
                                            <option value="11">Internet &amp; Telecommunications</option>
                                            <option value="12">Law</option>
                                            <option value="20">Law Enforcement &amp; Security</option>
                                            <option value="13">Logistics &amp; Transportation</option>
                                            <option value="14">Manufacturing</option>
                                            <option value="17">Mining, Oil &amp; Metals</option>
                                            <option value="18">NGO</option>
                                            <option value="21">Real Estate</option>
                                            <option value="10">Recruitment</option>
                                            <option value="19">Retail, Fashion &amp; FMCG</option>
                                            <option value="25">Technology</option>
                                            <option value="22">Travel, Tourism &amp; Leisure</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label class="form-label" for="companyname">Number of Employees</label>
                                        <select class="form-control"  id="no_employee" name="no_employee">
                                            <option value="" selected="selected">Select</option>
                                            <option value="1">1-4</option>
                                            <option value="2">5-10</option>
                                            <option value="3">11-25</option>
                                            <option value="4">26-50</option>
                                            <option value="5">51-100</option>
                                            <option value="6">101-200</option>
                                            <option value="7">201-500</option>
                                            <option value="8">501-1000</option>
                                            <option value="9">1001+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="col-xs-12 col-sm-12">
                                        <label class="form-label" for="companyname">Website address</label>
                                        <input type="url" id="c_web" name="companyname" class="form-control input-lg" placeholder="Company Name">
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <div class="col-xs-12 col-sm-12">
                                        <label class="form-label" for="companyname">Phone Contact</label>
                                        <input type="email" id="c_contact" name="companyname" class="form-control input-lg" placeholder="Company Name">
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="col-xs-12 col-sm-12">
                                        <label class="form-label" for="companyname">Address</label>
                                        <textarea name="c_address" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <button type="submit" class="btn-block btn btn-primary">Submit</button>

                </div>


            </form>

        </div>
@endsection

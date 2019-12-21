@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <h1 class="brand-font">Register</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <p>
                Want to hear about the latest jobs and apply for new roles in an instant?<br>
                Spend a few moments registering with us now. <a id="accountBenefitsLauncher" href="#">The benefits of an account.</a>
            </p>

            <p>
                All fields are mandatory
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="reset-to-row main-form register-page">
                <div class="row">
                </div>
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
                            <label class="form-label" for="btnCVUpload">CV:</label>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <input type="hidden" name="isCvRequired" id="isCvRequired" value="true">
                            <div class="alert alert-success alert-success-icon hidden">
                                <div id="cvFileName"></div>
                            </div>

                            <div class="cv-container">
                                <button id="btnCVUpload" type="button" class="btn btn-cv-upload btn-block btn-lg dropdown-toggle" data-toggle="dropdown">
                                    <div class="pull-left">Upload your CV</div>
                                    <div class="pull-right"><span class="caret"></span></div>
                                </button>
                                <input type="file" name="localCv" id="localCv" title="from Desktop" data-cvvirus="false">
                                <ul class="dropdown-menu" id="cvUploadOptions" role="menu">
                                    <li class="file-upload">
                                        <label class="icon-device-drive local-cv" for="localCv">from this device</label>
                                    </li>
                                </ul>
                            </div>
                            <small class="help-text">We accept MS Word, PDF &amp; Richtext formats. Maximum file size 1MB.</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group clearfix">
                        <div class="col-xs-12 col-sm-3">
                            <div class="form-label">Eligible to work in the UK:</div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                <label for="eligibilityUkYes" class="btn btn-select">
                                    <input type="radio" name="eligibilityUk" id="eligibilityUkYes" value="1">Yes
                                </label>
                                <label for="eligibilityUkNo" class="btn btn-select">
                                    <input type="radio" name="eligibilityUk" id="eligibilityUkNo" value="2">No
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="col-xs-12 col-sm-3">
                            <div class="form-label">Eligible to work in the EU:</div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                <label for="eligibilityEuYes" class="btn btn-select">
                                    <input type="radio" name="eligibilityEu" id="eligibilityEuYes" value="3">Yes
                                </label>
                                <label for="eligibilityEuNo" class="btn btn-select">
                                    <input type="radio" name="eligibilityEu" id="eligibilityEuNo" value="4">No
                                </label>
                            </div>
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
                            <label for="ddlSalaryRange" class="form-label label-btn-row">Current/most recent salary:</label>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                <label for="rdoAnnualRate" class="btn btn-select">
                                    <input type="radio" name="salaryRangeType" id="rdoAnnualRate" value="annual"> Annual
                                </label>
                                <label for="rdoDailyRate" class="btn btn-select">
                                    <input type="radio" name="salaryRangeType" id="rdoDailyRate" value="daily"> Daily
                                </label>
                                <label for="rdoHourlyRate" class="btn btn-select">
                                    <input type="radio" name="salaryRangeType" id="rdoHourlyRate" value="hourly"> Hourly
                                </label>
                                <label for="rdoNoRate" class="btn btn-select">
                                    <input type="radio" name="salaryRangeType" id="rdoNoRate" value="none"> None
                                </label>
                            </div>
                            <select id="ddlSalaryRange" name="salaryRange" class="form-control input-lg"></select>
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
                <div class="row">
                    <div class="form-group clearfix">
                        <div class="col-xs-12 col-sm-offset-3 col-sm-6">
                            <div class="ts-and-cs">
                                <div id="ts-and-cs-header" class="alert-info-icon">
                                    <div class="small">
                                        By clicking submit, you will sign up to the Totaljobs service.
                                    </div>
                                </div>
                                <div id="tsandcs" class="small">
                                    When you sign up to the Totaljobs service we will send you relevant jobs, make your profile available to employers on
                                    <a href="/about-us" target="_blank">Totaljobs Group sites</a> unless you ask us not to, and enable you to apply for jobs advertised on the job board.
                                    By signing up you agree to our <a href="/terms-and-conditions" target="_blank">Terms and Conditions</a> and <a href="/privacy-policy" target="_blank">Privacy Policy</a>.

                                    <div class="third-party-checkbox">
                                        <div class="pull-left">
                                            <input id="thirdPartyMarketingOptIn" name="thirdPartyMarketingOptIn" type="checkbox" ng-model="session.form.thirdPartyMarketingOptIn" value="true">
                                        </div>
                                        <label for="thirdPartyMarketingOptIn">Keep me informed of other relevant goods and services you offer.</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <input checked="checked" id="cvdbOptIn" name="cvdbOptIn" type="checkbox" value="true">
                                <input name="cvdbOptIn" type="hidden" value="false">
                                <small><strong>Share your profile with trusted employers looking for candidates like you</strong></small>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <input checked="checked" id="applicationHistoryOptIn" name="applicationHistoryOptIn" type="checkbox" value="true">
                                <input name="applicationHistoryOptIn" type="hidden" value="false">
                                <small><strong>Help recruiters understand what I'm looking for by making my application history visible.</strong></small>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <input checked="checked" id="ocaOptIn" name="ocaOptIn" type="checkbox" value="true">
                                <input name="ocaOptIn" type="hidden" value="false">
                                <small>
                                    <strong>Switch on one-click apply to send quicker applications.</strong>
                                    <a id="ocaoptinlink" href="#ocaoptintext">
                                        What is this?<span class="caret caret-spacer"></span>
                                    </a>
                                </small>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-offset-3 col-sm-6">
                            <div id="ocaoptintext" class="small collapse">
                                <p>
                                    One-click apply is an additional way to apply using your saved CV, with just one click or tap. You can add a cover letter and edit your settings at any time in My Account and can still apply in the usual way if you want to change your CV or add a cover letter before submitting your application.
                                </p>
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
    </div>
@stop

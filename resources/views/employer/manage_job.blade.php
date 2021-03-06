@extends('layouts.app')
@section('content')

    <div class="page_banner banner employer-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="banner-heading">Manage Jobs</div>
                </div>
            </div>
        </div>
    </div>
    <main id="maincontent">
        <section class="manage">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="Resume">
                            <h1>My Account</h1>
                            <ul class="unstyled">
                                <li><a href="#"><i class="fa fa-caret-right"></i> My Profile</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> Edit Profile</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> Notifications</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> Favorite Candidates</a></li>
                                <li class="active"><a href="#"><i class="fa fa-caret-right"></i> Manage Jobs</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> Manage Applications</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> Change Password</a></li>
                                <li class="border-none"><a href="#"><i class="fa fa-caret-right"></i> Sign Out</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="panel-body">
                            <div class="job_title">Manage Applications</div>
                            <table class="table">
                                <thead class="">
                                <tr>
                                    <th>Job Title</th>
                                    <th>Job Type</th>
                                    <th>Applications</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><h1>Team of PHP MySQL Developers <p>Agricultural Sceences</p></h1></td>
                                    <td class="work-time">Full Time</td>
                                    <td><strong>25 <span class="text-success">(Manage)</span></strong></td>
                                    <td><span><i class="fa fa-pencil"></i></span> <span><i class="fa fa-trash"></i></span> <span><i class="fa fa-ban"></i></span></td>
                                </tr>
                                <tr>
                                    <td><h1>Urgent Opening for PHP Developer <p>Agricultural Sceences</p></h1></td>
                                    <td class="work-time part">Part Time</td>
                                    <td><strong>8 <span class="text-success">(Manage)</span></strong></td>
                                    <td><span><i class="fa fa-pencil"></i></span> <span><i class="fa fa-trash"></i></span> <span><i class="fa fa-ban"></i></span></td>
                                </tr>
                                <tr>
                                    <td><h1>Urgent Require- Web Developer <p>Agricultural Sceences</p></h1></td>
                                    <td class="work-time part">Part Time</td>
                                    <td><strong>13 <span class="text-success">(Manage)</span></strong></td>
                                    <td><span><i class="fa fa-pencil"></i></span> <span><i class="fa fa-trash"></i></span> <span><i class="fa fa-ban"></i></span></td>
                                </tr>
                                <tr>
                                    <td><h1>Nodejs,Angularjs Developer <p>Agricultural Sceences</p></h1></td>
                                    <td class="work-time">Full Time</td>
                                    <td><strong>1 <span class="text-success">(Manage)</span></strong></td>
                                    <td><span><i class="fa fa-pencil"></i></span> <span><i class="fa fa-trash"></i></span> <span><i class="fa fa-ban"></i></span></td>
                                </tr>
                                <tr>
                                    <td><h1>Software Developer -IT Co <p>Agricultural Sceences</p></h1></td>
                                    <td class="work-time Free">Freelancer</td>
                                    <td><strong>23 <span class="text-success">(Manage)</span></strong></td>
                                    <td><span><i class="fa fa-pencil"></i></span> <span><i class="fa fa-trash"></i></span> <span><i class="fa fa-ban"></i></span></td>
                                </tr>
                                <tr>
                                    <td><h1>Website Developer and Head of Developers <p>Agricultural Sceences</p></h1></td>
                                    <td class="work-time">Full Time</td>
                                    <td><strong>34 <span class="text-success">(Manage)</span></strong></td>
                                    <td><span><i class="fa fa-pencil"></i></span> <span><i class="fa fa-trash"></i></span> <span><i class="fa fa-ban"></i></span></td>
                                </tr>
                                <tr>
                                    <td><h1>Software Developer-Winforms-wpf<p>Agricultural Sceences</p></h1></td>
                                    <td class="work-time part">Part Time</td>
                                    <td><strong>59 <span class="text-success">(Manage)</span></strong></td>
                                    <td><span><i class="fa fa-pencil"></i></span> <span><i class="fa fa-trash"></i></span> <span><i class="fa fa-ban"></i></span></td>
                                </tr>
                                <tr class="border-none">
                                    <td><h1>Software Developer -Leading IT Company <p>Agricultural Sceences</p></h1></td>
                                    <td class="work-time">Full Time</td>
                                    <td><strong>17 <span class="text-success">(Manage)</span></strong></td>
                                    <td><span><i class="fa fa-pencil"></i></span> <span><i class="fa fa-trash"></i></span> <span><i class="fa fa-ban"></i></span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

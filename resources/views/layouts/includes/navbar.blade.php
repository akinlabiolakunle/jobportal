
<div class="header-stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="site-logo">
                    <a href="/"><img src="{{asset('images/home/site-logo.png')}}" alt="" class="img-responsive" /></a>
                </div>
            </div>
            <div class="col-md-6">
                <nav class="navbar navbar-default navbar-static-top">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav scrollto">
                            <li><a href="index.html">Home</a></li>
                            <li class="dropdown">
                                <a href="candidate/job_listing.html" class="dropdown-toggle" data-toggle="dropdown">Browse Jobs</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employers <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="employe_detail.html">Employers Detail</a></li>
                                    <li><a href="employe_list.html">Employers List</a></li>
                                    <li><a href="post.html">Post A job</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Candidates <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="candidates.html">Browse Candidates</a></li>
                                    <li><a href="resume.html">Submit Resume</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="resume_preview.html">Resume Page</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="price_table.html">Pricing Tables</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-md-3 text-right">
                <button class="btn btn-default" href="{{route('login')}}">Login</button>
                <div class="dropdown" style="display: initial;">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Signup
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

                        <li><a href="#">Register Your CV</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Employer</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

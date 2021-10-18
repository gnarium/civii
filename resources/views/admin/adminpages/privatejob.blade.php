@extends ('admin.adminlayouts.adminmain')
<meta name="robots" content="noindex">
<script src="https://cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
<body>
	<header class="header fixed-top clearfix" style="background-color:#FDC716">
<!--logo start-->
<div class="brand1">
    <a href="/admin/adminindex" class="logo">
	<p>Engineering Destination Admin Panel</p>
	</a>

		
</div>
<!--logo end-->
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{{ asset ('admin/images/2.png')}}">
                <span class="username">Engineering Destination</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="#"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
       
    </ul>
</div>
</header>

<section id="container">
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="/admin/adminindex">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
            <li>
                    <a href="/admin/adminpages/govtjob">
                        <i class="fa fa-bullhorn"></i>
                        <span>Add Government Job's </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Add Private Job's</span>
                    </a>
                    <ul class="sub">
                        <li><a href="/admin/adminpages/privatejob">Add Private Job's</a></li>
                     </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>QA/QC Testing</span>
                    </a>
                    <ul class="sub">
                        <li><a href="/admin/adminpages/qa">Add QA/QC Testing</a></li>
				    </ul>
                </li>
                <li>
                    <a href="/admin/adminpages/iscode">
                        <i class="fa fa-user"></i>
                        <span>Add ISCODE </span>
                    </a>
                </li>
                <li>
                    <a href="/admin/adminpages/contact">
                        <i class="fa fa-user"></i>
                        <span>Contact Details</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<section id="main-content" style="background-color:#12151a;">
	<section class="wrapper">
		<div class="market-updates">
			<div class="clearfix"> </div>
		</div>	

				</div>
			</div>
		</div>
		<div class="row" >
        @include('front_end.flash')
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Private Job's 
                        </header>
                    <div class="panel-body">
                        <div class=" form">
                            <form class="cmxform form-horizontal" method="post" action="/admin/adminpages/privatejob" novalidate="novalidate"  enctype="multipart/form-data">
                                {{ csrf_field()}}
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-3">Job Title (required)</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="Jobtitle" type="text" required="">
                                        </div>
                                    </div>
                                
                                <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-3">Enter Company Name (required)</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="curl" type="url" name="Companyname" required="">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-3">Enter Job Name (required)</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="Jobname" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3">Enter Branch(required)</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cemail" type="text" name="Branch" required="">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Enter Eligibility (required)</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="curl" type="url" name="Eligibility" required="">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-3">Enter Last Date of Apply (required)</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="curl" type="text" name="Lastname">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-3">Enter Job Describtion (required)</label>
                                        <div class="col-lg-6">
                                        <textarea  class="ckeditor" name="JobDescribtion" style="width=400px" required=""></textarea>
                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <button class="btn btn-default" type="button">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
            
</section>

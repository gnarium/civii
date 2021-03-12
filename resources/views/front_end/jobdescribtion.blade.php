@extends('layouts.main')

<header class="site-header header-style-4 dark">
		<!-- top bar -->
		<div class="top-bar">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="dez-topbar-left">
						<ul class="social-line text-center pull-right">
							<li><a href="javascript:void(0);"><i class="fa fa-map-marker"></i> <span> ALAMBAGH LUCKNOW 226005 </span> </a></li>
						</ul>
					</div>                        
					<div class="dez-topbar-right">
						<ul class="social-line text-center pull-right">
							<li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
							<li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
							<li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
							<li><a href="javascript:void(0);" class="fa fa-google-plus"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- top bar END-->
		<div class="main-bar">
			<div class="container header-contant-block">
				<div class="row">
					<div class="col-md-4">
						<div class="dez-logo "><a href="/"><img src="{{ asset('user/front_end/images/llogo.png')}}" width="193" height="89" alt=""></a></div>
					</div>
					<div class="col-md-8">
						<ul class="contact-info clearfix">
							<li>
								<h6 class="text-primary"><i class="fa fa-phone"></i> Call Us</h6>
								<span>+91 8899296385</span>
							</li>
							<li>
								<h6 class="text-primary"><i class="fa fa-envelope-o"></i> Send us an Email</h6>
								<span>Cedestination140@gmail.com</span>
							</li>
							<li>
								<h6 class="text-primary"><i class="fa fa-clock-o"></i> Opening Time</h6>
								<span>Mon -Sat: 7:00 - 17:00</span>
							</li>
							<li>
								<a class="site-button m-r15 text-white text-center btn-block">  
									<h5 class="m-a0">Call Toll Free</h5>
									<p class="m-a0">+91 8899296385</p>  
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>			<!-- main header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix ">
				<div class="slide-up">
					<div class="container clearfix bg-primary">
					
						<!-- website logo -->
						<div class="dez-logo mostion"><a href="/"><img src="{{ asset('user/front_end/images/llogo.png')}}" width="193" height="89" alt=""></a></div>
						
						<!-- nav toggle button -->
						<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
							<span></span>
						</button>
						
						<!-- extra nav -->
						<!-- main nav -->
						<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
							<ul class=" nav navbar-nav">
							<li class="active"> <a href="/">Home</a>
							</li>
							<li> <a href="/about">About</a>
								
							</li>
							<li> <a href="/front_end/govtjob">Government Job's</a>
									</li>
							<li> <a href="/front_end/privatejob">Private Job's</a>
								
							</li>
							<li> <a href="/front_end/iscode">IS CODE</a>
								
							</li>

							<li> <a href="/front_end/qa">QA/QC TESTING</a>
								
							</li>
							
							<li> <a href="/privacy">Privacy</a>
								
							</li>

							<li> <a href="/disclaimer">Disclaimer</a>
								
							</li>
							<li> <a href="/contact">Contact us </a>
								
							</li>
						</ul>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<!-- main header END -->
	</header>


    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/background/bg4.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Job Details</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Job Details</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-area">
            <!-- Career -->
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-lg-9 col-md-7 m-b30">
                        <h1 class="m-b20 m-t0">Openings </h1>
                        <div class="dez-separator bg-primary"></div>
                        <p><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                            standard dummy text ever since the  when an unknown printer took a galley of type and scrambled it to make a 
                            type specimen book. </strong></p>
                        <h2 class="m-t30 m-b10 ">Business Development Manager</h2>
                        <ul class="list-angle-right">
                            <li><strong>Work Status:</strong> Full time</li>
                            <li><strong>Qualifications:</strong> BE/B.Tech/MCA/BCA</li>
                            <li><strong>Experience:</strong> 1-3 Years</li>
                            <li><strong>Location:</strong> UK </li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                            text ever since the  when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is 
                            simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                            text ever since the  when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <h3>Our Offerings</h3>
                        <ul class="list-check-circle primary">
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</li>
                            <li>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</li>
                            <li>Printer took a galley of type and scrambled it to make a type specimen book. </li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy book. </li>
                            <li>Eorem ipsum dolor sit amete printing and typesetting industry. </li>
                        </ul>
                        <a href="#" class="site-button "><span>Apply Now</span><i class="fa fa-angle-right m-l10"></i></a>
                        <h2 class="m-t30 m-b10 ">Construction Development</h2>
                        <ul class="list-angle-right">
                            <li><strong>Work Status:</strong> Full time</li>
                            <li><strong>Qualifications:</strong> BE/B.Tech/MCA/BCA</li>
                            <li><strong>Experience:</strong> 1-3 Years</li>
                            <li><strong>Location:</strong> UK </li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                            text ever since the  when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply 
                            dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the  when an 
                            unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
                            the industry's standard dummy text ever since the  when an unknown printer took a galley of type and 
                            scrambled it to make a type specimen book. </p>
                        <h3>Our Offerings</h3>
                        <ul class="list-check-circle primary">
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</li>
                            <li>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</li>
                            <li>Printer took a galley of type and scrambled it to make a type specimen book. </li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy book. </li>
                            <li>Eorem ipsum dolor sit amete printing and typesetting industry. </li>
                        </ul>
                        <a href="#" class="site-button "><span>Apply Now</span><i class="fa fa-angle-right m-l10"></i></a> </div>
                    <!-- Left part start END -->
                    <!-- Right part start -->
                    <div class="col-lg-3 col-md-5">
                        <div class="row">
							<div class="col-lg-12 col-md-12 col-sm-6">
								<div class="icon-bx-wraper bx-style-1 p-a30 center m-b15">
									<div class="icon-bx-sm text-primary bg-white radius border-2 m-b20"> <a href="#" class="icon-cell"><i class="fa fa-user"></i></a> </div>
									<div class="icon-content">
										<h5 class="dez-tilte text-uppercase">Recent Highlights</h5>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod .</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-6">
								<div class="icon-bx-wraper bx-style-1 p-a30 center m-b15">
									<div class="icon-bx-sm text-primary bg-white radius border-2 m-b20"> <a href="#" class="icon-cell"><i class="fa fa-building-o"></i></a> </div>
									<div class="icon-content">
										<h5 class="dez-tilte text-uppercase">Recent Highlights</h5>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod .</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="icon-bx-wraper bx-style-1 p-a20 left">
									<div class="icon-bx-xs text-primary bg-white radius border-2 "> <a href="#" class="icon-cell"><i class="fa fa-code"></i></a> </div>
									<div class="icon-content">
										<h5 class="dez-tilte text-uppercase">Content title</h5>
										<p>Lorem ipsum dolor sit elit nonummy dolor is euismod end .</p>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <!-- Right part start END -->
                </div>
            </div>
            <!-- Career END -->
        </div>
        <!-- contact area END -->
    </div>
   
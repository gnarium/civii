@extends('layouts.main')
<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  @media only screen and (max-width:992px) 
  {
	.carousel-inner img {
    width: 100% !important;
	height:50% !important;
  }
  	  
  }
  
  </style>
<div class="page-wraper">
	<!-- header -->
	<header class="site-header header-style-4 dark">
		<!-- top bar -->
		<div class="top-bar">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="dez-topbar-left">
						<ul class="social-line text-center pull-right">
							<li><a href="javascript:void(0);"> <span> AN ISO 9001:2015 Certified Youtube Channel</span> </a></li>
						</ul>
					</div>                        
					<div class="dez-topbar-right">
						<ul class="social-line text-center pull-right">
							<li><a href="https://www.facebook.com/CIVIL-ENGG-Destination-100649208640067" class="fa fa-facebook"></a></li>
							<li><a href="https://t.me/civilenggdestination" class="fa fa-telegram"></a></li>
							<li><a href="https://www.linkedin.com/in/civilengineeringdestination-43255b1b6/" class="fa fa-linkedin"></a></li>
							<li><a href="https://www.instagram.com/civilengineeringdestination" class="fa fa-instagram"></a></li>
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
						<div class="dez-logo "><a href="/"><img src="{{ asset('user/front_end/images/logooo.png')}}" width="193" height="89" alt=""></a></div>
					</div>
					<div class="col-md-8">
  						 
					<ul class="contact-info clearfix" >
  						
					<li style="margin-left:100px;">
						
					<a class="site-button m-r15 text-white text-center btn-block" href="https://www.youtube.com/channel/UCzmD7qEkkg4ltvAp-bJhSWg?sub_confirmation=1" style="margin-top:-10px;">  
									<p class="m-a0">Follow Us On</p>   
					<p class="m-a0">Career Destination</p>
									<!-- <p class="m-a0">+91 8899296385</p>   -->
								</a>
								
							</li>
							<li>
							<a class="site-button text-white text-center " href="https://www.youtube.com/channel/UCQRvGmqysawXYkbs0VWoBeQ?sub_confirmation=1"style="margin-left:10px;margin-top:-10px;" >  
							<p class="m-a0">Follow Us On</p>		
							<p class="m-a0">Tech Civil Destination</p>
								</a>
							</li>
							<li>
							<a class="site-button text-white text-center " href="https://www.youtube.com/channel/UCngfRnQGedv6a3uB0APK6Mw?sub_confirmation=1"style="margin-left:10px;margin-top:0px;" >  
							<p class="m-a0">Follow Us On</p>		
							<p class="m-a0">Civil Engineering Destination</p>
								</a>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>		<!-- main header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix ">
				<div class="slide-up">
					<div class="container clearfix bg-primary">
					
						<!-- website logo --><div class="dez-logo mostion"><a href="/"><img src="{{ asset('user/front_end/images/logooo.png')}}" width="193" height="89" alt=""></a></div>
							
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
							<li> <a href="/govtjob">Government Job's</a>
									</li>
							<li> <a href="/privatejob">Private Job's</a>
								
							</li>
							<li> <a href="/iscode">IS CODE</a>
								
							</li>

							<li> <a href="/qa">QA/QC TESTING</a>
								
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

	
<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
	<img src="{{ asset('user/front_end/images/main-slider/slide1.jpg')}}" alt="Los Angeles" width="1100" height="500">
  </div>
  <div class="carousel-item">
	<img src="{{ asset('user/front_end/images/main-slider/slide6.jpg')}}" alt="Chicago" width="1100" height="500">
  </div>
  <div class="carousel-item">
	<img src="{{ asset('user/front_end/images/main-slider/slide4.jpg')}}" alt="New York" width="1100" height="500">
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>


&nbsp;
<div class="section-full bg-img-fix overlay-black-middle content-inner-1 about-uni" style="background-image:url({{ asset('user/front_end/images/background/bg2.jpg')}});">
            <div class="container" >
				<div class="row text-white" style="background-color:white">	
					<div class="col-lg-12 col-md-8">
						<h2 class="m-a0"style="text-align:center"><img src="{{ asset('user/front_end/images/tagline.png')}}" ></h2>
					</div>	
				</div>
			</div>	
		</div>
		
<div class="section-full bg-white content-inner">
            <!-- Product -->
            <div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-7 col-sm-12">
						<div class="text-center m-b50">
							<h2 class="m-t0">Latest  Job's</h2>
							<h2 class="m-t0">Government  Job's</h2>
							<div class="dez-separator-outer "><div class="dez-separator bg-primary style-skew"></div> </div>
						</div>
						<div class="row" id="masonry" >
                        @foreach($todoArr13 as $todo1)
							<div class="col-md-6 col-lg-4 col-sm-6 m-b30 product-item card-container">
								<div class="dez-box "style="background-color:#FDC716">
									<div class="dez-info p-a20">
										<h3 class="m-b0" style="text-align:center;"><span>{{$todo1->jobname}}</span></h3>
                                        <h6 class="m-b0">Company Name:</h6><span>{{$todo1->companyname}}</span>
                                        <h6 class="m-b0">Designation:</h6><span>{{$todo1->jobname}}</span>
                                        <h6 class="m-b0">Branch:</h6><span>{{$todo1->branch}}</span>
                                        <h6 class="m-b0">Eligibility:</h6><span>{{$todo1->eligibility}}</span>
                                        <h6 class="m-b0">Last Date:</h6><span>{{$todo1->lastdate}}</span>
										<div class="m-t10">
											<a href="{{url('/govtjob')}}/{{$todo1->jobtitileurl}}" class="site-button" style=background-color:white;color:black>View More</a>
										</div>
									</div>
									
								</div>
							</div>
							
                        @endforeach
						</div>
						<div class="m-t10" style="text-align:center;">
							<a href="/govtjob" target="_blank" class="site-button">View More Job's</a>
						</div>
						<div class="text-center m-b50">
							<h2 class="m-t0">Private  Job's</h2>
							<div class="dez-separator-outer "><div class="dez-separator bg-primary style-skew"></div> </div>
						</div>
						<div class="row" id="masonry">
                        @foreach($todoArr110 as $todo1)
						<div class="col-md-6 col-lg-4 col-sm-6 m-b30 product-item card-container">
								<div class="dez-box " style="background-color:#FDC716">
									<div class="dez-info p-a20">
										<h3 class="m-b0" style="text-align:center;"><span>{{$todo1->jobname}}</span></h3>
                                        <h6 class="m-b0">Company Name:</h6><span>{{$todo1->companyname}}</span>
                                       	<h6 class="m-b0">Designation:</h6><span>{{$todo1->jobname}}</span>
                                        <h6 class="m-b0">Branch:</h6><span>{{$todo1->branch}}</span>
                                        <h6 class="m-b0">Eligibility:</h6><span>{{$todo1->eligibility}}</span>
                                        <h6 class="m-b0">Last Date:</h6><span>{{$todo1->lastdate}}</span>
										<div class="m-t10">
											<a href="{{url('/privatejob')}}/{{$todo1->jobtitileurl}}" class="site-button" style=background-color:white;color:black>View More </a>
										</div>
										</div>
								</div>
							</div>
                        @endforeach
						</div>
						
						<div class="m-t10" style="text-align:center;">
							<a href="/privatejob" target="_blank" class="site-button">View More Job's</a>
						</div>
					</div>
                </div>
		   </div>
        </div>
    
	   
	   
	   
	   <div class="section-full text-white bg-img-fix content-inner overlay-black-middle" style="background-image:url('{{ asset('user/front_end/images/background/bg6.jpg')}}');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <div class="p-a30 text-white text-center border-3">
                            <div class="icon-lg m-b20"><i class="fa fa-building-o"></i></div>
                            <div class="counter text-white m-b5 h2">100</div>
                            <span>Government Job</span> 
						</div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <div class="p-a30 text-white text-center border-3">
                            <div class="icon-lg m-b20"><i class="fa fa-group"></i></div>
                            <div class="counter text-white m-b5 h2">100</div>
                            <span>Private Job</span> 
						</div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <div class="p-a30 text-white text-center border-3">
                            <div class="icon-lg m-b20"><i class="fa fa-slideshare"></i></div>
                            <div class="counter text-white m-b5 h2">20</div>
                            <span>ISCODE</span> 
						</div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b10">
                        <div class="p-a30 text-white text-center border-3">
                            <div class="icon-lg m-b20"><i class="fa fa-home"></i></div>
                            <div class="counter text-white m-b5 h2">20</div>
                            <span>QA/QC Testing</span> 
						</div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Stats End -->
		<!-- Our Gallery -->
		
		<div class="section-full box-shadow bg-white content-inner">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-12 text-center section-head">
                            <h2 class="h2">OUR SPECIALIZATIONS</h2>
							<div class="dez-separator-outer"><div class="dez-separator bg-primary style-liner"></div></div>
                            <div class="clear"></div>
                            <p class="m-b0">ENGINEERING DESTINATION IS THE MOST TRUSTED PLATFORM FOR ALL ENGINEERING STUDENTS AND PROFESSIONALS FROM ALL OVER INDIA.</p>
                        </div>    
					</div>		
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="icon-bx-wraper center m-b40 m-lr15">
								<div class="icon-bx-lg bg-secondary m-b20"> <span class="icon-cell"><i class="fa fa-graduation-cap text-primary" style="margin-top:25px;"></i></span>  </div>
								<div class="icon-content">
									<h5 class="dez-tilte text-uppercase">TRAINING</h5>
									<p>ALL FREE CERTIFICATE WEBINARS/TRAININGS UPDATES ARE PROVIDED FOR ALL ENGINEERING STUDENTS/GRADUATES.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="icon-bx-wraper center m-b40 m-lr15">
								<div class="icon-bx-lg bg-secondary m-b20"><span class="icon-cell"><i class="fa fa-leanpub text-primary" style="margin-top:25px;"></i></span>  </div>
								<div class="icon-content">
									<h5 class="dez-tilte text-uppercase">IS CODE</h5>
									<p>WE PROVIDE IS CODES FOR CIVIL ENGINEERING PROFESSIONALS AND STUDENTS FOR THEIR KNOWLEDGE AND UNDERSTANDING. </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="icon-bx-wraper center m-b40 m-lr15">
								<div class="icon-bx-lg bg-secondary m-b20">  <span class="icon-cell"><i class="fa fa-desktop text-primary" aria-hidden="true" style="margin-top:25px;"></i></span> </div>
								<div class="icon-content">
									<h5 class="dez-tilte text-uppercase">ONLINE COURSE</h5>
									<p>WE ALSO ORGAINZE FREE TRAINING COURSESE FOR IMPROVEMENT OF KNOWLEDGE AND MODERN CHANGES RELATED TO CONSTRUCTIONS </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="icon-bx-wraper center m-b40 m-lr15">
								<div class="icon-bx-lg bg-secondary m-b20">  <span class="icon-cell"><i class="fa fa-building text-primary" style="margin-top:25px;"></i></span> </div>
								<div class="icon-content">
									<h5 class="dez-tilte text-uppercase">JOB UPDATES</h5>
									<p>WE PROVIDE MOST TRUSTED JOB UPDATES FOR BOTH PRIVATE AND GOVERNMENT ORGANIZATIONS FROM ALL OVER INDIA.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="icon-bx-wraper center m-b40 m-lr15">
								<div class="icon-bx-lg bg-secondary m-b20">  <span class="icon-cell"><i class="fa fa-flag text-primary" style="margin-top:25px;"></i></span> </div>
								<div class="icon-content">
									<h5 class="dez-tilte text-uppercase">QA/QC Reports</h5>
									<p>WE PROVIDE ALL LAB TEST REPORT FORMATS FOR EASE AND COMFORT FOR ALL USERS </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="icon-bx-wraper center m-b10 m-lr15">
								<div class="icon-bx-lg bg-secondary m-b20">  <span class="icon-cell"><i class="fa fa-area-chart text-primary" style="margin-top:25px;"></i></span> </div>
								<div class="icon-content">
									<h5 class="dez-tilte text-uppercase">CURRENT AFFAIRS</h5>
									<p>ALL CURRENT AFFAIRS RELATED TO CONSTRUCTION AND CIVIL ENGINEERING ARE BEING UPDATED TIME TO TIME.</p>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
		
		<!-- Our Gallery END -->
		<!-- Testimonials blog -->
        <div class="section-full overlay-black-middle bg-img-fix content-inner-1" style="background-image:url('{{ asset('user/front_end/images/background/bg12.jpg')}}');">
            <div class="container">
                <div class="section-head text-white text-center">
                    <h2 class="h2">Success Stories</h2>
					<div class="dez-separator-outer"><div class="dez-separator bg-primary style-liner"></div></div>
                </div>
                <div class="section-content">
                    <div class="testimonial-two owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>Dear Sir,
               Myself Abhishek Sinha,I have mailed you before to inform you about my interview in Laxmi civil engineering services Pvt Ltd & you wish me well.Sir I have joined in LCESPL at chindwara, Madhya Pradesh at construction project of STP.I want to thank you from deep of my heart to make all this video's and helping students like us to get a job at this though time.
			 
			</p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-pic quote-left radius shadow"><img src="{{ asset('user/front_end/images/testimonials/1.png')}}" width="100" height="100" style="margin-top:-15px" alt=""></div>
                                    <strong class="testimonial-name">Abhishek Sinha</strong> <span class="testimonial-position">Student</span> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>My self Saltanat khan from Delhi. I get a next good opportunity in NCC Limited from your Channel. My duty start 10 March. I am so grateful for your support and kindness.I am saying 100 times Thankyou so much sir</p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-pic quote-left radius shadow"><img src="{{ asset('user/front_end/images/testimonials/2.png')}}" width="100" height="100" style="margin-top:-15px" alt=""></div>
                                    <strong class="testimonial-name">Saltanat khan</strong> <span class="testimonial-position">Student</span> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>Respected sir,With due regards I would like to inform you that I have been selected as an GAT in HPCL because of the notification posted by you on your channel.Thanks a lot sir this kind of hard work definately pays off.Attaching my award letter for your reference.</p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-pic quote-left radius shadow"><img src="{{ asset('user/front_end/images/testimonials/3.png')}}" width="100" style="margin-top:-15px" height="100" alt=""></div>
                                    <strong class="testimonial-name">Satyarth Pandey</strong> <span class="testimonial-position">Student</span> </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>Sir mujhe aj mail received hua hain ....I am selected for CSIR IMMT Bhubaneswar . thank you sir.</p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-pic quote-left radius shadow"><img src="{{ asset('user/front_end/images/testimonials/m.jpeg')}}" width="100" height="100" style="margin-top:-15px" alt=""></div>
                                    <strong class="testimonial-name">Saurav Paul</strong> <span class="testimonial-position">Student</span> </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
		<div class="section-full overlay-black-middle bg-img-fix content-inner-1" style="background-image:url('{{ asset('user/front_end/images/background/bg12.jpg')}}');">
            <div class="container">
                <div class="section-head text-white text-center">
                    <h2 class="h2">Follow Us On</h2>
					<div class="dez-separator-outer"><div class="dez-separator bg-primary style-liner"></div></div>
                </div>
                <div class="section-content">
                    <div class="testimonial-two owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>
										<a href="https://www.youtube.com/channel/UCQRvGmqysawXYkbs0VWoBeQ?sub_confirmation=1">
											<img src="{{ asset('user/front_end/images/testimonials/join.png')}}" width="100" height="100" style="margin-top:-15px" alt=""></a>
									</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>
										<a href="https://www.youtube.com/channel/UCQRvGmqysawXYkbs0VWoBeQ?sub_confirmation=1">
											<img src="{{ asset('user/front_end/images/testimonials/11.png')}}" width="100" height="100" style="margin-top:-15px" alt="">
										</a>
									</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>
										<a href="https://www.youtube.com/channel/UCzmD7qEkkg4ltvAp-bJhSWg?sub_confirmation=1">
											<img src="{{ asset('user/front_end/images/testimonials/12.png')}}" width="100" height="100" style="margin-top:-15px" alt="">
										</a>
									</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>
										<a href="https://www.youtube.com/channel/UCngfRnQGedv6a3uB0APK6Mw?sub_confirmation=1">
											<img src="{{ asset('user/front_end/images/testimonials/13.png')}}" width="100" height="100" style="margin-top:-15px" alt="">
										</a>
									</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   
		<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-7 col-sm-12">
						<br/>
						<div class="text-center m-b50">
							<h2 class="m-t0">Award's  & Achievements</h2>
							<div class="dez-separator-outer "><div class="dez-separator bg-primary style-skew"></div> </div>
						</div>
						<div class="row" id="masonry">
                			<div class="col-md-6 col-lg-3 col-sm-6 m-b30 product-item card-container">
									<div class="dez-thum-bx  dez-img-effect "><a href="{{ asset('user/front_end/images/gallery/Certificate 1-1.png')}}" target="_blank"> <img src="{{ asset('user/front_end/images/gallery/Certificate 1-1.png')}}" style="height:250px" alt=""></a>
									</div>
							</div>
							<div class="col-md-6 col-lg-3 col-sm-6 m-b30 product-item card-container">
									<div class="dez-thum-bx  dez-img-effect "> <a href="{{ asset('user/front_end/images/gallery/Certificate 2-1.png')}}" target="_blank"><img src="{{ asset('user/front_end/images/gallery/Certificate 2-1.png')}}" style="height:250px" alt=""></a>
									</div>
							</div>
							<div class="col-md-6 col-lg-3 col-sm-6 m-b30 product-item card-container">
									<div class="dez-thum-bx  dez-img-effect "><a href="{{ asset('user/front_end/images/gallery/Certificate 3-1.png')}}" target="_blank"> <img src="{{ asset('user/front_end/images/gallery/Certificate 3-1.png')}}"  style="height:250px" alt=""></a>
									</div>
							</div>
							<div class="col-md-6 col-lg-3 col-sm-6 m-b30 product-item card-container">
									<div class="dez-thum-bx  dez-img-effect "><a href="{{ asset('user/front_end/images/gallery/ISO certificate-1.png')}}" target="_blank"> <img src="{{ asset('user/front_end/images/gallery/ISO certificate-1.png')}}"style="height:250px" alt=""></a>
									</div>
							</div>
                 		</div>
						
					</div>
                </div>
		   </div>
         </div>

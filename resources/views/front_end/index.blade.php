@extends('layouts.main')
<meta name="description" content="Engineering Destination is the complete job solution for every engineer in India . Here we provide the latest government and private job updates .">

@section('content')	

	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKNSJHM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	

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
	<img src="{{ asset('user/front_end/images/main-slider/slide1.webp')}}" alt="Los Angeles" width="1100" height="500">
  </div>
  <div class="carousel-item">
	<img src="{{ asset('user/front_end/images/main-slider/slide6.webp')}}" alt="Chicago" width="1100" height="500">
  </div>
  <div class="carousel-item">
	<img src="{{ asset('user/front_end/images/main-slider/slide7.webp')}}" alt="New York" width="1100" height="500">
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


<div class="section-full bg-img-fix overlay-black-middle content-inner-1 about-uni" style="background-image:url({{ asset('user/front_end/images/bg2.jpg')}});">
            <div class="container" >
				<div class="row text-white" style="background-color:white">	
					<div class="col-lg-12 col-md-8">
						<h2 class="m-a0"style="text-align:center"><img src="{{ asset('user/front_end/images/tagline.webp')}}" alt="Complete Solution for Every Engineer" width="auto" height="auto"></h2>
					</div>	
				</div>
			</div>	
		</div>
		<div class="section-full bg-white content-inner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
                    <h1 class="m-b20 m-t0" style="text-align:center;">Online Courses and Webinars</h1>
                                        <p style="text-align:justify; color:black; font-size:20px; line-height:28px;">&#8226; Staad Pro (Brick Design) <a href="https://rzp.io/l/Staadprobrickdesign" style="color:red;" aria-hidden="true"> Click Here <sup> New </sup> </a></p>
                    <p style="text-align:justify; color:black; font-size:20px; line-height:28px;">&#8226; AutoCAD Beginner <a href="https://rzp.io/l/autocandbeginner1" style="color:red;" aria-hidden="true"> Click Here <sup> New </sup> </a></p>
                          <p style="text-align:justify; color:black; font-size:20px; line-height:28px;">&#8226; 6 Days Online Course On Staad Pro Basics With G+9 Building Design <a href="https://rzp.io/l/staadprobasics1" style="color:red;" aria-hidden="true"> Click Here </a></p>
                   		<p style="text-align:justify; color:black; font-size:20px; line-height:28px;">&#8226; Tunnel Design webinar certificate <a href="https://rzp.io/l/TunnelDesigning" style="color:red;" aria-hidden="true">Click Here </a></p>
					   		<p style="text-align:justify; color:black; font-size:20px; line-height:28px;">&#8226; 6 Days Online Crash Course On MS Office<a href="https://rzp.io/l/mswordbasics" style="color:red;" aria-hidden="true"> Click Here</a></p>

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
							<h2 class="m-t0">Latest  Jobs</h2>
                              
							<h2 class="m-t0">Government  Jobs</h2>
                               
                            
							<div class="dez-separator-outer "><div class="dez-separator bg-primary style-skew"></div> </div>
						</div>
						<div class="row" id="masonry" >
                        @foreach($todoArr13 as $todo1)
							<div class="col-md-6 col-lg-4 col-sm-6 m-b30 product-item card-container">
								<div class="dez-box "style="background-color:#FDC716">
									<div class="dez-info p-a20">
										<h3 class="m-b0" style="text-align:left;"><span style="color:black;">{{$todo1->jobtitle}}</span></h3>
                                        <h4 class="m-b0">Company Name:</h4><span style="color:black;">{{$todo1->companyname}}</span>
                                        <h4 class="m-b0">Designation:</h4><span style="color:black;">{{$todo1->jobname}}</span>
                                        <h4 class="m-b0">Branch:</h4><span style="color:black;">{{$todo1->branch}}</span>
                                        <h4 class="m-b0">Eligibility:</h4><span style="color:black;">{{$todo1->eligibility}}</span>
                                        <h4 class="m-b0">Last Date:</h4><span style="color:black;">{{$todo1->lastdate}}</span>
										<div class="m-t10">
											<a href="{{url('/government-jobs')}}/{{$todo1->jobtitileurl}}" class="site-button" rel="noopener noreferrer"  style=background-color:white;color:black>View More</a>
										</div>
									</div>
									
								</div>
							</div>
							
                        @endforeach
						</div>
						<div class="m-t10" style="text-align:center; color:black;">
							<a href="/government-jobs" rel="noopener noreferrer"  style="color:black;" class="site-button">View More Jobs</a>
						</div>
                   
						<div class="text-center m-b50">
							<h2 class="m-t0">Private  Jobs</h2>
                                                                     

							<div class="dez-separator-outer "><div class="dez-separator bg-primary style-skew"></div> </div>
						</div>
						<div class="row" id="masonry">
                        @foreach($todoArr110 as $todo1)
						<div class="col-md-6 col-lg-4 col-sm-6 m-b30 product-item card-container">
								<div class="dez-box " style="background-color:#FDC716">
									<div class="dez-info p-a20">
										<h3 class="m-b0" style="text-align:left;"><span style="color:black;">{{$todo1->jobtitle}}</span></h3>
                                        <h4 class="m-b0">Company Name:</h4><span style="color:black;">{{$todo1->companyname}}</span>
                                       	<h4 class="m-b0">Designation:</h4><span style="color:black;">{{$todo1->jobname}}</span>
                                        <h4 class="m-b0">Branch:</h4><span style="color:black;">{{$todo1->branch}}</span>
                                        <h4 class="m-b0">Eligibility:</h4><span style="color:black;">{{$todo1->eligibility}}</span>
                                        <h4 class="m-b0">Last Date:</h4><span style="color:black;">{{$todo1->lastdate}}</span>
										<div class="m-t10">
											<a href="{{url('/private-jobs')}}/{{$todo1->jobtitileurl}}" class="site-button" rel="noopener noreferrer" style=background-color:white;color:black>View More </a>
										</div>
										</div>
								</div>
							</div>
                        @endforeach
						</div>
						
						<div class="m-t10" style="text-align:center; color:black;" >
							<a href="/private-jobs" rel="noopener noreferrer"  style="color:black;" class="site-button" >View More Jobs</a>
						</div>
                      
					</div>
                </div>
		   </div>
        </div>
	   
	   <div class="section-full text-white bg-img-fix content-inner overlay-black-middle" style="background-image:url('{{ asset('user/front_end/images/bg6.jpg')}}');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <div class="p-a30 text-white text-center border-3">
                            <div class="icon-lg m-b20"><i class="fa fa-building-o"></i></div>
                            <div class=" text-white m-b5 h2">100</div>
                            <span>Government Jobs</span> 
						</div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <div class="p-a30 text-white text-center border-3">
                            <div class="icon-lg m-b20"><i class="fa fa-group"></i></div>
                            <div class=" text-white m-b5 h2">100</div>
                            <span>Private Jobs</span> 
						</div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <div class="p-a30 text-white text-center border-3">
                            <div class="icon-lg m-b20"><i class="fa fa-slideshare"></i></div>
                            <div class="text-white m-b5 h2">100</div>
                            <span>IS Codes</span> 
						</div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b10">
                        <div class="p-a30 text-white text-center border-3">
                            <div class="icon-lg m-b20"><i class="fa fa-home"></i></div>
                            <div class=" text-white m-b5 h2">10</div>
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
                    
                            <h2 class="h2">OUR EXPERTISE</h2>
							<div class="dez-separator-outer"><div class="dez-separator bg-primary style-liner"></div></div>
                            <div class="clear"></div>
                            <p class="m-b0" style="color:#767676;">ENGINEERING DESTINATION IS THE MOST TRUSTED PLATFORM FOR ALL ENGINEERING STUDENTS AND PROFESSIONALS FROM ALL OVER INDIA.</p>
                        </div>    
					</div>		
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="icon-bx-wraper center m-b40 m-lr15">
								<div class="icon-bx-lg bg-secondary m-b20"> <span class="icon-cell"><i class="fa fa-graduation-cap text-primary" style="margin-top:25px;"></i></span>  </div>
								<div class="icon-content">
									<h4 class="dez-tilte text-uppercase">TRAINING</h4>
									<p>ALL FREE CERTIFICATE WEBINARS/TRAININGS UPDATES ARE PROVIDED FOR ALL ENGINEERING STUDENTS/GRADUATES.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="icon-bx-wraper center m-b40 m-lr15">
								<div class="icon-bx-lg bg-secondary m-b20"><span class="icon-cell"><i class="fa fa-leanpub text-primary" style="margin-top:25px;"></i></span>  </div>
								<div class="icon-content">
									<h4 class="dez-tilte text-uppercase">IS CODES</h4>
									<p>WE PROVIDE IS CODES FOR CIVIL ENGINEERING PROFESSIONALS AND STUDENTS FOR THEIR KNOWLEDGE AND UNDERSTANDING. </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="icon-bx-wraper center m-b40 m-lr15">
								<div class="icon-bx-lg bg-secondary m-b20">  <span class="icon-cell"><i class="fa fa-desktop text-primary" aria-hidden="true" style="margin-top:25px;"></i></span> </div>
								<div class="icon-content">
									<h4 class="dez-tilte text-uppercase">ONLINE COURSES</h4>
									<p>WE ALSO ORGANISE FREE TRAINING COURSES FOR BOOSTING YOUR KNOWLEDGE AND MODERN CHANGES RELATED TO CONSTRUCTIONS </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="icon-bx-wraper center m-b40 m-lr15">
								<div class="icon-bx-lg bg-secondary m-b20">  <span class="icon-cell"><i class="fa fa-building text-primary" style="margin-top:25px;"></i></span> </div>
								<div class="icon-content">
									<h4 class="dez-tilte text-uppercase">JOB UPDATES</h4>
									<p>WE PROVIDE MOST TRUSTED JOB UPDATES FOR BOTH PRIVATE AND GOVERNMENT ORGANIZATIONS FROM ALL OVER INDIA.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="icon-bx-wraper center m-b40 m-lr15">
								<div class="icon-bx-lg bg-secondary m-b20">  <span class="icon-cell"><i class="fa fa-flag text-primary" style="margin-top:25px;"></i></span> </div>
								<div class="icon-content">
									<h4 class="dez-tilte text-uppercase">QA/QC Reports</h4>
									<p>WE PROVIDE ALL LAB TEST REPORT FORMATS FOR EASE AND COMFORT FOR ALL USERS </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="icon-bx-wraper center m-b10 m-lr15">
								<div class="icon-bx-lg bg-secondary m-b20">  <span class="icon-cell"><i class="fa fa-area-chart text-primary" style="margin-top:25px;"></i></span> </div>
								<div class="icon-content">
									<h4 class="dez-tilte text-uppercase">CURRENT AFFAIRS</h4>
									<p>ALL CURRENT AFFAIRS RELATED TO CONSTRUCTION AND CIVIL ENGINEERING ARE BEING UPDATED TIME TO TIME.</p>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
        

        <div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-7 col-sm-12">
						<br/>
						<div class="text-center m-b50">
                      
							<h2 class="m-t0">Success Stories</h2>
							<div class="dez-separator-outer "><div class="dez-separator bg-primary style-skew"></div> </div>
						</div>
						<div class="row" id="masonry" >
                			<div class="col-md-6 col-lg-3 col-sm-6 m-b30 product-item card-container" >
									<div class="dez-thum-bx  dez-img-effect "><a href="{{ asset('user/front_end/images/5.webp')}}" rel="noopener noreferrer" target="_blank"> <img src="{{ asset('user/front_end/images/5.webp')}}" style="height:300px;" class = "img-circle" alt=""></a>
									</div>
							</div>
							<div class="col-md-6 col-lg-3 col-sm-6 m-b30 product-item card-container" >
									<div class="dez-thum-bx  dez-img-effect "> <a href="{{ asset('user/front_end/images/6.webp')}}" rel="noopener noreferrer" target="_blank"><img src="{{ asset('user/front_end/images/6.webp')}}" style="height:300px;border-raduis:25%;" alt=""></a>
									</div>
							</div>
							<div class="col-md-6 col-lg-3 col-sm-6 m-b30 product-item card-container">
									<div class="dez-thum-bx  dez-img-effect "><a href="{{ asset('user/front_end/images/7.webp')}}" rel="noopener noreferrer" target="_blank"> <img src="{{ asset('user/front_end/images/7.webp')}}"  style="height:300px;border-raduis:25%;" alt=""></a>
									</div>
							</div>
							<div class="col-md-6 col-lg-3 col-sm-6 m-b30 product-item card-container">
									<div class="dez-thum-bx  dez-img-effect "><a href="{{ asset('user/front_end/images/9.webp')}}" rel="noopener noreferrer" target="_blank"> <img src="{{ asset('user/front_end/images/9.webp')}}"style="height:300px;border-raduis:25%;" alt=""></a>
									</div>
							</div>
                 		</div>
       			
					</div>
                </div>
		   </div>
         </div>
        
		<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-7 col-sm-12">
						<br/>
						<div class="text-center m-b50">
							<h2 class="m-t0">Follow Us On</h2>
     


							<div class="dez-separator-outer "><div class="dez-separator bg-primary style-skew"></div> </div>
						</div>
						<div class="row" id="masonry">
                			<div class="col-md-6 col-lg-3 col-sm-6 m-b30 product-item card-container">
									<div class="dez-thum-bx  dez-img-effect "><a href="https://www.youtube.com/channel/UCQRvGmqysawXYkbs0VWoBeQ?sub_confirmation=1" rel="noopener noreferrer" target="_blank"> <img src="{{ asset('user/front_end/images/An ISO Certified Youtube Channel.webp')}}" style="height:300px" alt="An ISO Certified Youtube Channel"></a>
									</div>
							</div>
							<div class="col-md-6 col-lg-3 col-sm-6 m-b30 product-item card-container">
									<div class="dez-thum-bx  dez-img-effect "> <a href="https://www.youtube.com/channel/UCQRvGmqysawXYkbs0VWoBeQ?sub_confirmation=1"rel="noopener noreferrer" target="_blank"><img src="{{ asset('user/front_end/images/Join Us On Career Destination.webp')}}" style="height:300px" alt="Join Us On Career Destination"></a>
									</div>
							</div>
							<div class="col-md-6 col-lg-3 col-sm-6 m-b30 product-item card-container">
									<div class="dez-thum-bx  dez-img-effect "><a href="https://www.youtube.com/channel/UCzmD7qEkkg4ltvAp-bJhSWg?sub_confirmation=1" rel="noopener noreferrer" target="_blank"> <img src="{{ asset('user/front_end/images/Join Us On Civil Engineering Destination.webp')}}"  style="height:300px" alt="Join Us On Civil Engineering Destination"></a>
									</div>
							</div>
							<div class="col-md-6 col-lg-3 col-sm-6 m-b30 product-item card-container">
									<div class="dez-thum-bx  dez-img-effect "><a href="https://www.youtube.com/channel/UCngfRnQGedv6a3uB0APK6Mw?sub_confirmation=1" rel="noopener noreferrer" target="_blank"> <img src="{{ asset('user/front_end/images/Join Us On Tech Civil Destination.webp')}}"style="height:300px" alt="Join Us On Tech Civil Destination"></a>
									</div>
							</div>
                            
                 		</div>
						
					</div>
                </div>
		   </div>
         </div>
        
		<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-7 col-sm-12">
						<br/>
						<div class="text-center m-b50">
							<h2 class="m-t0">Awards  & Achievements</h2>
              

							<div class="dez-separator-outer "><div class="dez-separator bg-primary style-skew"></div> </div>
						</div>
						<div class="row" id="masonry">
                			<div class="col-md-6 col-lg-3 col-sm-6 m-b30 product-item card-container">
									<div class="dez-thum-bx  dez-img-effect "><a href="{{ asset('user/front_end/images/gallery/Certificate 1_1-min.jpg')}}" rel="noopener noreferrer" target="_blank"> <img src="{{ asset('user/front_end/images/gallery/Certificate 1_1-min.jpg')}}" style="height:250px" alt="Certificate 1_1-min"></a>
									</div>
							</div>
							<div class="col-md-6 col-lg-3 col-sm-6 m-b30 product-item card-container">
									<div class="dez-thum-bx  dez-img-effect "> <a href="{{ asset('user/front_end/images/gallery/Certificate 2_1-min.jpg')}}" rel="noopener noreferrer" target="_blank"><img src="{{ asset('user/front_end/images/gallery/Certificate 2_1-min.jpg')}}" style="height:250px" alt="Certificate 2_1-min"></a>
									</div>
							</div>
							<div class="col-md-6 col-lg-3 col-sm-6 m-b30 product-item card-container">
									<div class="dez-thum-bx  dez-img-effect "><a href="{{ asset('user/front_end/images/gallery/Certificate 3_1-min.jpg')}}" rel="noopener noreferrer" target="_blank"> <img src="{{ asset('user/front_end/images/gallery/Certificate 3_1-min.jpg')}}"  style="height:250px" alt="Certificate 3_1-min"></a>
									</div>
							</div>
							<div class="col-md-6 col-lg-3 col-sm-6 m-b30 product-item card-container">
									<div class="dez-thum-bx  dez-img-effect "><a href="{{ asset('user/front_end/images/gallery/ISO certificate_1-min.jpg')}}" rel="noopener noreferrer" target="_blank"> <img src="{{ asset('user/front_end/images/gallery/ISO certificate_1-min.jpg')}}"style="height:250px" alt="ISO certificate_1-min"></a>
									</div>
							</div>
                 		</div>
						
					</div>
                </div>
		   </div>
         </div>
         @endsection

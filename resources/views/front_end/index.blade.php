@extends('layouts.main')
@section('content')	

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
	<!-- header -->
	
	

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


<div class="section-full bg-img-fix overlay-black-middle content-inner-1 about-uni" style="background-image:url({{ asset('user/front_end/images/background/bg2.jpg')}});">
            <div class="container" >
				<div class="row text-white" style="background-color:white">	
					<div class="col-lg-12 col-md-8">
						<h2 class="m-a0"style="text-align:center"><img src="{{ asset('user/front_end/images/tagline.webp')}}" ></h2>
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
                                 <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3775391448345901"
                                     crossorigin="anonymous"></script>
                                    <ins class="adsbygoogle"
                                     style="display:block; text-align:center;"
                                     data-ad-layout="in-article"
                                     data-ad-format="fluid"
                                     data-ad-client="ca-pub-3775391448345901"
                                     data-ad-slot="1194634110"></ins>
                                    <script>
                                     (adsbygoogle = window.adsbygoogle || []).push({});
                                    </script>

							<h2 class="m-t0">Government  Jobs</h2>
                                 <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3775391448345901"
                                         crossorigin="anonymous"></script>
                                        <ins class="adsbygoogle"
                                         style="display:block; text-align:center;"
                                         data-ad-layout="in-article"
                                         data-ad-format="fluid"
                                         data-ad-client="ca-pub-3775391448345901"
                                         data-ad-slot="1194634110"></ins>
                                        <script>
                                         (adsbygoogle = window.adsbygoogle || []).push({});
                                        </script>
                            
							<div class="dez-separator-outer "><div class="dez-separator bg-primary style-skew"></div> </div>
						</div>
						<div class="row" id="masonry" >
                        @foreach($todoArr13 as $todo1)
							<div class="col-md-6 col-lg-4 col-sm-6 m-b30 product-item card-container">
								<div class="dez-box "style="background-color:#FDC716">
									<div class="dez-info p-a20">
										<h3 class="m-b0" style="text-align:left;"><span>{{$todo1->jobtitle}}</span></h3>
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
							<a href="/govtjob" target="_blank" class="site-button">View More Jobs</a>
						</div>
                   
						<div class="text-center m-b50">
							<h2 class="m-t0">Private  Jobs</h2>
                                                                     <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3775391448345901"
                                 crossorigin="anonymous"></script>
                            <ins class="adsbygoogle"
                                 style="display:block; text-align:center;"
                                 data-ad-layout="in-article"
                                 data-ad-format="fluid"
                                 data-ad-client="ca-pub-3775391448345901"
                                 data-ad-slot="1194634110"></ins>
                            <script>
                                 (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>

							<div class="dez-separator-outer "><div class="dez-separator bg-primary style-skew"></div> </div>
						</div>
						<div class="row" id="masonry">
                        @foreach($todoArr110 as $todo1)
						<div class="col-md-6 col-lg-4 col-sm-6 m-b30 product-item card-container">
								<div class="dez-box " style="background-color:#FDC716">
									<div class="dez-info p-a20">
										<h3 class="m-b0" style="text-align:left;"><span>{{$todo1->jobtitle}}</span></h3>
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
							<a href="/privatejob" target="_blank" class="site-button">View More Jobs</a>
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
									<h5 class="dez-tilte text-uppercase">IS CODES</h5>
									<p>WE PROVIDE IS CODES FOR CIVIL ENGINEERING PROFESSIONALS AND STUDENTS FOR THEIR KNOWLEDGE AND UNDERSTANDING. </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="icon-bx-wraper center m-b40 m-lr15">
								<div class="icon-bx-lg bg-secondary m-b20">  <span class="icon-cell"><i class="fa fa-desktop text-primary" aria-hidden="true" style="margin-top:25px;"></i></span> </div>
								<div class="icon-content">
									<h5 class="dez-tilte text-uppercase">ONLINE COURSES</h5>
									<p>WE ALSO ORGANISE FREE TRAINING COURSES FOR BOOSTING YOUR KNOWLEDGE AND MODERN CHANGES RELATED TO CONSTRUCTIONS </p>
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
                                    <div class="testimonial-pic quote-left radius shadow"><img src="{{ asset('user/front_end/images/testimonials/3.webp')}}" width="100" height="100" style="margin-top:-15px" alt=""></div>
                                    <strong class="testimonial-name">Abhishek Sinha</strong> <span class="testimonial-position">Student</span> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>My self Saltanat khan from Delhi. I get a next good opportunity in NCC Limited from your Channel. My duty start 10 March. I am so grateful for your support and kindness.I am saying 100 times Thankyou so much sir</p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-pic quote-left radius shadow"><img src="{{ asset('user/front_end/images/testimonials/2.webp')}}" width="100" height="100" style="margin-top:-15px" alt=""></div>
                                    <strong class="testimonial-name">Saltanat khan</strong> <span class="testimonial-position">Student</span> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>Respected sir,With due regards I would like to inform you that I have been selected as an GAT in HPCL because of the notification posted by you on your channel.Thanks a lot sir this kind of hard work definately pays off.Attaching my award letter for your reference.</p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-pic quote-left radius shadow"><img src="{{ asset('user/front_end/images/testimonials/1.webp')}}" width="100" style="margin-top:-15px" height="100" alt=""></div>
                                    <strong class="testimonial-name">Satyarth Pandey</strong> <span class="testimonial-position">Student</span> </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>Sir mujhe aj mail received hua hain ....I am selected for CSIR IMMT Bhubaneswar . thank you sir.</p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-pic quote-left radius shadow"><img src="{{ asset('user/front_end/images/testimonials/5.webp')}}" width="100" height="100" style="margin-top:-15px" alt=""></div>
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
											<img src="{{ asset('user/front_end/images/testimonials/An ISO Certified Youtube Channel.webp')}}" width="100" height="100" style="margin-top:-15px" alt=""></a>
									</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>
										<a href="https://www.youtube.com/channel/UCQRvGmqysawXYkbs0VWoBeQ?sub_confirmation=1">
											<img src="{{ asset('user/front_end/images/testimonials/Join Us On Career Destination.webp')}}" width="100" height="100" style="margin-top:-15px" alt="">
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
											<img src="{{ asset('user/front_end/images/testimonials/Join Us On Civil Engineering Destination.webp')}}" width="100" height="100" style="margin-top:-15px" alt="">
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
											<img src="{{ asset('user/front_end/images/testimonials/Join Us On Tech Civil Destination.webp')}}" width="100" height="100" style="margin-top:-15px" alt="">
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
							<h2 class="m-t0">Awards  & Achievements</h2>
							<div class="dez-separator-outer "><div class="dez-separator bg-primary style-skew"></div> </div>
						</div>
						<div class="row" id="masonry">
                			<div class="col-md-6 col-lg-3 col-sm-6 m-b30 product-item card-container">
									<div class="dez-thum-bx  dez-img-effect "><a href="{{ asset('user/front_end/images/gallery/Certificate 1_1-min.jpg')}}" target="_blank"> <img src="{{ asset('user/front_end/images/gallery/Certificate 1_1-min.jpg')}}" style="height:250px" alt=""></a>
									</div>
							</div>
							<div class="col-md-6 col-lg-3 col-sm-6 m-b30 product-item card-container">
									<div class="dez-thum-bx  dez-img-effect "> <a href="{{ asset('user/front_end/images/gallery/Certificate 2_1-min.jpg')}}" target="_blank"><img src="{{ asset('user/front_end/images/gallery/Certificate 2_1-min.jpg')}}" style="height:250px" alt=""></a>
									</div>
							</div>
							<div class="col-md-6 col-lg-3 col-sm-6 m-b30 product-item card-container">
									<div class="dez-thum-bx  dez-img-effect "><a href="{{ asset('user/front_end/images/gallery/Certificate 3_1-min.jpg')}}" target="_blank"> <img src="{{ asset('user/front_end/images/gallery/Certificate 3_1-min.jpg')}}"  style="height:250px" alt=""></a>
									</div>
							</div>
							<div class="col-md-6 col-lg-3 col-sm-6 m-b30 product-item card-container">
									<div class="dez-thum-bx  dez-img-effect "><a href="{{ asset('user/front_end/images/gallery/ISO certificate_1-min.jpg')}}" target="_blank"> <img src="{{ asset('user/front_end/images/gallery/ISO certificate_1-min.jpg')}}"style="height:250px" alt=""></a>
									</div>
							</div>
                 		</div>
						
					</div>
                </div>
		   </div>
         </div>
         @endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script> 
		
		$(document).load(function() {
            $("body").children().css({
                "display": "none"
    		});
			$("footer").children().css({
				"display": "none"
			});
		});
		
	</script>

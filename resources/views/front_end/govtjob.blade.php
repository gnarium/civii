@extends('layouts.main')

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
		</div><!-- top bar END-->
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
				<!-- main header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix ">
				<div class="slide-up">
					<div class="container clearfix bg-primary">
					
						<!-- website logo -->
						<div class="dez-logo mostion"><a href="/"><img src="{{ asset('user/front_end/images/logooo.png')}}" width="193" height="89" alt=""></a></div>
												
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

<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url('{{ asset('user/front_end/images/background/bg4.jpg')}}');">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Government Job</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/">Home</a></li>
                    <li>Government Job</li>
                </ul>
            </div>
        </div>
    </div>

        <div class="section-full bg-white content-inner">
            <!-- Product -->
            <div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-7 col-sm-12">
						<div class="text-center m-b50">
							<h2 class="m-t0">Government  Job's</h2>
							<div class="dez-separator-outer "><div class="dez-separator bg-primary style-skew"></div> </div>
						</div>
						<div class="row" id="masonry">
                        @foreach($todoArr12 as $todo1)
							<div class="col-md-6 col-lg-4 col-sm-12 m-b30 product-item card-container">
								<div class="dez-box "style="background-color:#FDC716">
									<div class="dez-info p-a20">
										<h5 class="m-b0" style="text-align:left;"><span>{{$todo1->jobtitle}}</span></h5>
                                        <h6 class="m-b0" style="text-align:justify;">Company Name:</h6><span>{{$todo1->companyname}}</span>
                                        <h6 class="m-b0" style="text-align:justify;">Designation:</h6><span>{{$todo1->jobname}}</span>
                                        <h6 class="m-b0" style="text-align:justify;">Branch:</h6><span>{{$todo1->branch}}</span>
                                        <h6 class="m-b0" style="text-align:justify;">Eligibility:</h6><span>{{$todo1->eligibility}}</span>
                                        <h6 class="m-b0" style="text-align:justify;">Last Date:</h6><span>{{$todo1->lastdate}}</span>
										<div class="m-t10">
											<a href="{{url('/govtjob')}}/{{$todo1->jobtitileurl}}" class="site-button" style=background-color:white;color:black>For More Info</a>
										</div>
									</div>
								</div>
							</div>
                        @endforeach
						</div>
						
					</div>
                </div>
		   </div>
        </div>
    </div>
  

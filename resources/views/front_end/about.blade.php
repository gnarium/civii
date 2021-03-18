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
		</div>
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
									<p class="m-a0">Career Destination</p>
									<!-- <p class="m-a0">+91 8899296385</p>   -->
								</a>
								
							</li>
							<li>
							<a class="site-button text-white text-center " href="https://www.youtube.com/channel/UCQRvGmqysawXYkbs0VWoBeQ?sub_confirmation=1"style="margin-left:10px;margin-top:-10px;" >  
									<p class="m-a0">Tech Civil Destination</p>
								</a>
							</li>
							<li>
							<a class="site-button text-white text-center " href="https://www.youtube.com/channel/UCngfRnQGedv6a3uB0APK6Mw?sub_confirmation=1"style="margin-left:10px;margin-top:0px;" >  
									<p class="m-a0">Civil Engineering Destination</p>
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

<div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url('{{ asset('user/front_end/images/background/bg4.jpg')}}');">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">About Us </h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>About Us </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
		<!-- About Company -->
		  <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-content">
                    <div class="row">
						<div class="col-lg-5 m-b30 hidden-sm">
                            <div class="dez-thu "><img src="{{ asset('user/front_end/images/about.jpeg')}}" alt=""></div>
                        </div>
                        <div class="col-lg-7">
                            <h2 class="h2 m-t0"> About Engineering <span class="text-primary">Destination </span></h2>
                            <div class="dez-separator bg-primary"></div>
                            <div class="clear"></div>
                            <p style="text-align=justify;">ENGINEERING DESTINATION IS A PART OF CIVIL ENGINEERING DESTINATION OWNED BY Er. ANMOL DAINESH SINGH (A. D SINGH) GRADUTED B. TECH IN CIVIL ENGINEERING FROM CENTRAL GOVERNMENT UNIVERSITY. AFTER YEARS OF SERVICE AND EXPERIENCE IN BIG CONSTRUCTION COMPANYS AND GOVERNMENT ORGANIZATIONS I HAVE DECIDED TO WORK FOR THE IMPROVEMENT AND CAREER COUNCELLING OF ENGINEERING STUDENTS AND GRADUATES.
								CIVIL ENGINEERING DESTINATION IS AN ISO 9001:2015 CERTIFIED CHANNEL.</p>
                            <p class="m-b30" style="text-align:justify;">CIVIL ENGINEERING DESTINATION PROVIDES MOST AUTHENTIC AND LATEST JOB UPDATES FOR ALL ENGINEERING BRANCHES
								WE ALSO AIM AT COUNCELLING AND MOTIVATING STUDENTS AND GRADUATES FOR GETTING THE BEST JOB AS PER THEIR REQUIREMENTS BY SPECIAL VIDEO LESSIONS, SPECIAL COURSES AND INTERNSHIP PROGRAMMES ORGANIZED WITH TOP INSITITUONS AND ORGANIZATIONS OF INDIA
								TECH CIVIL DESTINATION IS ALSO A PART OF CIVIL ENGINEERING DESTINATION WHERE WE HELP STUDENTS THOSE WHO ARE PREPARING FOR COMPETATIVE GOVERNMENT EXAMS.</p>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                                        <div class="bg-primary icon-bx-xs m-b20 "> 
											<span class="icon-cell">
												<i class="fa fa-building-o"></i>
											</span> 
										</div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte ">Construction</h5>
                                            <p>Lorem ipsum dolor sit adipiscing sed diam nonummy end .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                                        <div class="bg-primary icon-bx-xs m-b20"> 
											<span class="icon-cell">
												<i class="fa fa-user"></i>
											</span> 
										</div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte ">Architecture</h5>
                                            <p>Lorem ipsum dolor sit adipiscing sed diam nonummy end .</p>
                                        </div>
                                    </div>
                                </div>
							</div>
							<div class="row"> 
                                <div class="col-md-6 col-lg-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                                        <div class="bg-primary icon-bx-xs m-b20"> 
											<span class="icon-cell">
												<i class="fa fa-truck "></i>
											</span> 
										</div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte ">Consulting</h5>
                                            <p>Lorem ipsum dolor sit adipiscing sed diam nonummy end .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b10">
                                        <div class="bg-primary icon-bx-xs m-b20 "> 
											<span class="icon-cell">
												<i class="fa fa-book"></i>
											</span> 
										</div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte ">Mechanical</h5>
                                            <p>Lorem ipsum dolor sit adipiscing sed diam nonummy end .</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
		    </div>
        

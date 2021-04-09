@extends('layouts.main')
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="" />
	<meta property="og:title" content="Engineering Destination"/>
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	<meta name="google-site-verification" content="ucTRTXLEo1IKrfkR8YoZtee9XpyNdwghNzkuH1hpZcU" />
    <script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());
  		gtag('config', 'G-R6MCW7DRNV');
	</script>
	
	<script src="{{ asset('user/front_end/js/combining.js')}}"></script>
	<link rel="canonical" href="https://www.engineeringdestination.com"/>
	<link rel="icon" href="{{ asset('user/front_end/images/favicon.ico')}}" type="image/x-icon" />
	
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<title>Engineering Destination</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/front_end/css/plugins.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('user/front_end/plugins/fontawesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('user/front_end/plugins/themify/themify-icons.css')}}">
	
	<link rel="stylesheet" type="text/css" href="{{ asset('user/front_end/css/style.min.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('user/front_end/css/skin/skin-1.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('user/front_end/css/templete.min.css')}}">
	
	<!-- Google Font -->
	<style>
	@import url('https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Roboto:100,300,400,500,700,900');
	</style>
	
	<!-- Revolution Slider Css -->
    <link rel="stychildren()lesheet" type="text/css" href="{{ asset('user/front_end/plugins/revolution/revolution/css/layers.css')}}">
	
	<link rel="stylesheet" type="text/css" href="{{ asset('user/front_end/plugins/revolution/revolution/css/settings.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('user/front_end/plugins/revolution/revolution/css/navigation.css')}}">

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
<div id="loading-area"></div>
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
                            <div class="dez-thu "><img src="{{ asset('user/front_end/images/A D SIR.png')}}" alt=""></div>
                        </div>
                        <div class="col-lg-7">
                            <h2 class="h2 m-t0"> About Engineering <span class="text-primary">Destination </span></h2>
                            <div class="dez-separator bg-primary"></div>
                            <div class="clear"></div>
                            <p class="m-b30"style="text-align:justify;">Engineering Destination is the official website of Civil Engineering Destination an ISO 9001:2015 certified channel owned by Anmol Dainesh Singh (A. D Singh) graduated B. Tech in civil engineering from central government university. Civil Engineering Destination was founded on 4 September 2020 After years of service and experience in big construction companies and government organizations and big projects like infrastructure, bridges, tunnels and roads projects.  I have decided to work for the improvement and career counselling of engineering students and graduates.</p><p class="m-b30"style="text-align:justify;">Engineering destination provides all jobs details and links. other helpful information like IS codes and QA/QC test report formats are also available on our website. We also provide current affairs related to engineering and technical classes for all competitive exams in India.</p>
                            <p class="m-b30" style="text-align:justify;">Civil Engineering destination is an ISO 9001:2015 certified channel.
							<p class="m-b30" style="text-align:justify;">Engineering destination is the most trusted platform for all engineering students and professionals. We have members of all age groups as well as from different fields of engineering looking for better jobs and career counselling. Civil engineering destination provides most authentic and latest job updates for all engineering branches.We also aim at counselling and motivating students and graduates for getting the best job as per their requirements by special video sessions, special courses and internship programs organized with top institutions and organizations of India.Career Destination by A.D Singh and tech civil destination is also a part of civil engineering destination where we help students those who are preparing for competitive government exams.Career Destination by A.D Singh is a secondary channel and a wing of civil engineering destination where we provide all seminars and knowledge of civil engineering certificate programs and training sessions conducted by various organizations of India and various other helpful information is also provided.</p>
							<p class="m-b30" style="text-align:justify;">A.D Singh has specializations in many engineering fields.In the world of construction an engineer has to master some of the main construction related works are as under</p>
							<div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30" style="height: 150px;">
                                        <div class="bg-primary icon-bx-xs m-b20 "> 
											<span class="icon-cell">
												<i class="fa fa-building-o"></i>
											</span> 
										</div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte " style="text-align:justify">Civil engineering</h5>
                                            <p style="text-align:justify">Related to construction, planning and designing of all infrastructures, bridge and roads projects.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30" style="height: 150px;">
                                        <div class="bg-primary icon-bx-xs m-b20"> 
											<span class="icon-cell">
												<i class="fa fa-user"></i>
											</span> 
										</div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte" style="text-align:justify">Finishing engineer</h5>
                                            <p style="text-align:justify">Designing and detailing of external and internal appearance of any construction project.</p>
                                        </div>
                                    </div>
                                </div>
							</div>
							<div class="row"> 
                                <div class="col-md-6 col-lg-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30" style="height: 150px;">
                                        <div class="bg-primary icon-bx-xs m-b20"> 
											<span class="icon-cell">
												<i class="fa fa-truck "></i>
											</span> 
										</div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte" style="text-align:justify">Architecture</h5>
                                            <p style="text-align:justify">Designing of landscape and planning of towns and maintenance of buildings.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b10" style="height: 150px;">
                                        <div class="bg-primary icon-bx-xs m-b20 "> 
											<span class="icon-cell">
												<i class="fa fa-book"></i>
											</span> 
										</div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte" style="text-align:justify">Green building</h5>
                                            <p style="text-align:justify">Building that reduces the negative impacts on environment using latest technologies.</p>
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
        

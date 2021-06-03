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
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKNSJHM');</script>
<!-- End Google Tag Manager -->
	<meta name="google-site-verification" content="ucTRTXLEo1IKrfkR8YoZtee9XpyNdwghNzkuH1hpZcU" />
	
	<script src="{{ asset('user/front_end/js/combining.js')}}"></script>
	<link rel="canonical" href="https://www.engineeringdestination.com"/>
	<link rel="icon" href="{{ asset('user/front_end/images/Engineering Destination Favicon .webp')}}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/Engineering Destination Favicon .webp" />
	
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
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKNSJHM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
							<li> <a href="/govtjob">Government Jobs</a>
									</li>
							<li> <a href="/privatejob">Private Jobs</a>
								
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
                    <h1 class="text-white">Job Details</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/">Home</a></li>
                    <li>Job Details</li>
                </ul>
            </div>
        </div>
    
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-area">
            <!-- Career -->
            <div class="container">
                <div class="row" >
				    <!-- Left part start -->
                    <div class="col-lg-12 col-md-7 m-b30" style="text:align:justify;">
                        <h1 class="m-b20 m-t0">Job Describtion </h1>
                        <div class="dez-separator bg-primary"></div>
                        <p><strong>{!!$todoArr14->describtion!!}</strong></p>
                     </div>
            	</div>
            <!-- Career END -->
        </div>
        <!-- contact area END -->
    </div>
   

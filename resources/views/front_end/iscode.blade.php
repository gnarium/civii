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
	<link rel="icon" href="{{ asset('user/front_end/images/fav.ico')}}" type="image/x-icon" />
	
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
								
							</li><li> <a href="/iscode">IS CODE</a>
								
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
                    <h1 class="text-white">ISCODE </h1>
                </div>
            </div>
        </div>
		<div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/">Home</a></li>
                    <li>ISCODE</li>
                </ul>
            </div>
        </div>
     
		<div class="content-area">
        <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-lg-12 col-md-7" >
                        <h1 class="m-b20 m-t0">IS CODE</h1>
                        <div class="dez-separator bg-primary"></div>
                        <p style="text-align:justify;">Indian Standard Codes IS codes are pre-defined set of instructions and information provided by government of India for different types of construction, repair and maintenance works in India. IS codes are released in different years containing essential and important information for execution of any project. All construction works are done according to them. IS codes are set of information that are observed by engineers from there experience and knowledge. Some of the information are only practical knowledge and does not have any proof or theory. They are tentative and are revised over time to time. All is codes are downloaded for government websites with proper authority. We do not violate any rule or law. This Is for knowledge purpose only.</p>
						
                        <p style="text-align:justify;">IS codes are also touched in engineering college for understanding and better knowledge of construction projects and understanding concepts of civil engineering by students.IS codes are revised in every few years. IS codes are updated with respect to time with new methods and details as per new construction methods.</p>
						<p style="text-align:justify;">All projects like infrastructure, bridges, tunnels, roads have some common and some different types of testing to check their quality standards. Engineering students can also view them for better understanding and knowledge of civil engineering concepts and gaining new skills.</p>
						<p style="text-align:justify;">However. It is very difficult to find all is codes on a single platform. In engineering destination, we provide all is codes for students and professionals. All versions of all IS codes and revised editions are uploaded in this page where you can read them, view them and even download option is also provided for easy convenience of the user. All IS codes are copy right free and can be used for any purpose. No fees or any monthly subscription is required to view or download any IS code.</p>						
        				<b>Note:</b><p style="text-align:justify;"> If you need any other IS code then please contact us on our e-mail address or on our contact page. We will try to provide all your needed is code as soon as possible. For any related query or any problem contact us on our contact us page on website.</p>
						</div>
                    <!-- Left part start END -->
                </div>
            </div>
        
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <!-- Breadcrumb row END -->
        <section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
 <div class="container">
    <div class="row">
	<form class="form-inline my-2 my-lg-0 mx-auto" style="width: 100%;" action="{{route('search')}}">
        @csrf
        <input class="form-control search" type="search" placeholder="Search " aria-label="Search" name="search" style="width: 80%;">
        <button type="submit" class="btn btn-success my-2 my-sm-0 search-button" href="" style="border: 0px solid red;">
        <i class="fa fa-search"></i>
        </button>
      </form>
    </div>
</div>   
<div class="container">
      <table class="table container" >
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th> CODE</th>
            <th>ISCODE Describtion</th>
            
           </tr>
        </thead>
        @foreach($todoArr as $todo)
            <tbody>
                <tr>
                    <td data-breakpoints="xs">{{$todo->id}}</td>
                    <td><a href="{{$todo->url}}">{{$todo->iscode}}</a></td>
                    <td>{{$todo->isdescribtion}}</td>
                </tr>
       </tbody>
        @endforeach
    </table>
    
    </div>
  </div>
</div>
</section>

    </div>

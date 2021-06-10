@extends('layouts.main')
@section('content')
   <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url('{{ asset('user/front_end/images/background/bg4.jpg')}}');">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Contact Us</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/">Home</a></li>
                    <li>Contact us</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
                <div class="section-full content-inner bg-white contact-style-1">
			<div class="container">
                <div class="row">
				@include('front_end.flash')
        
                    <!-- Left part start -->
                    <div class="col-lg-8">
                        <div class="p-a30 bg-gray clearfix m-b30 ">
							<h2>Send Message Us</h2>
							<form method="post"  action="/contact">
							{{ csrf_field()}}
							    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                                <input name="Name" type="text" required class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        	    <input name="Email" type="email" class="form-control" required  placeholder="Your Email Id" >
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                                <input name="Phone" type="text" required class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                                <input name="Subject" type="text" required class="form-control" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                                <textarea name="Msg" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
                                        </div>
                                    </div>
									<div class="col-md-12">
									<button type="submit" name="submit" class="site-button"><span>Submit</span></button>
					                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
                    <!-- right part start -->
                    <div class="col-lg-4 d-flex">
                        <div class="p-a30 m-b30 border-1 contact-area align-self-stretch">
							<h2 class="m-b10">Quick Contact</h2>
							<p>If you have any questions simply use the following contact details.</p>
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dez-tilte">Address:</h6>
                                        <p>Alambagh Lucknow 226005</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dez-tilte">Email:</h6>
                                        		
                                        <p style="font-size:13px;">engineeringdestination140@gmail.com<b style="text-align:left;"><br/>Note:</b>  We do not provide job , please do not send your cv or any other document .This is for informative purpose only.</p>
                                    </div>
                                </li>
                                
                            </ul>
							<div class="m-t20">
								<ul class="dez-social-icon dez-social-icon-lg">
									<li><a href="https://www.facebook.com/CIVIL-ENGG-Destination-100649208640067" class="fa fa-facebook bg-primary"></a></li>
									<li><a href="https://t.me/civilenggdestination" class="fa fa-telegram bg-primary"></a></li>
							<li><a href="https://www.linkedin.com/in/civilengineeringdestination-43255b1b6/" class="fa fa-linkedin bg-primary"></a></li>
							<li><a href="https://www.instagram.com/civilengineeringdestination" class="fa fa-instagram bg-primary"></a></li>
		
								</ul>
							</div>
                        </div>
                    </div>
                    <!-- right part END -->
                </div>
            </div>
        </div>
        <!-- contact area  END -->
    </div>
@endsection

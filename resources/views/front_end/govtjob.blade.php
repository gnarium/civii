
@extends('layouts.main')
<meta property="og:title" content="Government Jobs"/>

<meta name="description" content="Here you can get the latest engineering government jobs updates in India in 2021 , all government  jobs are well updated and verified .">

@section('content')
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKNSJHM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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
                    <li><a href="/" style="color:black;">Home</a></li>
                    <li>Government Job</li>
                </ul>
            </div>
        </div>
    </div>
    
        <div class="section-full bg-white content-inner">
            <!-- Product -->
            <div class="container">
				<div class="row">
					<div class="col-lg-10 col-md-7 col-sm-12">
						<div class="text-center m-b50">
							<h2 class="m-t0">Government  Jobs</h2>
                                       
							<div class="dez-separator-outer "><div class="dez-separator bg-primary style-skew"></div> </div>
						</div>
						<div class="row" id="masonry">
                        @foreach($todoArr12 as $todo1)
							<div class="col-md-6 col-lg-4 col-sm-12 m-b30 product-item card-container">
								<div class="dez-box "style="background-color:#FDC716">
									<div class="dez-info p-a20" style="margin-left:-10px;">
										<h3 class="m-b0" ><span>{{$todo1->jobtitle}}</span></h3>
                                        &nbsp;
                                        <h4 class="m-b0">Company Name:</h4><span style="color:black;">{{$todo1->companyname}}</span>
                                        <h4 class="m-b0">Designation:</h4><span style="color:black;">{{$todo1->jobname}}</span>
                                        <h4 class="m-b0">Branch:</h4><span style="color:black;">{{$todo1->branch}}</span>
                                        <h4 class="m-b0">Eligibility:</h4><span style="color:black;">{{$todo1->eligibility}}</span>
                                        <h4 class="m-b0">Last Date:</h4><span style="color:black;">{{$todo1->lastdate}}</span>
										<div class="m-t10">
											<a href="{{url('/government-jobs')}}/{{$todo1->jobtitileurl}}" class="site-button" rel="noopener noreferrer"  style=background-color:white;color:black>For More Info</a>
										</div>
									</div>
								</div>
							</div>
                        @endforeach
                        <div class="col-sm-10 mx-auto text-center">
                        {{ $todoArr12->links()}}
                        </div>
                        
						</div>
						
					</div>
                    
                </div>
                 
		   </div>
        </div>
    </div>
    @endsection
   

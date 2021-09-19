<meta property="og:title" content="Latest engineering private jobs in india-Engineering Destination"/>
<meta name="description" content="Here you can get the latest engineering government jobs updates in India in 2021 , all private  jobs are well updated and verified .">

@extends('layouts.main')
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
                    <h1 class="text-white">Private Job</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/">Home</a></li>
                    <li>Private Job</li>
                </ul>
            </div>
        </div>
    </div>
    
        <div class="section-full bg-white content-inner">
                           
            <!-- Product -->
            <div class="container">
             <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- private 1 -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-3775391448345901"
                     data-ad-slot="5930418023"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                </script>

				<div class="row">
					<div class="col-lg-10 col-md-7 col-sm-12">
						<div class="text-center m-b50">
							<h2 class="m-t0">Private Jobs</h2>
                           <div class="dez-separator-outer "><div class="dez-separator bg-primary style-skew"></div> </div>
						</div>
                        <div class="row" id="masonry">
                        @foreach($todoArr122 as $todo1)
							<div class="col-md-6 col-lg-4 col-sm-6 m-b30 product-item card-container">
								<div class="dez-box "style="background-color:#FDC716">
									<div class="dez-thum-bx  dez-img-effect "> 
									</div>
									<div class="dez-info p-a20 ">
										<h3 class="m-b0" style="text-align:left;"><span style="color:black;">{{$todo1->jobtitle}}</span></h3>
                                        <h4 class="m-b0">Company Name:</h4><span style="color:black;">{{$todo1->companyname}}</span>
                                        <h4 class="m-b0">Designation:</h4><span style="color:black;">{{$todo1->jobname}}</span>
                                        <h4 class="m-b0">Branch:</h4><span style="color:black;">{{$todo1->branch}}</span>
                                        <h4 class="m-b0">Eligibility:</h4><span style="color:black;">{{$todo1->eligibility}}</span>
                                        <h4 class="m-b0">Last Date:</h4><span style="color:black;">{{$todo1->lastdate}}</span>
										<div class="m-t10">
											<a href="{{url('/privatejob')}}/{{$todo1->jobtitileurl}}" rel="noopener noreferrer" class="site-button" style=background-color:white;color:black>For More Info</a>
										</div>
									</div>
								</div>
                                
							</div>
                        
                        @endforeach
                        <div class="col-sm-10 mx-auto  text-center ">
                            {{ $todoArr122->links()}}

                        </div>
                        
                
                        </div>
						</div>
                        <div class="col-lg-2">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <!-- Private 3 -->
                                <ins class="adsbygoogle"
                                     style="display:block"
                                     data-ad-client="ca-pub-3775391448345901"
                                     data-ad-slot="9091777725"
                                     data-ad-format="auto"
                                     data-full-width-responsive="true"></ins>
                                <script>
                                     (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <!-- Private 3 -->
                                <ins class="adsbygoogle"
                                     style="display:block"
                                     data-ad-client="ca-pub-3775391448345901"
                                     data-ad-slot="9091777725"
                                     data-ad-format="auto"
                                     data-full-width-responsive="true"></ins>
                                <script>
                                     (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                                
                        </div>
                        
                </div>
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Private 2 -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-3775391448345901"
                     data-ad-slot="1991173013"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                </script>

		   </div>
        </div>
        
    </div>
  
@endsection

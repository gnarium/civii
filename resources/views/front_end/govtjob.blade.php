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
					<div class="col-lg-10 col-md-7 col-sm-12">
						<div class="text-center m-b50">
							<h2 class="m-t0">Government  Jobs</h2>
                                       <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                        <!-- Gov 1 -->
                                        <ins class="adsbygoogle"
                                             style="display:block"
                                             data-ad-client="ca-pub-3775391448345901"
                                             data-ad-slot="6121989717"
                                             data-ad-format="auto"
                                             data-full-width-responsive="true"></ins>
                                        <script>
                                             (adsbygoogle = window.adsbygoogle || []).push({});
                                        </script>
							<div class="dez-separator-outer "><div class="dez-separator bg-primary style-skew"></div> </div>
						</div>
						<div class="row" id="masonry">
                        @foreach($todoArr12 as $todo1)
							<div class="col-md-6 col-lg-4 col-sm-12 m-b30 product-item card-container">
								<div class="dez-box "style="background-color:#FDC716">
									<div class="dez-info p-a20" style="margin-left:-10px;">
										<h3 class="m-b0" ><span>{{$todo1->jobtitle}}</span></h3>
                                        &nbsp;
                                        <h4 class="m-b0">Company Name:</h4><span>{{$todo1->companyname}}</span>
                                        <h4 class="m-b0">Designation:</h4><span>{{$todo1->jobname}}</span>
                                        <h4 class="m-b0">Branch:</h4><span>{{$todo1->branch}}</span>
                                        <h4 class="m-b0">Eligibility:</h4><span>{{$todo1->eligibility}}</span>
                                        <h4 class="m-b0">Last Date:</h4><span>{{$todo1->lastdate}}</span>
										<div class="m-t10">
											<a href="{{url('/govtjob')}}/{{$todo1->jobtitileurl}}" class="site-button" style=background-color:white;color:black>For More Info</a>
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
                    <div class="col-lg-2">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- GOV 3 -->
                        <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-3775391448345901"
                        data-ad-slot="5344104401"
                        data-ad-format="auto"
                        data-full-width-responsive="true"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- GOV 3 -->
                        <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-3775391448345901"
                        data-ad-slot="5344104401"
                        data-ad-format="auto"
                        data-full-width-responsive="true"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>

                    </div>
                </div>
                 <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Gov 2 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3775391448345901"
     data-ad-slot="1421355042"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

		   </div>
        </div>
    </div>
    @endsection
   

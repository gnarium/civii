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
                    <h1 class="text-white">Job Details</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/" style="color:black;">Home</a></li>
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
                    <div class="col-lg-9 col-md-7 m-b30" style="text:align:justify;">
                        <h1 class="m-b20 m-t0">Job Describtion </h1>
                        <div class="dez-separator bg-primary"></div>
                        
                                                    <p><strong>{!!$todoArr14->describtion!!}</strong></p>
                                                   
                     </div>
                     
            	</div>
            <!-- Career END -->
        </div>
        <!-- contact area END -->
    </div>
   @endsection

@extends('layouts.main')

@section('content')
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
                <div class="row">
				    <!-- Left part start -->
                    <div class="col-lg-12 col-md-7 m-b30">
                        <h1 class="m-b20 m-t0">Job Describtion </h1>
                        <div class="dez-separator bg-primary"></div>
                        <p><strong>{!!$todoArr141->describtion!!}</strong></p>
                       
    			</div>
            </div>
            <!-- Career END -->
        </div>
        <!-- contact area END -->
    </div>
   
@endsection

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
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Is code 1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3775391448345901"
     data-ad-slot="9655068286"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
                        <p style="text-align:justify;">Indian Standard Codes IS codes are pre-defined set of instructions and information provided by government of India for different types of construction, repair and maintenance works in India. IS codes are released in different years containing essential and important information for execution of any project. All construction works are done according to them. IS codes are set of information that are observed by engineers from there experience and knowledge. Some of the information are only practical knowledge and does not have any proof or theory. They are tentative and are revised over time to time. All is codes are downloaded for government websites with proper authority. We do not violate any rule or law. This Is for knowledge purpose only.</p>
						
                        <p style="text-align:justify;">IS codes are also touched in engineering college for understanding and better knowledge of construction projects and understanding concepts of civil engineering by students.IS codes are revised in every few years. IS codes are updated with respect to time with new methods and details as per new construction methods.</p>
						<p style="text-align:justify;">All projects like infrastructure, bridges, tunnels, roads have some common and some different types of testing to check their quality standards. Engineering students can also view them for better understanding and knowledge of civil engineering concepts and gaining new skills.</p>
						<p style="text-align:justify;">However. It is very difficult to find all is codes on a single platform. In engineering destination, we provide all is codes for students and professionals. All versions of all IS codes and revised editions are uploaded in this page where you can read them, view them and even download option is also provided for easy convenience of the user. All IS codes are copy right free and can be used for any purpose. No fees or any monthly subscription is required to view or download any IS code.</p>						
        				<b>Note:</b><p style="text-align:justify;"> If you need any other IS code then please contact us on our e-mail address or on our contact page. We will try to provide all your needed is code as soon as possible. For any related query or any problem contact us on our contact us page on website.</p>
						<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-3775391448345901"
     data-ad-slot="8341986619"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
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
<div class="row">
<div class="col-lg-9">
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
    <div class="col-lg-3">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- IS Code 4 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3775391448345901"
     data-ad-slot="7981866296"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
    </div>
    </div>
  </div>
</div>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- IS Code 3 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3775391448345901"
     data-ad-slot="8138860532"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</section>

    </div>
   
@endsection

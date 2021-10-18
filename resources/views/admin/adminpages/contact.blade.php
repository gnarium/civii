@extends ('admin.adminlayouts.adminmain')
<meta name="robots" content="noindex">
<body>
	<header class="header fixed-top clearfix" style="background-color:#FDC716">
<!--logo start-->
<div class="brand1">
    <a href="/admin/adminindex" class="logo">
	<p>Engineering Destination Admin Panel</p>
	</a>

		
</div>
<!--logo end-->
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{{ asset ('admin/images/2.png')}}">
                <span class="username">Engineering Destination</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="#"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
       
    </ul>
</div>
</header>

<section id="container"style="background-color:#12151a;">
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="/admin/adminindex">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
            <li>
                    <a href="/admin/adminpages/govtjob">
                        <i class="fa fa-bullhorn"></i>
                        <span>Add Government Job's </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Add Private Job's</span>
                    </a>
                    <ul class="sub">
                        <li><a href="/admin/adminpages/privatejob">Add Private Job's</a></li>
                     </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>QA/QC Testing</span>
                    </a>
                    <ul class="sub">
                        <li><a href="/admin/adminpages/qa">Add QA/QC Testing</a></li>
				    </ul>
                </li>
                <li>
                    <a href="/admin/adminpages/iscode">
                        <i class="fa fa-user"></i>
                        <span>Add ISCODE </span>
                    </a>
                </li>
                <li>
                    <a href="/admin/adminpages/contact">
                        <i class="fa fa-user"></i>
                        <span>Contact</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
<div class="container">
      <table class="table container" style="width:700px;margin-left:15px;">
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th> Name</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Subject</th>
            <th>Message</th>
           </tr>
        </thead>
        @foreach($todoArr111 as $todo)
            <tbody>
                <tr>
                    <td data-breakpoints="xs">{{$todo->id}}</td>
                    <td><a href="{{$todo->name}}">{{$todo->name}}</a></td>
                    <td><a href="{{$todo->email}}">{{$todo->email}}</td>
                    <td><a href="{{$todo->phone}}">{{$todo->phone}}</td>
                    <td><a href="{{$todo->subject}}">{{$todo->subject}}</td>
                    <td><a href="{{$todo->msg}}">{{$todo->msg}}</td>
                </tr>
       </tbody>
        @endforeach
    </table>
    
    </div>
  </div>
</div>
</div>
</div>
</section>
</section>

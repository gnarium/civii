@extends ('admin.adminlayouts.adminmain')
<meta name="robots" content="noindex">
<body >
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
        <!-- <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
         --><!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username">Engineering Destination</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="/admin/login"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>

<section id="container">
<!--header start-->
<!--sidebar start-->
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
		<!-- //market-->
		<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Add Government Job's</h4>
					<h3>13,500</h3>
					
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Add Private Job's</h4>
						<h3>1,250</h3>
						
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-2 market-update-right">
						<i class="fa fa-usd"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Number of ISCODE Add <s></s></h4>
						<h3>1,500</h3>
						
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Number of QA/QC Testing</h4>
						<h3>1,500</h3>
					
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>	
		<!-- //market-->
		
	<!--//agileinfo-grap-->

				</div>
			</div>
		</div>
</section>
 </body>
</html>

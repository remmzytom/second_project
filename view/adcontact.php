<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from radixtouch.com/templates/admin/redstar/source/dark/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 23:28:31 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="RedstarHospital" />
	<title>Redstar Hospital | Bootstrap Responsive Hospital Admin Template</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"
		type="text/css" />
	<!-- icons -->
	<link href="adminassets/bundles/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--bootstrap -->
	<link href="adminassets/bundles/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="adminassets/bundles/material/material.min.css">
	<link rel="stylesheet" href="css/material_style.css">
	<!-- Theme Styles -->
	<link href="css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="css/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color logo-dark dark-theme">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="index.html">
						<span class="logo-icon fa fa-stethoscope fa-rotate-45"></span>
						<span class="logo-default">REDSTAR</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				<form class="search-form-opened" action="#" method="GET">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search..." name="query">
						<span class="input-group-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
					</div>
				</form>
				<!-- start mobile menu -->
				<a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<!-- start language menu -->
						<li class="dropdown language-switch">
							<a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <img
									src="img/flags/gb.png" class="position-left" alt=""> English <span
									class="fa fa-angle-down"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a class="deutsch"><img src="img/flags/de.png" alt=""> Deutsch</a>
								</li>
								<li>
									<a class="ukrainian"><img src="img/flags/ua.png" alt=""> Українська</a>
								</li>
								<li>
									<a class="english"><img src="img/flags/gb.png" alt=""> English</a>
								</li>
								<li>
									<a class="espana"><img src="img/flags/es.png" alt=""> España</a>
								</li>
								<li>
									<a class="russian"><img src="img/flags/ru.png" alt=""> Русский</a>
								</li>
							</ul>
						</li>
						<!-- end language menu -->
						<!-- start notification dropdown -->
						<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
							<a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<i class="fa fa-bell-o"></i>
								<span class="badge headerBadgeColor1"> 6 </span>
							</a>
							<ul class="dropdown-menu">
								<li class="external">
									<h3><span class="bold">Notifications</span></h3>
									<span class="notification-label purple-bgcolor">New 6</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="javascript:;">
												<span class="time">just now</span>
												<span class="details">
													<span class="notification-icon circle deepPink-bgcolor"><i
															class="fa fa-check"></i></span>
													Congratulations!. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">3 mins</span>
												<span class="details">
													<span class="notification-icon circle purple-bgcolor"><i
															class="fa fa-user o"></i></span>
													<b>John Micle </b>is now following you. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">7 mins</span>
												<span class="details">
													<span class="notification-icon circle blue-bgcolor"><i
															class="fa fa-comments-o"></i></span>
													<b>Sneha Jogi </b>sent you a message. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">12 mins</span>
												<span class="details">
													<span class="notification-icon circle pink"><i
															class="fa fa-heart"></i></span>
													<b>Ravi Patel </b>like your photo. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">15 mins</span>
												<span class="details">
													<span class="notification-icon circle yellow"><i
															class="fa fa-warning"></i></span> Warning! </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">10 hrs</span>
												<span class="details">
													<span class="notification-icon circle red"><i
															class="fa fa-times"></i></span> Application error. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="javascript:void(0)"> All notifications </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end notification dropdown -->
						<!-- start message dropdown -->
						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
							<a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<i class="fa fa-envelope-o"></i>
								<span class="badge headerBadgeColor2"> 2 </span>
							</a>
							<ul class="dropdown-menu">
								<li class="external">
									<h3><span class="bold">Messages</span></h3>
									<span class="notification-label cyan-bgcolor">New 2</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="#">
												<span class="photo">
													<img src="img/doc/doc2.jpg" class="img-circle" alt=""> </span>
												<span class="subject">
													<span class="from"> Sarah Smith </span>
													<span class="time">Just Now </span>
												</span>
												<span class="message"> Jatin I found you on LinkedIn... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="img/doc/doc3.jpg" class="img-circle" alt=""> </span>
												<span class="subject">
													<span class="from"> John Deo </span>
													<span class="time">16 mins </span>
												</span>
												<span class="message"> Fwd: Important Notice Regarding Your Domain
													Name... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="img/doc/doc1.jpg" class="img-circle" alt=""> </span>
												<span class="subject">
													<span class="from"> Rajesh </span>
													<span class="time">2 hrs </span>
												</span>
												<span class="message"> pls take a print of attachments. </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="img/doc/doc8.jpg" class="img-circle" alt=""> </span>
												<span class="subject">
													<span class="from"> Lina Smith </span>
													<span class="time">40 mins </span>
												</span>
												<span class="message"> Apply for Ortho Surgeon </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="img/doc/doc5.jpg" class="img-circle" alt=""> </span>
												<span class="subject">
													<span class="from"> Jacob Ryan </span>
													<span class="time">46 mins </span>
												</span>
												<span class="message"> Request for leave application. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="#"> All Messages </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end message dropdown -->
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<img alt="" class="img-circle " src="img/dp.jpg" />
								<span class="username username-hide-on-mobile"> Kiran </span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href="user_profile.html">
										<i class="icon-user"></i> Profile </a>
								</li>
								<li>
									<a href="#">
										<i class="icon-settings"></i> Settings
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-directions"></i> Help
									</a>
								</li>
								<li class="divider"> </li>
								<li>
									<a href="lock_screen.html">
										<i class="icon-lock"></i> Lock
									</a>
								</li>
								<li>
									<a href="login.html">
										<i class="icon-logout"></i> Log Out </a>
								</li>
							</ul>
						</li>
						<!-- end manage user dropdown -->
						<li class="dropdown dropdown-quick-sidebar-toggler">
							<a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
								data-upgraded=",MaterialButton">
								<i class="material-icons">more_vert</i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start color quick setting -->
		<div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
	              <div class="quick-setting slimscroll-style">
					<ul id="themecolors">
						<li>
							<p class="sidebarSettingTitle">Sidebar Color</p>
						</li>
						<li class="complete">
							<div class="theme-color sidebar-theme">
								<a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
								<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
								<a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
								<a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
								<a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
								<a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
								<a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
							</div>
						</li>
						<li>
							<p class="sidebarSettingTitle">Header Brand color</p>
						</li>
						<li class="theme-option">
							<div class="theme-color logo-theme">
								<a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
								<a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
								<a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
								<a href="#" data-theme="logo-indigo"><span class="head"></span><span
										class="cont"></span></a>
								<a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
								<a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
								<a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
							</div>
						</li>
						<li>
							<p class="sidebarSettingTitle">Header color</p>
						</li>
						<li class="theme-option">
							<div class="theme-color header-theme">
								<a href="#" data-theme="header-white"><span class="head"></span><span
										class="cont"></span></a>
								<a href="#" data-theme="header-dark"><span class="head"></span><span
										class="cont"></span></a>
								<a href="#" data-theme="header-blue"><span class="head"></span><span
										class="cont"></span></a>
								<a href="#" data-theme="header-indigo"><span class="head"></span><span
										class="cont"></span></a>
								<a href="#" data-theme="header-cyan"><span class="head"></span><span
										class="cont"></span></a>
								<a href="#" data-theme="header-green"><span class="head"></span><span
										class="cont"></span></a>
								<a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
							</div>
						</li>
					</ul>
				</div>
            </div>
          </div>
        </div>
		<!-- end color quick setting -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
<?php
include "includes/sidebar.php";

 ?>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Contact Us</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Contact Us</li>
							</ol>
						</div>
					</div>
					<!-- add content here -->
					<div class="row">
						<div class="col-sm-12">
							<div class="borderBox light bordered">
								<div class="row">
									<div class="col-sm-12">
										<div class="contact-map">
											<iframe
												src="https://www.google.com/maps/d/embed?mid=1sjINSNbiZfu6iyy2pPSha2O4GD4&amp;hl=en_US"
												width="640" height="480"></iframe>
										</div>
									</div>
								</div>
								<div class="row m-t-50 m-b-30">
									<div class="col-md-10 col-md-offset-1">
										<div class="row m-b-20">
											<div class="col-sm-12">
												<h3 class="title">Send us a Message</h3>
												<p class="text-muted sub-title">The clean and well commented code allows
													easy customization of the
													theme.It's <br> designed for describing your app, agency or
													business.</p>
											</div>
										</div>
										<div class="row">
											<!-- Contact form -->
											<div class="col-sm-6">
												<form name="ajax-form" action="#" method="post" class="contact-form"
													data-parsley-validate="" novalidate="">
													<div class="form-group">
														<input class="form-control" id="name2" name="name"
															placeholder="Your name" type="text" value="" required="">
													</div>
													<!-- /Form-name -->
													<div class="form-group">
														<input class="form-control" id="email2" name="email"
															type="email" placeholder="Your email" value="" required="">
													</div>
													<!-- /Form-email -->
													<div class="form-group">
														<textarea class="form-control" id="message2" name="message"
															rows="5" placeholder="Message" required=""></textarea>
													</div>
													<!-- /Form Msg -->
													<div class="row">
														<div class="col-xs-12">
															<div class="">
																<button type="submit"
																	class="btn btn-primary waves-effect waves-light"
																	id="send">Submit</button>
															</div>
														</div> <!-- /col -->
													</div> <!-- /row -->
												</form> <!-- /form -->
											</div> <!-- end col -->
											<div class="col-sm-4 col-sm-offset-1">
												<div class="contact-box">
													<div class="contact-detail">
														<i class="fa fa-map-marker"></i>
														<span>
															A-304, Shyam appartment,
															Mahatma Gandhi Marg,
															Satellite
														</span>
													</div>
													<div class="contact-detail">
														<i class="fa fa-mobile"></i>
														<span>
															<a href="https://radixtouch.com/cdn-cgi/l/email-protection#5f776e6d6c766b6a6972686766726e6d6c">(123)456-789-123</a>
														</span>
													</div>
													<div class="contact-detail">
														<i class="fa fa-envelope"></i>
														<span>
															<a href="#"><span class="__cf_email__" data-cfemail="e1929491918e9395a18499808c918d84cf828e8c">[email&#160;protected]</span></a>
														</span>
													</div>
												</div>
											</div> <!-- end col -->
										</div>
									</div>
								</div>
								<!-- end row -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->
			<div class="chat-sidebar-container" data-close-on-body-click="false">
				<div class="chat-sidebar">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-bs-toggle="tab"> <i
									class="material-icons">chat</i>Chat
								<span class="badge badge-danger">4</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-bs-toggle="tab"> <i
									class="material-icons">settings</i>
								Settings
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<!-- Start Doctor Chat -->
						<div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel"
							id="quick_sidebar_tab_1">
							<div class="chat-sidebar-list">
								<div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
									data-wrapper-class="chat-sidebar-list">
									<div class="chat-header">
										<h5 class="list-heading">Online</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media"><img class="media-object" src="img/doc/doc3.jpg" width="35"
												height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">John Deo</h5>
												<div class="media-heading-sub">Spine Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">5</span>
											</div> <img class="media-object" src="img/doc/doc1.jpg" width="35"
												height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Rajesh</h5>
												<div class="media-heading-sub">Director</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="img/doc/doc5.jpg" width="35"
												height="35" alt="...">
											<i class="away dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jacob Ryan</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-danger">8</span>
											</div> <img class="media-object" src="img/doc/doc4.jpg" width="35"
												height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Kehn Anderson</h5>
												<div class="media-heading-sub">CEO</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="img/doc/doc2.jpg" width="35"
												height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Sarah Smith</h5>
												<div class="media-heading-sub">Anaesthetics</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="img/doc/doc7.jpg" width="35"
												height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Vlad Cardella</h5>
												<div class="media-heading-sub">Cardiologist</div>
											</div>
										</li>
									</ul>
									<div class="chat-header">
										<h5 class="list-heading">Offline</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media">
											<div class="media-status">
												<span class="badge badge-warning">4</span>
											</div> <img class="media-object" src="img/doc/doc6.jpg" width="35"
												height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jennifer Maklen</h5>
												<div class="media-heading-sub">Nurse</div>
												<div class="media-heading-small">Last seen 01:20 AM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="img/doc/doc8.jpg" width="35"
												height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Lina Smith</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
												<div class="media-heading-small">Last seen 11:14 PM</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">9</span>
											</div> <img class="media-object" src="img/doc/doc9.jpg" width="35"
												height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jeff Adam</h5>
												<div class="media-heading-sub">Compounder</div>
												<div class="media-heading-small">Last seen 3:31 PM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="img/doc/doc10.jpg" width="35"
												height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Anjelina Cardella</h5>
												<div class="media-heading-sub">Physiotherapist</div>
												<div class="media-heading-small">Last seen 7:45 PM</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Doctor Chat -->
						<!-- Start Setting Panel -->
						<div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
							<div class="chat-sidebar-settings-list slimscroll-style">
								<div class="chat-header">
									<h5 class="list-heading">Layout Settings</h5>
								</div>
								<div class="chatpane inner-content ">
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Sidebar Position</div>
											<div class="setting-set">
												<select
													class="sidebar-pos-option form-control input-inline input-sm input-small ">
													<option value="left" selected="selected">Left</option>
													<option value="right">Right</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Header</div>
											<div class="setting-set">
												<select
													class="page-header-option form-control input-inline input-sm input-small ">
													<option value="fixed" selected="selected">Fixed</option>
													<option value="default">Default</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Footer</div>
											<div class="setting-set">
												<select
													class="page-footer-option form-control input-inline input-sm input-small ">
													<option value="fixed">Fixed</option>
													<option value="default" selected="selected">Default</option>
												</select>
											</div>
										</div>
									</div>
									<div class="chat-header">
										<h5 class="list-heading">Account Settings</h5>
									</div>
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Notifications</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-1">
														<input type="checkbox" id="switch-1" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Show Online</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-7">
														<input type="checkbox" id="switch-7" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Status</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-2">
														<input type="checkbox" id="switch-2" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">2 Steps Verification</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-3">
														<input type="checkbox" id="switch-3" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="chat-header">
										<h5 class="list-heading">General Settings</h5>
									</div>
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Location</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-4">
														<input type="checkbox" id="switch-4" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Save Histry</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-5">
														<input type="checkbox" id="switch-5" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Auto Updates</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-6">
														<input type="checkbox" id="switch-6" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2021 &copy; RedStar Hospital Template By
				<a href="https://radixtouch.com/cdn-cgi/l/email-protection#0c7e69687f786d7e78646961694c6b616d6560226f6361" target="_top" class="makerCss">Redstartheme</a>
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script data-cfasync="false" src="../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="adminassets/bundles/jquery/jquery.min.js"></script>
	<script src="adminassets/bundles/popper/popper.js"></script>
	<script src="adminassets/bundles/jquery-blockUI/jquery.blockui.min.js"></script>
	<script src="adminassets/bundles/jquery.slimscroll/jquery.slimscroll.js"></script>
	<!-- bootstrap -->
	<script src="adminassets/bundles/bootstrap/js/bootstrap.min.js"></script>
	<script src="adminassets/bundles/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- Common js-->
	<script src="adminassets/app.js"></script>
	<script src="adminassets/layout.js"></script>
	<script src="adminassets/theme-color.js"></script>
	<!-- Material -->
	<script src="adminassets/bundles/material/material.min.js"></script>
	<!-- end js include path -->
</body>


<!-- Mirrored from radixtouch.com/templates/admin/redstar/source/dark/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 23:28:31 GMT -->
</html>

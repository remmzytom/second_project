<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from radixtouch.com/templates/admin/redstar/source/dark/all_doctors.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 23:28:20 GMT -->
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
	<!-- data tables -->
	<link href="adminassets/bundles/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet"
		type="text/css" />
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
					<a href="index.php">
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
									<a href="user_profile.php">
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
									<a href="lock_screen.php">
										<i class="icon-lock"></i> Lock
									</a>
								</li>
								<li>
									<a href="login.php">
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
								<div class="page-title">Doctor List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Doctors</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Doctor List</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								<!-- <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab1" data-bs-toggle="tab"> List View </a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-bs-toggle="tab"> Grid View </a>
                                    </li>
                                </ul> -->
								<ul class="nav customtab nav-tabs" role="tablist">
									<li class="nav-item"><a href="#tab1" class="nav-link active" data-bs-toggle="tab">List
											View</a></li>
									<li class="nav-item"><a href="#tab2" class="nav-link" data-bs-toggle="tab">Grid
											View</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
														<header></header>
														<div class="tools">
															<a class="fa fa-repeat btn-color box-refresh"
																href="javascript:;"></a>
															<a class="t-collapse btn-color fa fa-chevron-down"
																href="javascript:;"></a>
															<a class="t-close btn-color fa fa-times"
																href="javascript:;"></a>
														</div>
													</div>
													<div class="card-body ">
														<div class="row">
															<div class="col-md-6 col-sm-6 col-xs-6">
																<div class="btn-group">
																	<a href="add_doctor_material.php" id="addRow"
																		class="btn btn-info">
																		Add New <i class="fa fa-plus"></i>
																	</a>
																</div>
															</div>
															<div class="col-md-6 col-sm-6 col-xs-6">
																<div class="btn-group pull-right">
																	<a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
																		data-bs-toggle="dropdown">Tools
																		<i class="fa fa-angle-down"></i>
																	</a>
																	<ul class="dropdown-menu pull-right">
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-print"></i> Print </a>
																		</li>
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-file-pdf-o"></i> Save as
																				PDF </a>
																		</li>
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-file-excel-o"></i>
																				Export to Excel </a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="table-scrollable">
															<table
																class="table table-hover table-checkable order-column full-width"
																id="example4">
																<thead>
																	<tr>
																		<th></th>
																		<th> Name </th>
																		<th> Department </th>
																		<th> Specialization </th>
																		<th> Degree </th>
																		<th> Mobile </th>
																		<th> Email </th>
																		<th>Joining Date</th>
																		<th> Action </th>
																	</tr>
																</thead>
																<tbody>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="img/doc/doc1.jpg" alt="">
																		</td>
																		<td>Dr.Rajesh</td>
																		<td class="left">General surgery</td>
																		<td class="left">18</td>
																		<td class="left">MBBS,MD</td>
																		<td><a href="tel:4444565756">
																				4444565756 </a></td>
																		<td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#02716a777a677042656f636b6e2c616d6f">
																				<span class="__cf_email__" data-cfemail="f98b98939c8a91b99e94989095d79a9694">[email&#160;protected]</span> </a></td>
																		<td class="left">22 Feb 2000</td>
																		<td>
																			<a href="adedit_doctor.php"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="img/doc/doc10.jpg" alt="">
																		</td>
																		<td>Dr.Pooja Patel</td>
																		<td class="left">Cardiology</td>
																		<td class="left">5</td>
																		<td class="left">M.D.</td>
																		<td><a href="tel:444786876">
																				444786876 </a></td>
																		<td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#90e3f8e5e8f5e2d0f7fdf1f9fcbef3fffd">
																				<span class="__cf_email__" data-cfemail="75051a1a1f14351218141c195b161a18">[email&#160;protected]</span> </a></td>
																		<td class="left">27 Aug 2005</td>
																		<td>
																			<a href="adedit_doctor.php"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="img/doc/doc2.jpg" alt="">
																		</td>
																		<td>Dr.Sarah Smith</td>
																		<td class="left">Anaesthetics</td>
																		<td class="left">15</td>
																		<td class="left">MBBS,DGO,MD</td>
																		<td><a href="tel:44455546456">
																				44455546456 </a></td>
																		<td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#2d5e455855485f6d4a404c4441034e4240">
																				<span class="__cf_email__" data-cfemail="d8abb9aab9b098bfb5b9b1b4f6bbb7b5">[email&#160;protected]</span> </a></td>
																		<td class="left">05 Jun 2011</td>
																		<td>
																			<a href="adedit_doctor.php"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="img/doc/doc3.jpg" alt="">
																		</td>
																		<td>Dr.John Deo</td>
																		<td class="left">Dentist</td>
																		<td class="left">23</td>
																		<td class="left">BDS,MDS</td>
																		<td><a href="tel:444543564">
																				444543564 </a></td>
																		<td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#a0d3c8d5d8c5d2e0c7cdc1c9cc8ec3cfcd">
																				<span class="__cf_email__" data-cfemail="3d575255537d5a505c5451135e5250">[email&#160;protected]</span> </a></td>
																		<td class="left">15 Feb 2012</td>
																		<td>
																			<a href="adedit_doctor.php"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="img/doc/doc4.jpg" alt="">
																		</td>
																		<td>Dr.Jay Soni</td>
																		<td class="left">General</td>
																		<td class="left">10</td>
																		<td class="left">BHMS</td>
																		<td><a href="tel:444543564">
																				444543564 </a></td>
																		<td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#9eedf6ebe6fbecdef9f3fff7f2b0fdf1f3">
																				<span class="__cf_email__" data-cfemail="80ebe5eee8c0e7ede1e9ecaee3efed">[email&#160;protected]</span> </a></td>
																		<td class="left">12 Nov 2012</td>
																		<td>
																			<a href="adedit_doctor.php"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="img/doc/doc5.jpg" alt="">
																		</td>
																		<td>Dr.Jacob Ryan</td>
																		<td class="left">Urology</td>
																		<td class="left">14</td>
																		<td class="left">MBBS,MS</td>
																		<td><a href="tel:444543564">
																				444543564 </a></td>
																		<td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#7003180508150230171d11191c5e131f1d">
																				<span class="__cf_email__" data-cfemail="58323730362b3736183f35393134763b3735">[email&#160;protected]</span> </a></td>
																		<td class="left">03 Dec 2001</td>
																		<td>
																			<a href="adedit_doctor.php"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="img/doc/doc6.jpg" alt="">
																		</td>
																		<td>Dr.Megha Trivedi</td>
																		<td class="left">Gynaecology</td>
																		<td class="left">7</td>
																		<td class="left">MBBS,MS</td>
																		<td><a href="tel:444543564">
																				444543564 </a></td>
																		<td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#06756e737e637446616b676f6a2865696b">
																				<span class="__cf_email__" data-cfemail="d8b5bdbfb0b998bfb5b9b1b4f6bbb7b5">[email&#160;protected]</span> </a></td>
																		<td class="left">17 Mar 2013</td>
																		<td>
																			<a href="adedit_doctor.php"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="img/doc/doc1.jpg" alt="">
																		</td>
																		<td>Dr.Rajesh</td>
																		<td class="left">General surgery</td>
																		<td class="left">18</td>
																		<td class="left">MBBS,MD</td>
																		<td><a href="tel:4444565756">
																				4444565756 </a></td>
																		<td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#9eedf6ebe6fbecdef9f3fff7f2b0fdf1f3">
																				<span class="__cf_email__" data-cfemail="3341525956405b73545e525a5f1d505c5e">[email&#160;protected]</span> </a></td>
																		<td class="left">22 Feb 2000</td>
																		<td>
																			<a href="adedit_doctor.php"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="img/doc/doc10.jpg" alt="">
																		</td>
																		<td>Dr.Pooja Patel</td>
																		<td class="left">Cardiology</td>
																		<td class="left">5</td>
																		<td class="left">M.D.</td>
																		<td><a href="tel:444786876">
																				444786876 </a></td>
																		<td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#a7d4cfd2dfc2d5e7c0cac6cecb89c4c8ca">
																				<span class="__cf_email__" data-cfemail="d0a0bfbfbab190b7bdb1b9bcfeb3bfbd">[email&#160;protected]</span> </a></td>
																		<td class="left">27 Aug 2005</td>
																		<td>
																			<a href="adedit_doctor.php"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<a href="javasctipt()"
																				class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</a>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="img/doc/doc2.jpg" alt="">
																		</td>
																		<td>Dr.Sarah Smith</td>
																		<td class="left">Anaesthetics</td>
																		<td class="left">15</td>
																		<td class="left">MBBS,DGO,MD</td>
																		<td><a href="tel:44455546456">
																				44455546456 </a></td>
																		<td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#57243f222f322517303a363e3b7934383a">
																				<span class="__cf_email__" data-cfemail="bac9dbc8dbd2faddd7dbd3d694d9d5d7">[email&#160;protected]</span> </a></td>
																		<td class="left">05 Jun 2011</td>
																		<td>
																			<a href="adedit_doctor.php"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<a href="javasctipt()"
																				class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</a>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="img/doc/doc3.jpg" alt="">
																		</td>
																		<td>Dr.John Deo</td>
																		<td class="left">Dentist</td>
																		<td class="left">23</td>
																		<td class="left">BDS,MDS</td>
																		<td><a href="tel:444543564">
																				444543564 </a></td>
																		<td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#82f1eaf7fae7f0c2e5efe3ebeeace1edef">
																				<span class="__cf_email__" data-cfemail="a2c8cdcacce2c5cfc3cbce8cc1cdcf">[email&#160;protected]</span> </a></td>
																		<td class="left">15 Feb 2012</td>
																		<td>
																			<a href="adedit_doctor.php"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<a href="javasctipt()"
																				class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</a>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="img/doc/doc4.jpg" alt="">
																		</td>
																		<td>Dr.Jay Soni</td>
																		<td class="left">General</td>
																		<td class="left">10</td>
																		<td class="left">BHMS</td>
																		<td><a href="tel:444543564">
																				444543564 </a></td>
																		<td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#86f5eef3fee3f4c6e1ebe7efeaa8e5e9eb">
																				<span class="__cf_email__" data-cfemail="0c676962644c6b616d6560226f6361">[email&#160;protected]</span> </a></td>
																		<td class="left">12 Nov 2012</td>
																		<td>
																			<a href="adedit_doctor.php"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<a href="javasctipt()"
																				class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</a>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="img/doc/doc5.jpg" alt="">
																		</td>
																		<td>Dr.Jacob Ryan</td>
																		<td class="left">Urology</td>
																		<td class="left">14</td>
																		<td class="left">MBBS,MS</td>
																		<td><a href="tel:444543564">
																				444543564 </a></td>
																		<td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#44372c313c2136042329252d286a272b29">
																				<span class="__cf_email__" data-cfemail="aac0c5c2c4d9c5c4eacdc7cbc3c684c9c5c7">[email&#160;protected]</span> </a></td>
																		<td class="left">03 Dec 2001</td>
																		<td>
																			<a href="adedit_doctor.php"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<a href="javasctipt()"
																				class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</a>
																		</td>
																	</tr>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="img/doc/doc6.jpg" alt="">
																		</td>
																		<td>Dr.Megha Trivedi</td>
																		<td class="left">Gynaecology</td>
																		<td class="left">7</td>
																		<td class="left">MBBS,MS</td>
																		<td><a href="tel:444543564">
																				444543564 </a></td>
																		<td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#16657e636e736456717b777f7a3875797b">
																				<span class="__cf_email__" data-cfemail="117c7476797051767c70787d3f727e7c">[email&#160;protected]</span> </a></td>
																		<td class="left">17 Mar 2013</td>
																		<td>
																			<a href="adedit_doctor.php"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<a class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab2">
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="img/doc/doc10.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Dr.Pooja Patel </div>
																<div class="name-center"> Cardiology </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="doctor_profile.php"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="img/doc/doc1.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Dr.Rajesh </div>
																<div class="name-center"> General surgery </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
															</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="doctor_profile.php"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="img/doc/doc2.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Dr.Sarah Smith </div>
																<div class="name-center"> Anaesthetics </div>
															</div>
															<p>456, Estern evenue, Courtage area, <br />New York</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="doctor_profile.php"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="img/doc/doc3.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Dr.John Deo </div>
																<div class="name-center"> Dentist </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="doctor_profile.php"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="img/doc/doc4.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Dr.Jay Soni </div>
																<div class="name-center"> General Physician </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
															</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="doctor_profile.php"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="img/doc/doc5.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Dr.Jacob Ryan </div>
																<div class="name-center"> Urology </div>
															</div>
															<p>456, Estern evenue, Courtage area, <br />New York</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="doctor_profile.php"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="img/doc/doc6.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Dr.Megha Trivedi </div>
																<div class="name-center"> Gynaecology </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="doctor_profile.php"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="img/doc/doc1.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Dr.Rajesh </div>
																<div class="name-center"> General surgery </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
															</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="doctor_profile.php"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="img/doc/doc2.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Dr.Sarah Smith </div>
																<div class="name-center"> Anaesthetics </div>
															</div>
															<p>456, Estern evenue, Courtage area, <br />New York</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="doctor_profile.php"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="img/doc/doc10.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Dr.Pooja Patel </div>
																<div class="name-center"> Cardiology </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="doctor_profile.php"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="img/doc/doc1.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Dr.Rajesh </div>
																<div class="name-center"> General surgery </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
															</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="doctor_profile.php"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="img/doc/doc3.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Dr.John Deo </div>
																<div class="name-center"> Dentist </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="doctor_profile.php"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
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
				<a href="https://radixtouch.com/cdn-cgi/l/email-protection#6a180f0e191e0b181e020f070f2a0d070b030644090507" target="_top" class="makerCss">Redstartheme</a>
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
	<!-- data tables -->
	<script src="adminassets/bundles/datatables/jquery.dataTables.min.js"></script>
	<script src="adminassets/bundles/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
	<script src="adminassets/data/table-data.js"></script>
	<!-- Common js-->
	<script src="adminassets/app.js"></script>
	<script src="adminassets/layout.js"></script>
	<script src="adminassets/theme-color.js"></script>
	<!-- Material -->
	<script src="adminassets/bundles/material/material.min.js"></script>
	<!-- end js include path -->
</body>


<!-- Mirrored from radixtouch.com/templates/admin/redstar/source/dark/all_doctors.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 23:28:21 GMT -->
</html>

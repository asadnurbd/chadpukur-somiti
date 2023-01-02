<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.phoenixcoded.net/nextro-able/bootstrap/default/layout-advance.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Dec 2020 23:44:58 GMT -->
<head>
    <title>Nextro Able Bootstrap 4 Admin Template</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets') }}/assets/images/favicon.svg" type="image/x-icon">

    <!-- font css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/assets/fonts/font-awsome-pro/css/pro.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/assets/fonts/feather.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/assets/fonts/fontawesome.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/assets/css/customizer.css">

    <script>
    	(function(h,o,t,j,a,r){
    		h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
    		h._hjSettings={hjid:1951099,hjsv:6};
    		a=o.getElementsByTagName('head')[0];
    		r=o.createElement('script');r.async=1;
    		r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
    		a.appendChild(r);
    	})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

    <link rel="stylesheet" href="{{ asset('assets') }}/assets/css/layout-advance.css">
</head>
<body class="advance-layout ">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ Mobile header ] start -->
	<div class="pc-mob-header pc-header">
		<div class="pcm-logo">
			<img src="{{ asset('assets') }}/assets/images/logo.svg" alt="" class="logo logo-lg">
		</div>
		<div class="pcm-toolbar">
			<a href="#!" class="pc-head-link" id="mobile-collapse">
				<div class="hamburger hamburger--arrowturn">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</a>
			<a href="#!" class="pc-head-link" id="headerdrp-collapse">
				<i data-feather="align-right"></i>
			</a>
			<a href="#!" class="pc-head-link" id="header-collapse">
				<i data-feather="more-vertical"></i>
			</a>
		</div>
	</div>
	<!-- [ Mobile header ] End -->

	<!-- [ navigation menu ] start -->
	<nav class="pc-sidebar light-sidebar">
		<div class="navbar-wrapper">
			<div class="navbar-content">
				<ul class="pc-navbar">
					<li class="pc-item pc-caption">
					<div class="main-menu-header ">
						<div class="text-center">
						<a  href="/home">
                        <img width ="60"class="img-radius" src="{{ asset('assets') }}/images/small-logo.png" alt="User-Profile-Image">
                        </a>
						</div>
                       
                        <div class="user-details text-center pt-4">
                            <div style="font-size:16x" id="more-details">চাঁদপুকুর খ্রীষ্টান সমবায় সমিতি লিঃ<i class="fa fa-caret-down"></i></div>
                        </div>
                    </div>

					</li>
					<li class="pc-item pc-hasmenu">
						
						<a href="/home" class="pc-link "><span class="pc-micon"><i class="feather icon-home"></i></span><span class="pc-mtext">হোম</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						
					</li>
					<li class="pc-item pc-hasmenu">

						<a href="/all-user-information" class="pc-link"><span class="pc-micon"><i class="feather icon-users"></i></span><span class="pc-mtext">সকল সদস্যের তথ্য</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
					
					</li>
					<li class="pc-item pc-hasmenu">

						<a href="/songoroho-talika" class="pc-link"><span class="pc-micon"><i class="feather icon-layout"></i></span><span class="pc-mtext">সংগ্রহ তালিকা</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
					
					</li>
					<li class="pc-item pc-hasmenu">

						<a href="/abbhantorin-check" class="pc-link"><span class="pc-micon"><i class="feather icon-book"></i></span><span class="pc-mtext">অভ্যন্তরীন চেক বই</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
					
					</li>
					<li class="pc-item pc-hasmenu">

						<a href="/khroch-talika" class="pc-link"><span class="pc-micon"><i class="feather icon-layout"></i></span><span class="pc-mtext">খরচের তালিকা</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
					
					</li>
					<li class="pc-item pc-hasmenu">

						<a href="/total-income-expenditure" class="pc-link"><span class="pc-micon"><i class="feather icon-layout"></i></span><span class="pc-mtext">মোট আয় ব্যয়</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
					
					</li>
					

				
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="pc-header bg-primary ">
		<div class="header-wrapper">
			<div class="m-header d-flex align-items-center mr-2">
				<a href="index.html" class="b-brand">
					<!-- ========   change your logo hear   ============ -->
					<img src="{{ asset('assets') }}/assets/images/logo.svg" alt="" class="logo logo-lg">
				</a>
			</div>
			<div class="mr-auto pc-mob-drp">
				<ul class="list-unstyled">
					
				</ul>
			</div>
			<div class="ml-auto">
				<ul class="list-unstyled">
				<li class="dropdown pc-h-item">
						
						<div class="dropdown-menu pc-h-dropdown">
						<div class="card-body">
                       <form action="/total-income-expenditure-month-date" method="post">
                        @csrf

                        
                            <div class="row">
                              <div class="col-sm-12 text-right">
                                  
                               </div>
                      
                                <!-- <div class="col-sm-3">
                                    <div class="input-group">
                                    
                                        <select class="custom-select" id="inputGroupSelect04" name="বছর">
                                            <option  class="text-primary" style="color:red;">বছর</option>
                                            @foreach($date_years as $date_year) 
                                            <option value="{{ $date_year->year}}">{{ $date_year->year}}</option>
                                            @endforeach 
                                          
                                            
                                        </select>
                                        
                                    </div>

                                           
                                    
                                </div> -->

                                <div class="col-sm-3">
                                    <!-- <div class="input-group">
                                    
                                        <select class="custom-select" id="inputGroupSelect04" name="মাস">
                                            <option  class="text-primary" style="color:red;">মাস</option>
                                           @foreach($date_months as $date_month)
                                            <option value="{{ Carbon\Carbon::parse($date_month->month)->format('m') }}">{{ $date_month->month}}</option>
                                           @endforeach 
                                     
                                        </select>
                                        
                                    </div> -->
                                    <label>মাসের হিসাব :</label>
                                    <div class="form-group form-primary mb-0">
                                  
                                     
                                        <input type="date" class="form-control" name="date">
                                        <span class="form-bar"></span>
                                    </div>
                                    
                                </div>
                             <div class="col-sm-3 pt-4">
                              <button type="submit" class="btn btn-primary">জমা দিন</button>

                            </div>
                            </div>
                            
                        </form>
                    </div>
					</li>
					<li class="dropdown pc-h-item pc-mega-menu">
						<a class="pc-head-link active dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
						খোঁজ করুন
						</a>
						<div class="dropdown-menu pc-h-dropdown pc-mega-dmenu">
							<div class="row no-gutters">
							 <div class="col">
								<div class="card-body">
									<form action="/total-income-expenditure-month-date" method="post">
										@csrf

										
											<div class="row">
											<div class="col-sm-12 text-right">
												
											</div>
									
												<!-- <div class="col-sm-3">
													<div class="input-group">
													
														<select class="custom-select" id="inputGroupSelect04" name="বছর">
															<option  class="text-primary" style="color:red;">বছর</option>
															@foreach($date_years as $date_year) 
															<option value="{{ $date_year->year}}">{{ $date_year->year}}</option>
															@endforeach 
														
															
														</select>
														
													</div>

														
													
												</div> -->

												<div class="col-sm-8">
													<!-- <div class="input-group">
													
														<select class="custom-select" id="inputGroupSelect04" name="মাস">
															<option  class="text-primary" style="color:red;">মাস</option>
														@foreach($date_months as $date_month)
															<option value="{{ Carbon\Carbon::parse($date_month->month)->format('m') }}">{{ $date_month->month}}</option>
														@endforeach 
													
														</select>
														
													</div> -->
													<label>মাসের হিসাব :</label>
													<div class="form-group form-primary mb-0">
												
													
														<input type="date" class="form-control" name="date">
														<span class="form-bar"></span>
													</div>
													
												</div>
											<div class="col-sm-4 pt-4">
											<button type="submit" class="btn btn-primary">জমা দিন</button>

											</div>
											</div>
											
										</form>
                                    </div>

								</div>

								<div class="col">
								   <div class="card-body">
										<form action="/total-income-expenditure-year" method="post">
											@csrf

											
												<div class="row">
												
										
													<div class="col-sm-8">
													<label>১ লা জুলাই:</label>
														<div class="form-group form-primary mb-0">
													
														
															<input type="date" class="form-control" name="form_date">
															<span class="form-bar"></span>
														</div>
														
															
														
													</div>

													<div class="col-sm-8">
														
														<label>৩০ শে জুন :</label>
														<div class="form-group form-primary mb-0">
													
														
															<input type="date" class="form-control" name="to_date">
															<span class="form-bar"></span>
														</div>
														
													</div>
													<div class="col-sm-12 pt-4">
												    <button type="submit" class="btn btn-primary">জমা দিন</button>

												     </div>
												
												</div>
												
											</form>
									</div>

								</div>
								
							</div>
						</div>
					</li>
					
					
					<li class="dropdown pc-h-item">
						<a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							<img src="{{ asset('assets') }}/assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar">
							<span>
								<span class="user-name">Joseph William</span>
								<span class="user-desc">Administrator</span>
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
							<div class=" dropdown-header">
								<h6 class="text-overflow m-0">Welcome !</h6>
							</div>
							<a href="#!" class="dropdown-item">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
								<span>My Account</span>
							</a>
							<a href="#!" class="dropdown-item">
								<i data-feather="settings"></i>
								<span>Settings</span>
							</a>
							<a href="#!" class="dropdown-item">
								<i data-feather="life-buoy"></i>
								<span>Support</span>
							</a>
							<a href="#!" class="dropdown-item">
								<i data-feather="lock"></i>
								<span>Lock Screen</span>
							</a>
							<a href="#!" class="dropdown-item">
								<i data-feather="power"></i>
								<span>Logout</span>
							</a>
						</div>
					</li>
				</ul>
			</div>

		</div>
	</header>

	<!-- Modal -->
	<div class="modal notification-modal fade" id="notification-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<ul class="nav nav-pill tabs-light mb-3" id="pc-noti-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pc-noti-home-tab" data-toggle="pill" href="#pc-noti-home" role="tab" aria-controls="pc-noti-home" aria-selected="true">Notification</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pc-noti-news-tab" data-toggle="pill" href="#pc-noti-news" role="tab" aria-controls="pc-noti-news" aria-selected="false">News<span class="badge badge-danger ml-2 d-none d-sm-inline-block">4</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pc-noti-settings-tab" data-toggle="pill" href="#pc-noti-settings" role="tab" aria-controls="pc-noti-settings" aria-selected="false">Setting<span class="badge badge-success ml-2 d-none d-sm-inline-block">Update</span></a>
						</li>
					</ul>
					<div class="tab-content pt-4" id="pc-noti-tabContent">
						<div class="tab-pane fade show active" id="pc-noti-home" role="tabpanel" aria-labelledby="pc-noti-home-tab">
							<div class="media">
								<img src="{{ asset('assets') }}/assets/images/user/avatar-1.jpg" alt="images" class="img-fluid avtar avtar-l">
								<div class="media-body ml-3 align-self-center">
									<div class="float-right">
										<div class="btn-group card-option">
											<button type="button" class="btn shadow-none">
												<i data-feather="heart" class="text-danger"></i>
											</button>
											<button type="button" class="btn shadow-none px-0 dropdown-toggle arrow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i data-feather="more-horizontal"></i>
											</button>
											<div class="dropdown dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#!"><i data-feather="refresh-cw"></i> reload</a>
												<a class="dropdown-item" href="#!"><i data-feather="trash"></i> remove</a>
											</div>
										</div>
									</div>
									<h6 class="mb-0 d-inline-block">Ashoka T.</h6>
									<p class="mb-0 d-inline-block"> • 06/20/2019 at 6:43 PM </p>
									<p class="my-3">Cras sit amet nibh libero in gravida nulla Nulla vel metus scelerisque ante sollicitudin.</p>
									<div class="p-3 mb-3 border rounded">
										<div class="media align-items-center">
											<div class="media-body">
												<h6 class="mb-1">Death Star original maps and blueprint.pdf</h6>
												<p class="mb-0">by Ashoka T. • 06/20/2019 at 6:43 PM </p>
											</div>
											<div class="btn-group d-none d-sm-inline-flex">
												<button type="button" class="btn shadow-none">
													<i data-feather="download-cloud"></i>
												</button>
												<button type="button" class="btn shadow-none px-0 dropdown-toggle arrow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i data-feather="more-horizontal"></i>
												</button>
												<div class="dropdown dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#!"><i data-feather="refresh-cw"></i> reload</a>
													<a class="dropdown-item" href="#!"><i data-feather="trash"></i> remove</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<hr class="mb-4">
							<div class="media">
								<img src="{{ asset('assets') }}/assets/images/user/avatar-2.jpg" alt="images" class="img-fluid avtar avtar-l">
								<div class="media-body ml-3 align-self-center">
									<div class="float-right">
										<div class="btn-group card-option">
											<button type="button" class="btn shadow-none px-0 dropdown-toggle arrow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i data-feather="more-horizontal"></i>
											</button>
											<div class="dropdown dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#!"><i data-feather="refresh-cw"></i> reload</a>
												<a class="dropdown-item" href="#!"><i data-feather="trash"></i> remove</a>
											</div>
										</div>
									</div>
									<h6 class="mb-0 d-inline-block">Ashoka T.</h6>
									<p class="mb-0 d-inline-block"> • 06/20/2019 at 6:43 PM </p>
									<p class="my-3">Cras sit amet nibh libero in gravida nulla Nulla vel metus scelerisque ante sollicitudin.</p>
									<img src="{{ asset('assets') }}/assets/images/slider/img-slide-3.jpg" alt="images" class="img-fluid wid-90 rounded m-r-10 m-b-10">
									<img src="{{ asset('assets') }}/assets/images/slider/img-slide-7.jpg" alt="images" class="img-fluid wid-90 rounded m-r-10 m-b-10">
								</div>
							</div>
							<hr class="mb-4">
							<div class="media mb-3">
								<img src="{{ asset('assets') }}/assets/images/user/avatar-3.jpg" alt="images" class="img-fluid avtar avtar-l">
								<div class="media-body ml-3 align-self-center">
									<div class="float-right">
										3 <i data-feather="heart" class="text-danger"></i>
									</div>
									<h6 class="mb-0 d-inline-block">Ashoka T.</h6>
									<p class="mb-0 d-inline-block"> • 06/20/2019 at 6:43 PM </p>
									<p class="my-3">Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur.</p>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pc-noti-news" role="tabpanel" aria-labelledby="pc-noti-news-tab">
							<div class="pb-3 border-bottom mb-3 media">
								<a href="#!"><img src="{{ asset('assets') }}/assets/images/news/img-news-2.jpg" class="wid-90 rounded" alt="..."></a>
								<div class="media-body ml-3">
									<p class="float-right mb-0 text-success"><small>now</small></p>
									<a href="#!"><h6>This is a news image</h6></a>
									<p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
								</div>
							</div>
							<div class="pb-3 border-bottom mb-3 media">
								<a href="#!"><img src="{{ asset('assets') }}/assets/images/news/img-news-1.jpg" class="wid-90 rounded" alt="..."></a>
								<div class="media-body ml-3">
									<p class="float-right mb-0 text-muted"><small>3 mins ago</small></p>
									<a href="#!"><h6>Industry's standard dummy</h6></a>
									<p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
									<a href="#" class="badge badge-light">Html</a>
									<a href="#" class="badge badge-light">UI/UX designed</a>
								</div>
							</div>
							<div class="pb-3 border-bottom mb-3 media">
								<a href="#!"><img src="{{ asset('assets') }}/assets/images/news/img-news-2.jpg" class="wid-90 rounded" alt="..."></a>
								<div class="media-body ml-3">
									<p class="float-right mb-0 text-muted"><small>5 mins ago</small></p>
									<a href="#!"><h6>Ipsum has been the industry's</h6></a>
									<p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
									<a href="#" class="badge badge-light">JavaScript</a>
									<a href="#" class="badge badge-light">Scss</a>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pc-noti-settings" role="tabpanel" aria-labelledby="pc-noti-settings-tab">
							<h6 class="mt-2"><i data-feather="monitor" class="mr-2"></i>Desktop settings</h6>
							<hr>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="pcsetting1" checked>
								<label class="custom-control-label f-w-600 pl-1" for="pcsetting1">Allow desktop notification</label>
							</div>
							<p class="text-muted ml-5">you get lettest content at a time when data will updated</p>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="pcsetting2">
								<label class="custom-control-label f-w-600 pl-1" for="pcsetting2">Store Cookie</label>
							</div>
							<h6 class="mb-0 mt-5"><i data-feather="save" class="mr-2"></i>Application settings</h6>
							<hr>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="pcsetting3">
								<label class="custom-control-label f-w-600 pl-1" for="pcsetting3">Backup Storage</label>
							</div>
							<p class="text-muted mb-4 ml-5">Automaticaly take backup as par schedule</p>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="pcsetting4">
								<label class="custom-control-label f-w-600 pl-1" for="pcsetting4">Allow guest to print file</label>
							</div>
							<h6 class="mb-0 mt-5"><i data-feather="cpu" class="mr-2"></i>System settings</h6>
							<hr>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="pcsetting5" checked>
								<label class="custom-control-label f-w-600 pl-1" for="pcsetting5">View other user chat</label>
							</div>
							<p class="text-muted ml-5">Allow to show public user message</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light-danger btn-sm" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-light-primary btn-sm">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!-- [ Header ] end -->

<!-- [ Main Content ] start -->
<div class="pc-container">
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <!-- <div class="page-header-title">
                        <h5>Sample Page</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Sample Page</li>
                    </ul> -->
                </div>
                <div class="col-md-4 text-md-right">
                    <!-- <button class="btn btn-sm btn-success rounded-pill" type="button">Action</button> -->
                    <div class="btn-group ml-2">
                        <!-- <button class="btn btn-sm btn-danger dropdown-toggle arrow-none rounded-pill" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="plus"></i></button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#!">Action</a>
                            <a class="dropdown-item" href="#!">Another action</a>
                            <a class="dropdown-item" href="#!">Something else here</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->



    <div class="pcoded-content">
       	<!-- [ Main Content ] start -->
		<div class="row">
			
			<!-- [ basic-alert ] start -->
			<div class="col-md-12">
				<!-- [ Invoice ] start -->
				<div class="container">
					<div class="card" id="printTable">
							<div class="card-body">
								
								<div class="row ">
									
									<div class="col-md-8 invoice-contact">
										
										<div class="invoice-box row">
											<div class="col-sm-12">
												<table class="table table-responsive invoice-table table-borderless">
													<tbody>
														<tr>
															<td><a href="index.html"><img width="50"class="img-fluid" src="{{ asset('assets') }}/images/small-logo.png" alt="Nextro Logo"></a>
															</td>
														</tr>
														<tr>
															<td>চাঁদপুকুর খ্রীষ্টান সমবায় সমিতি লিঃ</td>
														</tr>
														<tr>
															<td>1065 Mandan Road, Columbia MO,<br> Missouri. (123)-65202</td>
														</tr>
														<tr>
															<td><a class="text-secondary" href="mailto:demo@gmail.com" target="_top">demo@gmail.com</a></td>
														</tr>
														<tr>
															<td>+91 919-91-91-919</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="col-md-4"></div>
								</div>
								<div class="row invoive-info d-print-inline-flex">
									<div class="col-sm-4 invoice-client-info">
										<h6>Client Information :</h6>
										<h6 class="m-0">Josephin Villa</h6>
										<p class="m-0 m-t-10">1065 Mandan Road, Columbia MO, Missouri. (123)-65202</p>
										<p class="m-0">(1234) - 567891</p>
										<p><a class="text-secondary" href="mailto:demo@gmail.com" target="_top">demo@gmail.com</a></p>
									</div>
									<div class="col-sm-4">
										<h6>Order Information :</h6>
										<table class="table table-responsive invoice-table invoice-order table-borderless">
											<tbody>
												<tr>
													<th>Date :</th>
													<td>November 14</td>
												</tr>
												<tr>
													<th>Status :</th>
													<td>
														<span class="label label-warning">Pending</span>
													</td>
												</tr>
												<tr>
													<th>Id :</th>
													<td>
														#146859
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="col-sm-4">
										<h6 class="m-b-20">Invoice Number <span>#125863478945</span></h6>
										<h6 class="text-uppercase text-primary">Total Due :
											<span>$950.00</span>
										</h6>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="table-responsive">
										<table id="footer-callback" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="footer-callback_info">
                                 <thead>
                                    <tr class="odd">
                                        <th class="text-center text-primary"colspan="11"  >
                                       CASE BOOK OF  (জমা)
                                        </th>
                                        <th class="text-center text-primary"colspan="11"  >
                                       CASE BOOK OF  (খরচ)
                                        </th>
                                       
                                        
                                    </tr>
                                </thead>
                                <thead>
                                    <tr class="odd text-center">
                                       
                                        <th class="text-center" colspan="4" >
                                        বিবরণ
                                        </th>
                                        
                                        <th class="text-center" colspan="3">
                                        পরিমাণ
                                        </th>
                                        <th class="text-center" colspan="3">
                                        মোট
                                        </th>
                                        <th colspan="1"  >
                                        নির্দিষ্ট হিসাব
                                        </th>
                                       <!-- খরচ -->

                                       
                                        <th class="text-center" colspan="4" >
                                        বিবরণ
                                        </th>
                                      
                                        <th class="text-center" colspan="3">
                                        পরিমাণ
                                        </th>
                                        <th class="text-center" colspan="3">
                                        মোট
                                        </th>
                                        <th colspan="1"  >
                                        নির্দিষ্ট হিসাব
                                        </th>
                                        
                                    </tr>
                                </thead>
                                
                                <tbody>
                                 @php
                                  $total_share=0;
                                  $total_Saving=0;
                                  $total_Special_Saving=0;
                                  $total_rin=0;
                                 @endphp
                                 
                                
                                     <tr role="row" class="odd">
                                     @foreach($Share_sonchoi_rosids as $Share_sonchoi_rosid)
                                       
                                        <td colspan="4">
                                        শেয়ার </br></br>
                                        সঞ্চয় </br></br>
                                        ঋণ_ফেরৎ</br></br>
                                        সুদ</br></br>
                                        জরিমানা</br></br>
                                        ভর্তি_ফি</br></br>
                                        বিক্রয়</br></br>
                                        হিসাব_খরচ</br></br>
                                        বিশেষ_সঞ্চয়</br></br>
                                        </td>

                                        
                                        <td colspan="3">
                                        @foreach($Share_sonchoi_rosids as $Share_sonchoi_rosid)
                                        {{$Share_sonchoi_rosid->শেয়ার}} </br></br>
                                        {{$Share_sonchoi_rosid->সঞ্চয়}} </br></br>
                                        {{$Share_sonchoi_rosid->ঋণ_ফেরৎ}} </br></br>
                                        {{$Share_sonchoi_rosid->সুদ}} </br></br>
                                        {{$Share_sonchoi_rosid->জরিমানা}} </br></br>
                                        {{$Share_sonchoi_rosid->ভর্তি_ফি}} </br></br>
                                        {{$Share_sonchoi_rosid->বিক্রয়}} </br></br>
                                        {{$Share_sonchoi_rosid->হিসাব_খরচ}} </br></br>
                                        {{$Share_sonchoi_rosid->বিশেষ_সঞ্চয়}} </br></br>
                                        @endforeach
                                        </td>
                                        <td colspan="3"></td>
                                        <td class="sorting_1 text-center" colspan="1">
                                        
                                        <a href="/total-share" class="btn btn-info btn-md">শেয়ার</a></br></br>
                                        <a href="/total-sonchoi" class="btn btn-info btn-md">সঞ্চয়</a></br></br>
                                        <a href="/total-rin-ferot" class="btn btn-info btn-md">ঋণ_ফেরৎ</a></br></br>
                                        <a href="#!" class="btn btn-info btn-md">সুদ</a></br></br>
                                        <a href="#!" class="btn btn-info btn-md">জরিমানা</a></br></br>
                                        <a href="#!" class="btn btn-info btn-md">ভর্তি_ফি</a></br></br>
                                        <a href="#!" class="btn btn-info btn-md">বিক্রয়</a></br></br>
                                        <a href="#!" class="btn btn-info btn-md">হিসাব_খরচ</a></br></br>
                                        <a href="#!" class="btn btn-info btn-md">বিশেষ_সঞ্চয়</a></br></br>
                                        
                                        
                                        
                                        </td>

                                        @endforeach
                                        <!-- খরচ -->
                                       
                                        <td colspan="4">
                                        বিশেষ সঞ্চয় উত্তোলন </br></br>
                                        সঞ্চয় উত্তোলন </br></br>
                                        শেয়ার ফেরত</br></br>
                                        ঋণ প্রদান</br></br>
                                        <!-- আনুষঙ্গিক_খরচের_পরিমাণ</br></br> -->
                                        @foreach($types as $type)
                                           @foreach($anusangik_khroch_amounts as $anusangik_khroch_amount)
                                           
                                            @if($anusangik_khroch_amount->anusangik_id==$type->id)
                                          
                                             {{$type->আনুষঙ্গিক_খরচের_নাম}} </br></br>
                                            @endif
               
                                           @endforeach
                                        @endforeach
                                       
                                        </td>

                                        
                                        <td colspan="3">
                                        @foreach($abbhontorin_checks as $abbhontorin_checks)
                                        {{$abbhontorin_checks->বিশেষ_সঞ্চয়_উত্তোলন}} </br></br>
                                        {{$abbhontorin_checks->সঞ্চয়_উত্তোলন}} </br></br>
                                        {{$abbhontorin_checks->শেয়ার_ফেরত}} </br></br>
                                        {{$abbhontorin_checks->ঋণ_প্রদান}} </br></br>
                                        <!-- {{$abbhontorin_checks->আনুষঙ্গিক_খরচের_পরিমাণ}} </br></br> -->
                                        
                                        @endforeach
                                        @foreach($anusangik_khroch_amounts as $anusangik_khroch_amount)
                                        {{$anusangik_khroch_amount->sum}} </br></br>
               
                                        @endforeach

                                        </td>
                                        <td colspan="3"></td>
                                        <td class="sorting_1" colspan="1">
                                         <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                        </td>

                   
                                    </tr>
                                  
                                   
                                 
                                </tbody>
                               <tfoot>
                                    <tr>
                                        
                                        <th  colspan="4"></th>
                                        
                                        <th  colspan="3"></th>
                                        <th colspan="3" style="font-weight:bold;" >
                                         {{$all_income}}  টাকা
                                        </th>
                                        <th  colspan="1"></th>

                                        <!-- খরচ -->
                                        
                                        <th  colspan="4"></th>
                                        
                                        <th  colspan="3"></th>
                                        <th colspan="3" style="font-weight:bold;" >
                                         {{$expenditures}}   টাকা
                                        </th>
                                        <th  colspan="1"></th>
           
                                    </tr>
                                    
                                <tfoot>
                                
                       </table>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<table class="table table-responsive invoice-table invoice-total">
											<tbody>
												<tr>
													<th>Sub Total :</th>
													<td>$4725.00</td>
												</tr>
												<tr>
													<th>Taxes (10%) :</th>
													<td>$57.00</td>
												</tr>
												<tr>
													<th>Discount (5%) :</th>
													<td>$45.00</td>
												</tr>
												<tr class="text-info">
													<td>
														<hr />
														<h5 class="text-primary m-r-10">Total :</h5>
													</td>
													<td>
														<hr />
														<h5 class="text-primary">$ 4827.00</h5>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<h6>Terms and Condition :</h6>
										<p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
											laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row text-center d-print-none">
							<div class="col-sm-12 invoice-btn-group text-center">
								<button type="button" class="btn btn-print-invoice waves-effect waves-light btn-primary m-b-10">Print</button>
								<button type="button" class="btn waves-effect waves-light btn-secondary m-b-10 ">Cancel</button>
							</div>
						</div>
					</div>
				</div>
				<!-- [ Invoice ] end -->
			</div>
			<!-- [ basic-alert ] end -->
		</div>
		<!-- [ Main Content ] end -->
	</div>
</div>
<!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
</div>

    <script src="{{ asset('assets') }}/assets/js/vendor-all.min.js"></script>
    <script src="{{ asset('assets') }}/assets/js/plugins/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/assets/js/plugins/feather.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="{{ asset('assets') }}/assets/js/plugins/clipboard.min.js"></script>
    <script src="{{ asset('assets') }}/assets/js/uikit.min.js"></script>
	<script>
	$('.btn-print-invoice').on('click', function() {
		var link2 = document.createElement('link');
		link2.innerHTML =
			'<style>@media print{*,::after,::before{text-shadow:none!important;box-shadow:none!important}a:not(.btn){text-decoration:underline}abbr[title]::after{content:" ("attr(title) ")"}pre{white-space:pre-wrap!important}blockquote,pre{border:1px solid #adb5bd;page-break-inside:avoid}thead{display:table-header-group}img,tr{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}@page{size:a3}body{min-width:992px!important}.container{min-width:992px!important}.navbar{display:none}.badge{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #dee2e6!important}.table-dark{color:inherit}.table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th{border-color:#dee2e6}.table .thead-dark th{color:inherit;border-color:#dee2e6}}</style>';

		document.getElementsByTagName('head')[0].appendChild(link2);
		window.print();
	})
</script>
<script>
    $('.chk-indeterminate').prop('indeterminate', true);
</script>
<script>
    $('#exampleModalVarying').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body #recipient-name').text(recipient)
        modal.find('.modal-body #message-text').text('hello ' + recipient)
        ``

    })
</script>
<div class="pct-customizer">
    <div href="#!" class="pct-c-btn">
        <button class="btn btn-light-danger" id="pct-toggler">
            <i data-feather="settings"></i>
        </button>
        <button class="btn btn-light-primary" data-toggle="tooltip" title="Document" data-placement="left">
            <i data-feather="book"></i>
        </button>
        <button class="btn btn-light-success" data-toggle="tooltip" title="Buy Now" data-placement="left">
            <i data-feather="shopping-bag"></i>
        </button>
        <button class="btn btn-light-info" data-toggle="tooltip" title="Support" data-placement="left">
            <i data-feather="headphones"></i>
        </button>
    </div>
    <div class="pct-c-content ">
        <div class="pct-header bg-primary">
            <h5 class="mb-0 text-white f-w-500">Nextro Customizer</h5>
        </div>
        <div class="pct-body">
            <h6 class="mt-2"><i data-feather="credit-card" class="mr-2"></i>Header settings</h6>
            <hr class="my-2">
            <div class="theme-color header-color">
                <a href="#!" class="" data-value="bg-default"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-primary"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-danger"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-warning"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-info"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-success"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-dark"><span></span><span></span></a>
            </div>
            <h6 class="mt-4"><i data-feather="layout" class="mr-2"></i>Sidebar settings</h6>
            <hr class="my-2">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="cust-sidebar">
                <label class="custom-control-label f-w-600 pl-1" for="cust-sidebar">Light Sidebar</label>
            </div>
            <div class="custom-control custom-switch mt-2">
                <input type="checkbox" class="custom-control-input" id="cust-sidebrand">
                <label class="custom-control-label f-w-600 pl-1" for="cust-sidebrand">Color Brand</label>
            </div>
            <div class="theme-color brand-color d-none">
                <a href="#!" class="active" data-value="bg-primary"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-danger"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-warning"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-info"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-success"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-dark"><span></span><span></span></a>
            </div>
        </div>
    </div>
</div>
<script>
    // header option
    $('#pct-toggler').on('click', function() {
        $('.pct-customizer').toggleClass('active');

    });
    // header option
    $('#cust-sidebrand').change(function() {
        if ($(this).is(":checked")) {
            $('.theme-color.brand-color').removeClass('d-none');
            $('.m-header').addClass('bg-dark');
        } else {
            $('.m-header').removeClassPrefix('bg-');
            $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo-dark.svg');
            $('.theme-color.brand-color').addClass('d-none');
        }
    });
    // Header Color
    $('.brand-color > a').on('click', function() {
        var temp = $(this).attr('data-value');
        // $('.header-color > a').removeClass('active');
        // $('.pcoded-header').removeClassPrefix('brand-');
        // $(this).addClass('active');
        if (temp == "bg-default") {
            $('.m-header').removeClassPrefix('bg-');
        } else {
            $('.m-header').removeClassPrefix('bg-');
            $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo.svg');
            $('.m-header').addClass(temp);
        }
    });
    // Header Color
    $('.header-color > a').on('click', function() {
        var temp = $(this).attr('data-value');
        // $('.header-color > a').removeClass('active');
        // $('.pcoded-header').removeClassPrefix('brand-');
        // $(this).addClass('active');
        if (temp == "bg-default") {
            $('.pc-header').removeClassPrefix('bg-');
        } else {
            $('.pc-header').removeClassPrefix('bg-');
            $('.pc-header').addClass(temp);
        }
    });
    // sidebar option
    $('#cust-sidebar').change(function() {
        if ($(this).is(":checked")) {
            $('.pc-sidebar').addClass('light-sidebar');
            $('.pc-horizontal .topbar').addClass('light-sidebar');
            // $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo-dark.svg');
        } else {
            $('.pc-sidebar').removeClass('light-sidebar');
            $('.pc-horizontal .topbar').removeClass('light-sidebar');
            // $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo.svg');
        }
    });
    $.fn.removeClassPrefix = function(prefix) {
        this.each(function(i, it) {
            var classes = it.className.split(" ").map(function(item) {
                return item.indexOf(prefix) === 0 ? "" : item;
            });
            it.className = classes.join(" ");
        });
        return this;
    };
</script>

</body>


</html>

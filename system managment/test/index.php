<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>AASTU - Restaurant Admin Dashboard </title>
    
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index-2.html" class="brand-logo">
                <svg class="logo-abbr" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect width="64" height="64" rx="2" fill="#FFF0E4" class="svg-logo-rect"/>
					<path  class="svg-logo-path" d="M31.5785 19.6842C31.5785 22.0351 30.765 26.0526 29.1379 31.7368C27.5109 37.386 26.6973 41 26.6973 42.5789C26.6973 44.1228 27.378 44.8947 28.7395 44.8947C30.1341 44.8947 32.0268 43.8246 34.4176 41.6842C34.5172 39.8947 34.7995 37.7544 35.2644 35.2632C36.659 27.4386 38.3525 21.7719 40.3448 18.2632C42.3372 14.7544 44.6616 13 47.318 13C48.8787 13 50.0409 13.4912 50.8046 14.4737C51.6015 15.4211 52 16.6842 52 18.2632C52 23.2456 48.7791 29.9474 42.3372 38.3684C42.2375 39.7368 42.1877 41.1228 42.1877 42.5263C42.1877 45.4386 42.6526 46.8947 43.5824 46.8947C44.1469 46.8947 44.6284 46.8246 45.0268 46.6842L45.7739 48.6842C43.7152 50.2281 41.6564 51 39.5977 51C36.6092 51 34.8991 49.1579 34.4674 45.4737C30.4828 49.1579 27.0792 51 24.2567 51C22.5632 51 21.1852 50.4561 20.1226 49.3684C19.0932 48.2456 18.5785 46.6316 18.5785 44.5263C18.5785 43.2982 18.9604 41.3158 19.7241 38.5789C20.5211 35.807 20.9859 34.1754 21.1188 33.6842C15.7063 31.3333 13 28.0702 13 23.8947C13 21.0175 14.2618 18.4912 16.7854 16.3158C19.3091 14.1053 22.1149 13 25.2031 13C29.4534 13 31.5785 15.2281 31.5785 19.6842ZM22.0651 29.8947C23.2273 25.614 23.8084 22.4211 23.8084 20.3158C23.8084 18.2105 23.0945 17.1579 21.6667 17.1579C20.272 17.1579 18.9936 17.8246 17.8314 19.1579C16.6692 20.4912 16.0881 21.9649 16.0881 23.5789C16.0881 25.1579 16.6692 26.4912 17.8314 27.5789C18.9936 28.6316 20.4049 29.4035 22.0651 29.8947ZM49.0115 18.1579C49.0115 17.2105 48.6794 16.7368 48.0153 16.7368C46.5543 16.7368 44.8774 22.0702 42.9847 32.7368C44.4789 30.6667 45.857 28.193 47.1188 25.3158C48.3806 22.4035 49.0115 20.0175 49.0115 18.1579Z" fill="#FF720D"/>
				</svg>
				<div class="brand-title">AASTU</div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
       
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
							<li class="nav-item">
								<div class="input-group search-area d-xl-inline-flex d-none">
									<input type="text" class="form-control" placeholder="Search here...">
									<div class="input-group-append">
										<button class="input-group-text"><i class="flaticon-381-search-2"></i></button>
									</div>
								</div>
							</li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="#" role="button" data-toggle="dropdown">
                                   <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14 1.16663C11.6793 1.16663 9.45374 2.0885 7.8128 3.72944C6.17186 5.37039 5.24999 7.59598 5.24999 9.91663V16.7416L3.31332 19.6583C3.08119 20.0162 2.94953 20.4299 2.9321 20.8562C2.91468 21.2824 3.01213 21.7055 3.21427 22.0811C3.41641 22.4568 3.71581 22.7712 4.08112 22.9915C4.44644 23.2118 4.86424 23.3298 5.29082 23.3333H22.7091C23.1385 23.3319 23.5594 23.2143 23.9274 22.9932C24.2954 22.772 24.5967 22.4554 24.7993 22.0769C25.002 21.6984 25.0986 21.2722 25.0787 20.8433C25.0589 20.4145 24.9234 19.9989 24.6866 19.6408L22.75 16.7416V9.91663C22.75 7.59598 21.8281 5.37039 20.1872 3.72944C18.5462 2.0885 16.3206 1.16663 14 1.16663Z" fill="#636363"/>
										<path d="M14 26.8333C14.7231 26.8325 15.4282 26.6077 16.0184 26.1899C16.6085 25.772 17.0548 25.1817 17.2958 24.4999H10.7042C10.9452 25.1817 11.3915 25.772 11.9816 26.1899C12.5718 26.6077 13.2769 26.8325 14 26.8333Z" fill="#636363"/>
									</svg>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3" style="height:380px;">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media mr-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											 <li>
												<div class="timeline-panel">
													<div class="media mr-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
							
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="images/profile/pic1.jpg" width="20" alt=""/>
									<div class="header-info">
										<span class="fs-20 font-w500">Robertos Jr.</span>
										<small>Super Admin</small>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="index.html">Home</a></li>
							<li><a href="orders-list.html">Orders list</a></li>
							<li><a href="order-detail.html">Order Detail</a></li>
							<li><a href="customer-list.html">Customers</a></li>
							<li><a href="analytics.html">Analytics</a></li>
							<li><a href="reviews.html">Reviews</a></li>	
						</ul>

                    </li>
                    
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-022-copy"></i>
							<span class="nav-text">Pages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                        </ul>
                    </li>
                </ul>
            
				
				<div class="copyright">
					<p><strong>AASTU  Admin  Dashboard</strong> © 2021 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> by Shega</p>
				</div>
			</div>
        </div>
        <div class="content-body">
            
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-3 col-xxl-4">
						<div class="row">
							<div class="col-xl-12 col-lg-6 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div class="separator"></div>
										<div class="mr-auto">
											<h4 class="card-title mb-2">Daily Target Income</h4>
											<p class="fs-12 mb-0">Lorem ipsum dolor sit</p>
										</div>
									</div>
									<div class="card-body  text-center">
										<div id="radialChart"></div>
										<h3 class="fs-28 text-black font-w500">$749.56</h3>
										<span class="mb-3 d-block">from $1,000</span>
										<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
										<a href="post-details.html" class="btn btn-outline-primary">More Details</a>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-6 col-md-6">
								<div class="card trending-menus">
									<div class="card-header border-0">
										<div class="separator"></div>
										<div class="mr-auto">	
											<h4 class="text-black fs-20">Daily Trending Menus</h4>
											<p class="fs-13 mb-0">Lorem ipsum dolor</p>
										</div>	
										
									</div>
									<div class="card-body ">
										<div class="dz-scroll height500" id="tredingMenus">
											<div class="d-flex pb-3 mb-3 tr-row align-items-center border-bottom">
												<span class="num">#1</span>
												<div class="mr-auto pr-3">
													<a href="post-details.html"><h2 class="text-black fs-14 font-w500">Chicken curry special with cucumber</h2></a>
													<span class="text-black font-w600 d-inline-block mr-3">$5.6 </span> <span class="fs-14">Order 89x</span>
												</div>
												<img src="images/menu/Untitled-1.jpg" alt="">
											</div>
											<div class="d-flex pb-3 mb-3 tr-row align-items-center border-bottom">
												<span class="num">#2</span>
												<div class="mr-auto pr-3">
													<a href="post-details.html"><h2 class="text-black fs-14 font-w500">Italiano Pizza With Garlic</h2></a>
													<span class="text-black font-w600 d-inline-block mr-3">$5.6 </span> <span class="fs-14">Order 89x</span>
												</div>
												<img src="images/menu/Untitled-2.jpg" alt="">
											</div>
											<div class="d-flex pb-3 mb-3 tr-row align-items-center border-bottom">
												<span class="num">#3</span>
												<div class="mr-auto pr-3">
													<a href="post-details.html"><h2 class="text-black fs-14 font-w500">Watermelon juice with ice</h2></a>
													<span class="text-black font-w600 d-inline-block mr-3">$5.6 </span> <span class="fs-14">Order 89x</span>
												</div>
												<img src="images/menu/Untitled-3.jpg" alt="">
											</div>
											<div class="d-flex pb-3 mb-3  tr-row align-items-center border-bottom">
												<span class="num">#4</span>
												<div class="mr-auto pr-3">
													<a href="post-details.html"><h2 class="text-black fs-14 font-w500">Tuna Soup spinach with himalaya salt</h2></a>
													<span class="text-black font-w600 d-inline-block mr-3">$5.6 </span> <span class="fs-14">Order 89x</span>
												</div>
												<img src="images/menu/Untitled-4.jpg" alt="">
											</div>
											<div class="d-flex pb-3 mb-3 tr-row align-items-center">
												<span class="num">#5</span>
												<div class="mr-auto pr-3">
													<a href="post-details.html"><h2 class="text-black fs-14 font-w500">Medium Spicy Spagethi Italiano</h2></a>
													<span class="text-black font-w600 d-inline-block mr-3">$5.6 </span> <span class="fs-14">Order 89x</span>
												</div>
												<img src="images/menu/Untitled-5.jpg" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8">
						<div class="row">
							<div class="col-xl-4 col-xxl-6 col-sm-6">
								<div class="card">
									<div class="card-header media border-0 pb-0">
										<div class="media-body d-flex">
											<div class="mr-4 mt-1">
												<svg class="card-ico" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M3.10333 12.25H4.66666V19.8333C4.66666 20.6069 4.97395 21.3487 5.52093 21.8957C6.06791 22.4427 6.80978 22.75 7.58333 22.75H8.74999C9.52354 22.75 10.2654 22.4427 10.8124 21.8957C11.3594 21.3487 11.6667 20.6069 11.6667 19.8333V12.25H13.23C13.7436 12.25 14.2362 12.0459 14.5994 11.6827C14.9626 11.3195 15.1667 10.8269 15.1667 10.3133C15.1683 9.94246 15.0608 9.57933 14.8575 9.26914L10.4533 2.41498C10.2072 2.03206 9.86883 1.71709 9.4693 1.49895C9.06977 1.28082 8.62186 1.1665 8.16666 1.1665C7.71146 1.1665 7.26355 1.28082 6.86401 1.49895C6.46448 1.71709 6.12613 2.03206 5.87999 2.41498L1.47583 9.26914C1.27256 9.57933 1.16504 9.94246 1.16666 10.3133C1.16666 10.8269 1.3707 11.3195 1.7339 11.6827C2.09709 12.0459 2.58969 12.25 3.10333 12.25Z" fill="#FF720D"/>
												<path d="M24.8966 15.75H23.3333V8.16667C23.3333 7.39312 23.026 6.65125 22.479 6.10427C21.932 5.55729 21.1902 5.25 20.4166 5.25H19.25C18.4764 5.25 17.7346 5.55729 17.1876 6.10427C16.6406 6.65125 16.3333 7.39312 16.3333 8.16667V15.75H14.77C14.5156 15.75 14.2638 15.8001 14.0288 15.8974C13.7939 15.9947 13.5804 16.1374 13.4005 16.3172C13.2207 16.4971 13.078 16.7106 12.9807 16.9455C12.8834 17.1805 12.8333 17.4323 12.8333 17.6867C12.8317 18.0575 12.9392 18.4206 13.1425 18.7308L17.5466 25.585C17.7928 25.9679 18.1311 26.2829 18.5307 26.501C18.9302 26.7192 19.3781 26.8335 19.8333 26.8335C20.2885 26.8335 20.7364 26.7192 21.1359 26.501C21.5355 26.2829 21.8738 25.9679 22.12 25.585L26.5241 18.7308C26.7274 18.4206 26.8349 18.0575 26.8333 17.6867C26.8333 17.4323 26.7832 17.1805 26.6859 16.9455C26.5886 16.7106 26.4459 16.4971 26.2661 16.3172C26.0862 16.1374 25.8727 15.9947 25.6378 15.8974C25.4028 15.8001 25.151 15.75 24.8966 15.75Z" fill="#FF720D"/>
												</svg>
											</div>
											<div>
												<h2 class="text-black fs-32 font-w600 mb-0">892 <span class="text-success fs-18 font-w500">+2,7%</span></h2>
												<p class="mb-0 text-black font-w500">Orders</p>
											</div>	
										</div>
									</div>
									<div class="card-body p-0">
										<div id="widgetChart1" class="dashboard-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-xxl-6 col-sm-6">
								<div class="card">
									<div class="card-header media border-0 pb-0">
										<div class="media-body d-flex">
											<div class="mr-4 mt-1">
												<svg class="card-ico" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.4608 12.0692C17.0158 9.47919 16.835 5.09253 14.0816 2.72419C11.5733 0.56586 7.67079 0.711693 5.32579 3.12086C3.06246 5.44253 2.95163 9.12919 4.87079 11.5442C7.15746 14.4259 11.7716 14.7875 14.4608 12.0692Z" fill="#FF720D"/>
													<path d="M4.08329 26.8334H15.75C17.78 26.8334 18.6958 25.025 18.7191 23.2342C18.7541 20.615 17.7216 17.9259 15.7091 16.1992C12.0866 13.0025 6.55663 13.3409 3.35996 16.9634C1.60996 18.9467 1.16663 21.3559 1.16663 23.9167C1.16663 25.5267 2.47329 26.8334 4.08329 26.8334Z" fill="#FF720D"/>
													<path d="M25.0833 7.58333C25.0891 2.94 19.5999 0.145831 15.8374 2.85833C18.0541 5.6175 18.0541 9.54916 15.8374 12.3083C15.7849 12.3725 16.9983 12.9092 17.0916 12.9442C20.7024 14.4433 25.0774 11.5208 25.0833 7.58333Z" fill="#FF720D"/>
													<path d="M19.25 13.4167C17.8908 13.4167 16.555 13.79 15.3825 14.4842C15.5983 14.3559 16.9808 15.7909 17.15 15.9775C18.8416 17.78 19.8333 20.2592 19.8333 22.75V23.9167C19.8333 24.7508 19.5766 25.5675 19.0983 26.25H23.9166C25.5266 26.25 26.8333 24.9433 26.8333 23.3333C26.8333 21.2625 26.9383 19.2617 25.9175 17.3833C25.0891 15.8609 23.7358 14.6475 22.1375 13.9825C21.2216 13.6092 20.2358 13.4167 19.25 13.4167Z" fill="#FF720D"/>
												</svg>
											</div>
											<div>
												<h2 class="text-black fs-32 font-w600 mb-0">9,334 <span class="text-danger fs-18 font-w500">-0,5%</span></h2>
												<p class="mb-0 text-black font-w500">Customers</p>
											</div>	
										</div>
									</div>
									<div class="card-body p-0">
										<div id="widgetChart2" class="dashboard-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-xxl-12">
								<div class="card">
									<div class="card-header media border-0 pb-0">
										<div class="media-body d-flex">
											<div class="mr-4 mt-1">
												<svg class="card-ico" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M23.9167 10.5H4.08335C2.47252 10.5 1.16669 11.8058 1.16669 13.4167V14.5833C1.16669 16.1942 2.47252 17.5 4.08335 17.5H23.9167C25.5275 17.5 26.8334 16.1942 26.8334 14.5833V13.4167C26.8334 11.8058 25.5275 10.5 23.9167 10.5Z" fill="#FF720D"/>
													<path d="M23.9167 19.8334H4.08335C2.47252 19.8334 1.16669 21.1392 1.16669 22.75V23.9167C1.16669 25.5275 2.47252 26.8334 4.08335 26.8334H23.9167C25.5275 26.8334 26.8334 25.5275 26.8334 23.9167V22.75C26.8334 21.1392 25.5275 19.8334 23.9167 19.8334Z" fill="#FF720D"/>
													<path d="M23.9167 1.16669H4.08335C2.47252 1.16669 1.16669 2.47252 1.16669 4.08335V5.25002C1.16669 6.86085 2.47252 8.16669 4.08335 8.16669H23.9167C25.5275 8.16669 26.8334 6.86085 26.8334 5.25002V4.08335C26.8334 2.47252 25.5275 1.16669 23.9167 1.16669Z" fill="#FF720D"/>
												</svg>
											</div>
											<div>
												<h2 class="text-black fs-32 font-w600 mb-0">524</h2>
												<p class="mb-0 text-black font-w500">Menu</p>
											</div>	
										</div>
									</div>
									<div class="card-body p-0">
										<div id="widgetChart3" class="dashboard-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header pb-0 flex-wrap border-0">
										<div class="separator mb-3"></div>
										<div class="mr-auto mb-3">
											<h4 class="text-black fs-20">Customer Map</h4>
											<p class="fs-13 mb-0">Lorem ipsum dolor sit amet, consectetur</p>
										</div>	
										
										<div class="d-flex mb-3">
											<div class="custom-control custom-switch toggle-switch text-right mr-4">
												<input type="checkbox" class="custom-control-input" id="customSwitch11">
												<label class="custom-control-label fs-14 text-black pr-2" for="customSwitch11">Number</label>
											</div>
											<div class="custom-control custom-switch toggle-switch text-right mr-4">
												<input type="checkbox" class="custom-control-input" id="customSwitch12">
												<label class="custom-control-label fs-14 text-black pr-2" for="customSwitch12">Analytics</label>
											</div>
										</div>
										<div class="card-tabs mb-3">
											<ul class="nav nav-tabs" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#Monthly" role="tab">
														Monthly	
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link " data-toggle="tab" href="#Weekly" role="tab">
														Weekly
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#Today" role="tab">
														Today
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card-body tab-content pb-0 pt-2">
										<div class="tab-pane fade active show" id="Monthly">
											<div id="customerMap" class="customer-chart"></div>
										</div>
										<div class="tab-pane fade" id="Weekly">
											<div id="customerMap2" class="customer-chart"></div>
										</div>
										<div class="tab-pane fade" id="Today">
											<div id="customerMap3" class="customer-chart"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 flex-wrap pb-0">
										<div class="d-flex mb-3">
											<div class="separator"></div>
											<div class="mr-auto">
												<h4 class="text-black fs-20">Recent Order Request</h4>
												<p class="fs-13 mb-0">Lorem ipsum dolor</p>
											</div>	
										</div>
										<select class="form-control style-1 default-select mb-3">
											<option>Newest</option>
											<option>Oldest</option>
										</select>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive">
											<table class="table order-request">
												<tbody class="loadmore-content" id="orderRequestContent">
													<tr>
														<td>
															<div class="media align-items-center">
																<img class="mr-3 " width="87" src="images/card/Untitled-1.jpg" alt="DexignZone">
																<div class="media-body">
																	<h5 class="mt-0 mb-2"><a class="text-black" href="ecom-product-detail.html">Sweet Cheezy Pizza for Kids Meal (Small Size)</a></h5>
																	<p class="mb-0 text-primary">#0010235</p>
																</div>
															</div>
														</td>
														<td>
															<h5 class="mb-2 text-black wspace-no">Peter Parkur</h5>
															<p class="mb-0">South Corner st41256 london</p>
														</td>
														<td>
															<div class="d-flex align-items-center justify-content-center">
																<h4 class="mb-0 mr-3 fs-20 text-black d-inline-block">$7.4</h4>
																<p class="mb-0 fs-20 d-inline-block">x3</p>
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<a class="btn text-warning" href="javascript:void(0);">PENDING</a>
																<div class="dropdown ml-auto">
																	<a class="btn-link" data-toggle="dropdown">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																	</a>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		Accept order
																		</a>
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		Reject order
																		</a>
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		View Details
																		</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media align-items-center">
																<img class="mr-3 " width="87" src="images/card/Untitled-2.jpg" alt="DexignZone">
																<div class="media-body">
																	<h5 class="mt-0 mb-2"><a class="text-black" href="ecom-product-detail.html">Tuna soup spinach with himalaya salt</a></h5>
																	<p class="mb-0 text-primary">#0010235</p>
																</div>
															</div>
														</td>
														<td>
															<h5 class="mb-2 text-black wspace-no">Jimmy Kueai</h5>
															<p class="mb-0">South Corner St.41256 London</p>
														</td>
														<td>
															<div class="d-flex align-items-center justify-content-center">
																<h4 class="mb-0 mr-3 fs-20 text-black d-inline-block">$7.4</h4>
																<p class="mb-0 fs-20 d-inline-block">x3</p>
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<a class="btn text-warning" href="javascript:void(0);">PENDING</a>
																<div class="dropdown ml-auto">
																	<div class="btn-link" data-toggle="dropdown">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		Accept order
																		</a>
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		Reject order
																		</a>
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		View Details
																		</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media align-items-center">
																<img class="mr-3 " width="87" src="images/card/Untitled-3.jpg" alt="DexignZone">
																<div class="media-body">
																	<h5 class="mt-0 mb-2"><a class="text-black" href="ecom-product-detail.html">Extreme Deluxe Pizza Mozarella with Garlic</a></h5>
																	<p class="mb-0 text-primary">#0010235</p>
																</div>
															</div>
														</td>
														<td>
															<h5 class="mb-2 text-black wspace-no">Cindy Alexa</h5>
															<p class="mb-0">Blue Ocean St.41551 London</p>
														</td>
														<td>
															<div class="d-flex align-items-center justify-content-center">
																<h4 class="mb-0 mr-3 fs-20 text-black d-inline-block">$8.2</h4>
																<p class="mb-0 fs-20 d-inline-block">x1</p>
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<a class="btn text-success" href="javascript:void(0);">DELIVERED</a>
																<div class="dropdown ml-auto">
																	<div class="btn-link" data-toggle="dropdown">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		Accept order
																		</a>
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		Reject order
																		</a>
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		View Details
																		</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media align-items-center">
																<img class="mr-3 " width="87" src="images/card/Untitled-1.jpg" alt="DexignZone">
																<div class="media-body">
																	<h5 class="mt-0 mb-2"><a class="text-black" href="ecom-product-detail.html">Mozarella Pizza With Random Topping</a></h5>
																	<p class="mb-0 text-primary">#0010235</p>
																</div>
															</div>
														</td>
														<td>
															<h5 class="mb-2 text-black wspace-no">Cindy Alexa</h5>
															<p class="mb-0">Blue Ocean St.41551 London</p>
														</td>
														<td>
															<div class="d-flex align-items-center justify-content-center">
																<h4 class="mb-0 mr-3 fs-20 text-black d-inline-block">$8.2</h4>
																<p class="mb-0 fs-20 d-inline-block">x1</p>
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<a class="btn text-light" href="javascript:void(0);">CANCELED</a>
																<div class="dropdown ml-auto">
																	<div class="btn-link" data-toggle="dropdown">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		Accept order
																		</a>
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		Reject order
																		</a>
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		View Details
																		</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media align-items-center">
																<img class="mr-3 " width="87" src="images/card/Untitled-2.jpg" alt="DexignZone">
																<div class="media-body">
																	<h5 class="mt-0 mb-2"><a class="text-black" href="ecom-product-detail.html">Tuna soup spinach with himalaya salt</a></h5>
																	<p class="mb-0 text-primary">#0010235</p>
																</div>
															</div>
														</td>
														<td>
															<h5 class="mb-2 text-black wspace-no">Jimmy Kueai</h5>
															<p class="mb-0">Blue Ocean St.41551 London</p>
														</td>
														<td>
															<div class="d-flex align-items-center justify-content-center">
																<h4 class="mb-0 mr-3 fs-20 text-black d-inline-block">$7.4</h4>
																<p class="mb-0 fs-20 d-inline-block">x1</p>
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<a class="btn text-success" href="javascript:void(0);">DELIVERED</a>
																<div class="dropdown ml-auto">
																	<div class="btn-link" data-toggle="dropdown">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		Accept order
																		</a>
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		Reject order
																		</a>
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		View Details
																		</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
											<div class="card-footer border-0 pt-0 text-center">
												<a href="javascript:void(0);" class="btn btn-outline-primary dz-load-more" id="orderRequest" rel="ajax/order-request.html">View More</a>
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
        <!--**********************************
            Content body end
        ***********************************-->
		
		
		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
		
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://dexignzone.com/" target="_blank">DexignZone</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	
	
    <script src="vendor/peity/jquery.peity.min.js"></script>
	
	
	<script src="vendor/apexchart/apexchart.js"></script>
	
	
	<script src="js/dashboard/dashboard-1.js"></script>

    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
	
</body>


</html>
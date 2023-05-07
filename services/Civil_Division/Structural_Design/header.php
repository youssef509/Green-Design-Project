<?php include '../../../admin/layouts/config.php'; ?>
<!DOCTYPE HTML>
<HTML>
<head>
<meta charset="utf-8">
<!-- <meta name="og:description" content="احلا مسا عليكوا يا باشمهندسين" /> -->
<title>خدماتنا | التصميم الإنشائي</title>
<!-- Stylesheets -->
<link href="../../../assets/css/bootstrap.css" rel="stylesheet">
<link href="../../../assets/css/style.css" rel="stylesheet">
<link href="../../../assets/css/responsive.css" rel="stylesheet">
<link href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800;900&family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="../../../assets/css/color-switcher-design.css" rel="stylesheet">

<!-- Color Themes -->
<link id="theme-color-file" href="../../../assets/css/color-themes/default-color.css" rel="stylesheet">

<link rel="shortcut icon" href="../../../assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="../../../assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
<script src="../../../assets/js/respond.js"></script>
</head>

<body class="hidden-bar-wrapper rtl">

<div class="page-wrapper">
 	
	<!-- Preloader -->
	<div class="loader-wrap">
		<div class="preloader">
			<div class="preloader-close">x</div>
			<div id="handle-preloader" class="handle-preloader">
				<div class="animation-preloader">
					<div class="spinner"></div>
					<div class="txt-loading">
						<span data-text-preloader="G" class="letters-loading">
							G
						</span>
						<span data-text-preloader="R" class="letters-loading">
							R
						</span>
						<span data-text-preloader="E" class="letters-loading">
							E
						</span>
						<span data-text-preloader="E" class="letters-loading">
							E
						</span>
						<span data-text-preloader="N" class="letters-loading">
							N
						</span>
						<br>
						<span data-text-preloader="D" class="letters-loading">
							D
						</span>
						<span data-text-preloader="E" class="letters-loading">
							E
						</span>
						<span data-text-preloader="S" class="letters-loading">
							S
						</span>
						<span data-text-preloader="I" class="letters-loading">
							I
						</span>
						<span data-text-preloader="G" class="letters-loading">
							G
						</span>
						<span data-text-preloader="N" class="letters-loading">
							N
						</span>
					</div>
				</div>  
			</div>
		</div>
	</div>
	<!-- Preloader End -->
	
 	<!-- Header Style One / Two -->
    <header class="main-header header-style-two">
    	
		<!-- Header Top Two -->
        <div class="header-top-two">
            <div class="auto-container">
                <div class="inner-container clearfix">
					<!-- Top Left -->
					<div class="top-left clearfix">
						<div class="button-box">
							<a class="theme-btn contact-btn" href="contact/">تواصل معنا</a>
						</div>
						<ul class="info-links">
						<?php
							$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
							$stmt = $link->prepare("SELECT * FROM mail");
							$stmt ->execute();
							$resultSet = $stmt->get_result();
							$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
							?>
							<?php foreach($rows as $row){;?>
							<li><span class="icon flaticon-email-2"></span> <a href="mailto:<?php echo $row['link'] ?>"><?php echo $row['link'] ?></a></li>
							<?php }?>
							<?php
							$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
							$stmt = $link->prepare("SELECT * FROM phone");
							$stmt ->execute();
							$resultSet = $stmt->get_result();
							$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
							?>
							<?php foreach($rows as $row){;?>
							<li><span class="icon flaticon-call"></span><a href="https://wa.me/<?php echo $row['phonenumber'] ?>"><?php echo $row['phonenumber'] ?></a>
							<?php }?>
						</ul>
					</div>
					
					<!-- Top Right -->
                    <div class="top-right pull-right clearfix">
						<!-- Social Box -->
						<ul class="social-box">
							<li class="follow">تابعنا</li>
							<?php
							$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
							$stmt = $link->prepare("SELECT * FROM facebook");
							$stmt ->execute();
							$resultSet = $stmt->get_result();
							$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
							?>
							<?php foreach($rows as $row){;?>
							<li><a href="<?php echo $row['link'] ?>" class="fa fa-facebook-f"></a></li>
							<?php }?>
							<?php
							$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
							$stmt = $link->prepare("SELECT * FROM instagram");
							$stmt ->execute();
							$resultSet = $stmt->get_result();
							$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
							?>
							<?php foreach($rows as $row){;?>
							<li><a href="<?php echo $row['link'] ?>" class="fa fa-instagram" ></a></li>
							<?php }?>
							<?php
							$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
							$stmt = $link->prepare("SELECT * FROM twitter");
							$stmt ->execute();
							$resultSet = $stmt->get_result();
							$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
							?>
							<?php foreach($rows as $row){;?>
							<li><a href="<?php echo $row['link'] ?>" class="fa fa-twitter"></a></li>
							<?php }?>
							<?php
							$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
							$stmt = $link->prepare("SELECT * FROM linkedin");
							$stmt ->execute();
							$resultSet = $stmt->get_result();
							$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
							?>
							<?php foreach($rows as $row){;?>
							<li><a href="<?php echo $row['link'] ?>" class="fa fa-linkedin"></a></li>
							<?php }?>
							<?php
							$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
							$stmt = $link->prepare("SELECT * FROM youtube");
							$stmt ->execute();
							$resultSet = $stmt->get_result();
							$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
							?>
							<?php foreach($rows as $row){;?>
							<li><a href="<?php echo $row['link'] ?>" class="fa fa-youtube-play"></a></li>
							<?php }?>
						</ul>
                    </div>
					
                </div>
            </div>
        </div>
		
		<!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
                    
                    <div class="pull-left logo-box">
                        <div class="logo"><a href="/"><img src="../../../assets/images/logo2.png" alt="" title=""></a></div>
                    </div>
                    
					<div class="nav-outer clearfix">
						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<!-- Toggle Button -->    	
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							
							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class="dropdown"><a href="/">الرئيسية</a></li>
									<li class="dropdown"><a href="../about/">من نحن</a></li>
									<li class="current dropdown"><a href="../services/">خدماتنا</a></li>
									<li class="dropdown"><a href="../projects/">المشاريع</a></li>
									<li class="dropdown"><a href="../shop/">متجر</a></li>
									<li class="dropdown"><a href="../blog/">مقالات</a></li>
									<li class="dropdown"><a href="../contact/">تواصل معنا</a></li>
								</ul>
							</div>
						</nav>
						
						<!-- Main Menu End-->
						<div class="outer-box clearfix">
							
							
							
							<!-- Search Btn -->
							<div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>
							
							<!-- Nav Btn -->
							<div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-2"></span></div>
								
						</div>
					</div>
					
                </div>
            </div>
        </div>
        <!--End Header Upper-->
		
		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="/" title=""><img src="../../../assets/images/logo2.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
				
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
					<!-- Main Menu End-->
					
					<!-- Mobile Navigation Toggler -->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
					
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="/"><img src="../../../assets/images/logo2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->
	
	<!-- Sidebar Cart Item -->
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						X
					</a>
				</div>
				<div class="sidebar-textwidget">
					
					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="logo">
								<a href="/"><img src="../../../assets/images/logo-1.png" alt="" /></a>
							</div>
							<div class="content-box">
								<h4>من نحن؟</h4>
								<p class="text">نتميز في مكتب التصميم الأخضر بأننا لا نعتمد النمط التقليدي المتبع عادة في تصميم المشاريع مما يتيح لنا الإبداع وإطلاق أفكار تصميمية متفردة لكل مشروع من المشاريع. ونبتكر مساحات رائعة مبدعة وعملية في ذات الوقت، وتمثل التطبيق الحقيقي لما يدور في أفكار العملاء ويلبي متطلباتهم بدقة.</p>
								<a href="contact/" class="theme-btn btn-style-one"><span class="txt">استشارة</span></a>
							</div>
							<div class="contact-info">
								<h4>معلومات التواصل</h4>
								<ul class="list-style-one rtl">
									<?php
									$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
									$stmt = $link->prepare("SELECT * FROM phone");
									$stmt ->execute();
									$resultSet = $stmt->get_result();
									$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
									?>
									<?php foreach($rows as $row){;?>
									<li><span class="icon fa fa-phone"></span><?php echo $row['phonenumber']; ?></li>
									<?php }?>
									<?php
									$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
									$stmt = $link->prepare("SELECT * FROM mail");
									$stmt ->execute();
									$resultSet = $stmt->get_result();
									$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
									?>
									<?php foreach($rows as $row){;?>
									<li><span class="icon fa fa-envelope"></span><?php echo $row['link']; ?></li>
									<?php }?>
									<li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
								</ul>
							</div>
							<!-- Social Box -->
							<ul class="social-box">
							<?php
							$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
							$stmt = $link->prepare("SELECT * FROM facebook");
							$stmt ->execute();
							$resultSet = $stmt->get_result();
							$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
							?>
							<?php foreach($rows as $row){;?>
							<li><a href="<?php echo $row['link'] ?>" class="fa fa-facebook-f"></a></li>
							<?php }?>
							<?php
							$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
							$stmt = $link->prepare("SELECT * FROM instagram");
							$stmt ->execute();
							$resultSet = $stmt->get_result();
							$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
							?>
							<?php foreach($rows as $row){;?>
							<li><a href="<?php echo $row['link'] ?>" class="fa fa-instagram" ></a></li>
							<?php }?>
							<?php
							$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
							$stmt = $link->prepare("SELECT * FROM twitter");
							$stmt ->execute();
							$resultSet = $stmt->get_result();
							$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
							?>
							<?php foreach($rows as $row){;?>
							<li><a href="<?php echo $row['link'] ?>" class="fa fa-twitter"></a></li>
							<?php }?>
							<?php
							$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
							$stmt = $link->prepare("SELECT * FROM linkedin");
							$stmt ->execute();
							$resultSet = $stmt->get_result();
							$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
							?>
							<?php foreach($rows as $row){;?>
							<li><a href="<?php echo $row['link'] ?>" class="fa fa-linkedin"></a></li>
							<?php }?>
							<?php
							$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
							$stmt = $link->prepare("SELECT * FROM youtube");
							$stmt ->execute();
							$resultSet = $stmt->get_result();
							$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
							?>
							<?php foreach($rows as $row){;?>
							<li><a href="<?php echo $row['link'] ?>" class="fa fa-youtube-play"></a></li>
							<?php }?>
						</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- END sidebar widget item -->
	<!-- Page Title -->
<section class="page-title">
    	<div class="content" style="background-image: url(../../../assets/images/background/15.jpg)">
			<div class="auto-container">
				<h1>القسم المعماري</h1>
			</div>
		</div>
		<ul class="page-breadcrumb">			
			<li>تفاصيل الخدمة</li>
			<li><a href="../../../">الرئيسية</a></li>
		</ul>
    </section>
    <!-- End Page Title -->
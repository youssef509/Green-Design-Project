<?php include("header.php")?>
 
<?php
$id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;
$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
$stmt = $link->prepare("SELECT * FROM blog WHERE id = '$id'");
$stmt ->execute();
$resultSet = $stmt->get_result();
$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
foreach($rows as $row){;?>
<!-- Page Title -->
<section class="page-title">
    	<div class="content" style="background-image: url(../../assets/images/background/1/2.png)">
			<div class="auto-container">
				<h1><?php echo $row['title'] ?></h1>
			</div>
		</div>
		<ul class="page-breadcrumb">
			<li>تفاصيل المقالة</li>
			<li><a href="../../../">الرئيسية</a></li>
		</ul>
    </section>
    <!-- End Page Title -->
	<!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
					<div class="blog-detail">
						<div class="inner-box">
							<!-- Social Box -->
							<ul class="social-box">
								<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
								<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
								<li><a href="https://www.google.com/" class="fa fa-google"></a></li>
								<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
								<li><a href="https://www.pinterest.com/" class="fa fa-pinterest-p"></a></li>
								<li><a href="https://youtube.com/" class="fa fa-youtube-play"></a></li>
							</ul>
							<div class="image">
								<img src="../../assets/images/resource/news-17.jpg" alt="" />
							</div>
							<div class="lower-content">
								<ul class="post-info">
									<li><span class="icon fa fa-user"></span><?php echo $row['author'] ?></li>
								</ul>
								<h4><?php echo $row['start1'] ?></h4>
								<p><?php echo $row['top_p'] ?></p>
								<blockquote style="background-image: url(assets/images/background/pattern-7.png)">
									<span class="icon fa fa-quote-left"></span>
										<?php echo $row['green'] ?> 
								</blockquote>
								<div class="two-column">
									<div class="row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<p><?php echo $row['data1'] ?></p>
											<ul class="list">
												<li><?php echo $row['data2'] ?></li>
												<p><?php echo $row['data3'] ?></p>
												<li><?php echo $row['data4'] ?></li>
												<p><?php echo $row['data5'] ?></p>
												<li><?php echo $row['data6'] ?></li>
												<p><?php echo $row['data7']?></p>
											</ul>
										</div>
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<div class="image">
												<img src="../../assets/images/resource/news-18.jpg" alt="" />
											</div>
											<br><br><br><br>
											<div class="image">
												<img src="../../assets/images/resource/news-18.jpg" alt="" />
											</div>
										</div>
									</div>
								</div>
								<h4><?php echo $row['data8'] ?></h4>
								<p><?php echo $row['data9'] ?></p>
								<p><?php echo $row['data10'] ?></p>
								<ul class="list">
									<li><?php echo $row['data11'] ?></li>
									<li><?php echo $row['data12'] ?></li>
									<li><?php echo $row['data13'] ?></li>
									<li><?php echo $row['data14'] ?></li>
								</ul>
							</div>
						</div>
						
						<!-- Author Box -->
						<div class="blog-author-box">
							<div class="author-inner">
								<div class="thumb"><img src="../../assets/images/resource/omar.jpg" alt=""></div>
								<h4 class="name"><?php echo $row['author'] ?></h4>
								<div class="text"><?php echo $row['data15'] ?></div>
							</div>
							<ul class="social-icon clearfix">
								<li class="linkedin"><a href="<?php echo $row['data16'] ?>"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar">
						
						<!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder=".....ابحث هنا....." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>
						<!-- Post Widget -->
						<div class="sidebar-widget post-widget">
							<!-- Sidebar Title -->
							<div class="title-box">
								<h4>مقالات اخري</h4>
							</div>
							<div class="widget-content">
								<div class="post">
									<div class="thumb"><a href="blog-detail.html"><img src="../../assets/images/resource/post-thumb-3.jpg" alt=""></a></div>
									<h6><a href="blog-detail.html">This is How I Relax on Lazy Sundays</a></h6>
									<div class="post-date">31 OCT 2021</div>
								</div>

								<div class="post">
									<div class="thumb"><a href="blog-detail.html"><img src="../../assets/images/resource/post-thumb-4.jpg" alt=""></a></div>
									<h6><a href="blog-detail.html">Going Shopping in New Dress & a Hat</a></h6>
									<div class="post-date">31 OCT 2021</div>
								</div>
								
								<div class="post">
									<div class="thumb"><a href="blog-detail.html"><img src="../../assets/images/resource/post-thumb-5.jpg" alt=""></a></div>
									<h6><a href="blog-detail.html">How an Island Forms in River And Stones</a></h6>
									<div class="post-date">31 OCT 2021</div>
								</div>
								
							</div>
						</div>
						
						<!-- Categories Widget -->
						<div class="sidebar-widget categories-widget">
							<div class="widget-content">
								<!-- Sidebar Title -->
								<div class="title-box">
									<h4>خدماتنا</h4>
								</div>
								<ul class="blog-cat-two">
									<li><a href="accurate-measurements.html">التصميم المعماري</a></li>
									<li><a href="waste-removal.html">التصميم الداخلي</a></li>
									<li><a href="warranty-service.html">التصميم الخارجي</a></li>
									<li><a href="project-planning.html">تصميم الكهربائية</a></li>
									<li><a href="constant-maintenance.html">تصميم ميكانيكي</a></li>
									<li><a href="qualified-specialists.html">التصميم الإنشائي</a></li>
								</ul>
							</div>
						</div>
						
						<!-- Categories Widget -->
						<div class="sidebar-widget categories-widget">
							<div class="widget-content">
								<!-- Sidebar Title -->
								<div class="title-box">
									<h4>روابط مفيدة</h4>
								</div>
								<ul class="blog-cat-two">
									<li class="active"><a href="accurate-measurements.html">Our Founder<span>12</span></a></li>
									<li><a href="waste-removal.html">Construction<span>15</span></a></li>
									<li><a href="warranty-service.html">Entrepreneurship<span>05</span></a></li>
									<li><a href="project-planning.html">FAQ’s<span>34</span></a></li>
									<li><a href="constant-maintenance.html">Design & Assets<span>11</span></a></li>
								</ul>
							</div>
						</div>
						
						<!-- Company Widget -->
						<div class="sidebar-widget company-widget">
							<!-- Sidebar Title -->
							<div class="title-box">
								<h4>مشاريع الشركة</h4>
							</div>
							<div class="widget-content">
							
								<!-- Project Widget -->
								<div class="project-widget">
									<div class="inner-box">
										<div class="image">
											<img src="../../assets/images/gallery/35.jpg" alt="" />
											<div class="overlay-box">
												<div class="content">
													<h5><a href="#">LifeChurch Phase 2A, Gymnatorium</a></h5>
													<div class="role">Our Role: <span>Design-Build</span></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Project Widget -->
								<div class="project-widget">
									<div class="inner-box">
										<div class="image">
											<img src="../../assets/images/gallery/36.jpg" alt="" />
											<div class="overlay-box">
												<div class="content">
													<h5><a href="#">Dassault Falcon Storage Training Addition</a></h5>
													<div class="role">Our Role: <span>Design-Build</span></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</aside>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Sidebar Page Container -->
	
    <?php }?>
	<!-- End Project Detail Section -->
<?php include("footer.php");?>

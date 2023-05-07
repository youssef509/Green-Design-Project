<!-- Main Footer -->
<footer class="footer-style-two" style="background-image:url(../../assets/images/background/1/1.png)">
    	<div class="auto-container">
			
        	<!-- Widgets Section -->
            <div class="widgets-section">
            	<div class="row clearfix">
					
					<!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget logo-widget">
									<div class="widget-content">
										<div class="logo">
											<a href="../../"><img src="../../assets/images/logo_2.png" alt="" /></a>
										</div>
										<div class="text">نسعى لأن نكون الخيار الأنسب للعميل لتحقيق كل ما يحتاجه في القطاع الهندسي.</div>
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
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget links-widget">
									<h5> الوصول السريع</h5>
									<ul class="list-link">
										<li><a href="../">الرئيسية</a></li>
										<li><a href="../about/">من نحن</a></li>
										<li><a href="../services/">خدماتنا</a></li>
										<li><a href="../projects/">المشاريع</a></li>
										<li><a href="../shop/">متجر</a></li>
										<li><a href="../blog/">مقالات</a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget links-widget">
									<h5>خدماتنا</h5>
									<ul class="list-link">
										<li><a href="../services/">التصميم المعماري</a></li>
										<li><a href="../services/">التصميم الداخلي</a></li>
										<li><a href="../services/">التصميم الخارجي</a></li>
										<li><a href="../services/">التصميم الإنشائي</a></li>
										<li><a href="../services/">تصميم ميكانيكي</a></li>
										<li><a href="../services/">تصميم الكهربائية</a></li>
									</ul>
								</div>
							</div>
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget links-widget">
									<h5>اشترك في نشرتنا الاخبارية</h5>
									<!-- Subscribe Form -->
									<div class="subscribe-form-two">
										<form method="post" action="contact.html">
											<div class="form-group">
												<span class="icon fa fa-envelope"></span>
												<input type="email" name="email" value="" placeholder="ادخل البريد الالكتروني" required="">
												<button type="submit" class="theme-btn btn-style-one"><span class="txt">اشتراك الان</span></button>
											</div>
										</form>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Footer Gallery -->
			<div class="footer-gallery">
				<div class="footer-gallery-carousel owl-carousel owl-theme">
					<div class="slide">
						<a href="../../assets/images/clients/Artboard 1.png" data-fancybox="gallery" data-caption=""><img src="../../assets/images/clients/Artboard 1.png" alt="" /></a>
					</div>
					<div class="slide">
						<a href="../../assets/images/clients/Artboard 2.png" data-fancybox="gallery" data-caption=""><img src="../../assets/images/clients/Artboard 2.png" alt="" /></a>
					</div>
					<div class="slide">
						<a href="../../assets/images/clients/Artboard 3.png" data-fancybox="gallery" data-caption=""><img src="../../assets/images/clients/Artboard 3.png" alt="" /></a>
					</div>
					<div class="slide">
						<a href="../../assets/images/clients/4.png" data-fancybox="gallery" data-caption=""><img src="../../assets/images/clients/4.png" alt="" /></a>
					</div>
					<div class="slide">
						<a href="../../assets/images/clients/Artboard 5.png" data-fancybox="gallery" data-caption=""><img src="../../assets/images/clients/Artboard 5.png" alt="" /></a>
					</div>
					<div class="slide">
						<a href="../../assets/images/clients/Artboard 6.png" data-fancybox="gallery" data-caption=""><img src="../../assets/images/clients/Artboard 6.png" alt="" /></a>
					</div>
					<div class="slide">
						<a href="../../assets/images/clients/Artboard 7.png" data-fancybox="gallery" data-caption=""><img src="../../assets/images/clients/Artboard 7.png" alt="" /></a>
					</div>
				</div>
			</div>
			
		</div>
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="copyright">&copy; <a href="/">GREEN DESIGN</a> - Copyright 2022.<br> Devleoped by <a href="https://yelnaggar.com">YOUSSEF ELNAGGAR</a></div>
			</div>
		</div>
	</footer>
	<!-- End Main Footer -->
	
	
</div>
<!-- End PageWrapper -->

<!-- Search Popup -->
<div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-cancel-1"></span></button>
	<button class="close-search"><span class="flaticon-up-arrow"></span></button>
	<form method="post" action="blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->



<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="../../assets/js/jquery.js"></script>
<script src="../../assets/js/popper.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../../assets/js/jquery.fancybox.js"></script>
<script src="../../assets/js/appear.js"></script>
<script src="../../assets/js/parallax.min.js"></script>
<script src="../../assets/js/tilt.jquery.min.js"></script>
<script src="../../assets/js/jquery.paroller.min.js"></script>
<script src="../../assets/js/owl.js"></script>
<script src="../../assets/js/wow.js"></script>
<script src="../../assets/js/mixitup.js"></script>
<script src="../../assets/js/validate.js"></script>
<script src="../../assets/js/nav-tool.js"></script>
<script src="../../assets/js/jquery-ui.js"></script>
<script src="../../assets/js/script.js"></script>
<script src="../../assets/js/color-settings.js"></script>

</body>
</HTML>
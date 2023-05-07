<?php include("header.php")?>
 
<?php
$id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;
$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
$stmt = $link->prepare("SELECT * FROM projects WHERE id = '$id'");
$stmt ->execute();
$resultSet = $stmt->get_result();
$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
foreach($rows as $row){;?>
<!-- Page Title -->
<section class="page-title">
    	<div class="content" style="background-image: url(../../uploads/projects/<?php echo $row['photo1'] ?>)">
			<div class="auto-container">
				<h1><?php echo $row['projectname'] ?></h1>
			</div>
		</div>
		<ul class="page-breadcrumb">
			<li>تفاصيل المشروع</li>
			<li><a href="../../../">الرئيسية</a></li>
		</ul>
    </section>
    <!-- End Page Title -->
	
	<!-- Project Detail Section -->
	<section class="projects-detail-section">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title"></div>
						<h2><?php echo $row['engtype1'] ?></h2>
					</div>
					<div class="pull-right">
						<span class="heart-icon flaticon-heart"></span>
						<a href="../../../contact/" class="theme-btn btn-style-two"><span class="txt">استشارة</span></a>
					</div>
				</div>
			</div>
			<!-- End Title Box -->
			
			<!-- Info Box -->
			<div class="info-box">
				<div class="info-upper">
					<div class="row clearfix">
					
						<!-- Info Column -->
						<div class="info-column col-lg-3 col-md-6 col-sm-12">
							<div class="column-inner">
								<div class="text">
									<strong>:المشروع</strong>
									<?php echo $row['type'] ?>
								</div>
							</div>
						</div>
						
						<!-- Info Column -->
						<div class="info-column col-lg-3 col-md-6 col-sm-12">
							<div class="column-inner">
								<div class="text">
									<strong>:مساحة المشروع</strong>
                                    <?php echo $row['distance'] ?>
								</div>
							</div>
						</div>
						
						<!-- Info Column -->
						<div class="info-column col-lg-3 col-md-6 col-sm-12">
							<div class="column-inner">
								<div class="text">
									<strong>:نوع الطراز المعماري</strong>
                                    <?php echo $row['engtype'] ?>
								</div>
							</div>
						</div>
						
						<!-- Info Column -->
						<div class="info-column col-lg-3 col-md-6 col-sm-12">
							<div class="column-inner">
								<div class="text">
									<strong>:الموقع</strong>
									<?php echo $row['location'] ?>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Lower Info -->
				<div class="lower-info">
					<div class="clearfix">
						<div class="pull-left">
							<ul class="info-list">
								<li><span> التاريخ</span>:<?php echo $row['date'] ?></li>
								<li><span>الخدمة :</span><?php echo $row['engtype1'] ?> </li>
							</ul>
						</div>
						<div class="pull-right">
							<!-- Social Box -->
							<ul class="social-box">
								<li class="follow">Share on:</li>
								<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
								<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
								<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
								<li><a href="https://youtube.com/" class="fa fa-youtube-play"></a></li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
			<!-- End Info Box -->
			
			<!-- Image -->
			<div class="main-image">
				<img src="../../uploads/projects/<?php echo $row['photo1'] ?>" alt="" />
			</div>
			
			<h3> </h3>
			<p><?php echo $row['top_p1'] ?></p>
			<p><?php echo $row['top_p2'] ?></p>
			<p><?php echo $row['top_p3'] ?></p>
			<p><?php echo $row['top_p4'] ?></p>
			<p><?php echo $row['top_p5'] ?></p>
			<div class="row clearfix">
				<!-- Column -->
				<div class="column col-lg-6 col-md-6 col-sm-12">
					<!-- Image -->
					<div class="image">
						<img src="../../uploads/projects/<?php echo $row['photo2'] ?>" alt="" />
					</div>
					<h4><?php echo $row['tabel1'] ?></h4>
					<p><?php echo $row['table1_p'] ?></p>
					<ul class="project-list">
						<li><?php echo $row['table1_li1'] ?></li>
						<li><?php echo $row['table1_li2'] ?></li>
                        <li><?php echo $row['table1_li3'] ?></li>
                        <li><?php echo $row['table1_li4'] ?></li>
					</ul>
				</div>
				<!-- Column -->
				<div class="column col-lg-6 col-md-6 col-sm-12">
					<!-- Image -->
					<div class="image">
						<img src="../../uploads/projects/<?php echo $row['photo3'] ?>" alt="" />
					</div>
					<h4><?php echo $row['table2'] ?></h4>
					<p><?php echo $row['table2_p'] ?></p>
					<ul class="project-list">
						<li><?php echo $row['table2_li1'] ?></li>
						<li><?php echo $row['table2_li2'] ?></li>
						<li><?php echo $row['table2_li3'] ?></li>
                        <li><?php echo $row['table2_li4'] ?></li>
					</ul>
				</div>

				<h4></h4>

			</div>
			
			
			
		</div>
	</section>
    <?php }?>
	<!-- End Project Detail Section -->
<?php include("footer.php");?>

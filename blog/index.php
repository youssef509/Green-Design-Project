<?php include("header.php"); // Start Code for Page Content After This Line ?>
<?php
$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
$stmt = $link->prepare("SELECT * FROM blog");
$stmt ->execute();
$resultSet = $stmt->get_result();
$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
?>
<!-- Page Title -->
<section class="page-title">
    	<div class="content" style="background-image: url(../assets/images/background/1/2.png)">
			<div class="auto-container">
				<h1>مقالاتنا</h1>
			</div>
		</div>
		<ul class="page-breadcrumb">
            <li>مقالات</li>
			<li><a href="../">الرئيسية</a></li>
		</ul>
    </section>
    <!-- End Page Title -->
	<!-- News Section -->
	<section class="news-section">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- News Block -->
                <?php foreach($rows as $row){ ?>
				<div class="news-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
                        <?php echo'<a href="Details/index.php?id='.$row['id'].'">'?><img src="../assets/images/resource/4.jpeg" alt="" /></a>
							<div class="post-date">2022</div>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="icon fa fa-user"></span><?php echo $row['author'] ?></li>								 
							</ul>
							<h4><?php echo'<a href="Details/index.php?id='.$row['id'].'">'; echo $row['title'] ?></a></h4>
							<div class="text"><?php echo $row['start1'] ?></div>
						</div>
					</div>
				</div>
                <?php }; ?>
			</div>
		</div>
	</section>
	<!-- End News Section -->
<?php include("footer.php") // You Must End Your Code for Page Content Before This Line ?>